<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class post extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'contenido', 'imagen', 'autor_id'
    ];

    public function save_image($file){
        $path_name = time().'.'.$file->getClientOriginalExtension();
        Storage::disk('images')->put($path_name, file_get_contents($file->getRealPath()));
        return $path_name;
    }
    
    public function delete_image($path_name){
        Storage::disk('images')->delete($path_name);
        return true;
    }

    public function autor()
    {
        return $this->belongsTo('App\Models\autor');
    }

    public function fecha($fecha){
        $newDate = date("d-m-Y", strtotime($fecha));  
        return $newDate;
    }
}
