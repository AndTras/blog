<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Blog</title>
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <a href="{{ url('vue') }}">
                    <button type="button" class="btn btn-outline-success" >
                        VueJS
                        <i class="fab fa-vuejs"></i>
                    </button>
                    </a>
                    <a href="{{ url('angular') }}">
                    <button type="button" class="btn btn-outline-danger">
                        Angular
                        <i class="fab fa-angular"></i>
                    </button>
                    </a>
                </div>
                <div class="col-4 text-center">
                    <a class="blog-header-logo text-dark h2" href="#">BLOG</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="text-muted" href="#" aria-label="Search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
                            viewBox="0 0 24 24" focusable="false">
                            <title>Search</title>
                            <circle cx="10.5" cy="10.5" r="7.5" />
                            <path d="M21 21l-5.2-5.2" />
                        </svg>
                    </a>
                    <a class="btn btn-sm btn-outline-secondary" href="#">Iniciar sesión</a>
                </div>
            </div>
        </header>
        @yield('content')
        {{-- <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#">World</a>
                <a class="p-2 text-muted" href="#">U.S.</a>
                <a class="p-2 text-muted" href="#">Technology</a>
                <a class="p-2 text-muted" href="#">Design</a>
                <a class="p-2 text-muted" href="#">Culture</a>
                <a class="p-2 text-muted" href="#">Business</a>
                <a class="p-2 text-muted" href="#">Politics</a>
                <a class="p-2 text-muted" href="#">Opinion</a>
                <a class="p-2 text-muted" href="#">Science</a>
                <a class="p-2 text-muted" href="#">Health</a>
                <a class="p-2 text-muted" href="#">Style</a>
                <a class="p-2 text-muted" href="#">Travel</a>
            </nav>
        </div>

        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and
                    efficiently about what’s most interesting in this post’s contents.</p>
                <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">Featured post</h3>
                        <div class="mb-1 text-muted">Nov 12</div>
                        <p class="card-text mb-auto">This is a wider card with supporting text below as a natural
                            lead-in to additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                            aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div
                    class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-success">Design</strong>
                        <h3 class="mb-0">Post title</h3>
                        <div class="mb-1 text-muted">Nov 11</div>
                        <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="stretched-link">Continue reading</a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                            preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                            aria-label="Placeholder: Thumbnail">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                dy=".3em">Thumbnail</text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
 --}}

    <footer class=" blog-footer mt-5 pt-5 col-12 d-flex justify-content-center">
        <p> <a href="https://github.com/AndTras"> Anderson Traslaviña</a></p>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>