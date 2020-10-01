<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::orderBy('id', 'desc')->get();
        return response()->json($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new post();
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->autor_id = $request->autor;

        if($request->file('imagen') != null) {
            $post->imagen= $post->save_image($request->file('imagen'));
        }
        $post->save();

        if($post->id){
            return 'Super ya tienes un nuevo post!';
        }else{
            return 'Ups algo paso no puedes guardar el post!';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {   
        $post =  post::with('autor')->find($post->id);
        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $post = post::find($post->id);
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $post = post::find($id);
        $post->titulo = $request->titulo;
        $post->contenido = $request->contenido;
        $post->autor_id = $request->autor;
        if($request->file('imagen') != null) {
            $post->imagen= $post->save_image($request->file('imagen'));
        }
        $post->save();

        if($post->id){
            return 'Super has actualizado el post!';
        }else{
            return 'Ups algo paso no se puedo actualizar el post!';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post = post::find($post->id);
        $post->delete_image($post->imagen);
        $post->delete();
        return 'eliminado';
    }
}
