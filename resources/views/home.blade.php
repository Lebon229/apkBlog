<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>APK Blog</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box align-items-center">
                        <h1 style="color:#fff" class="mt-2">ApkBlog</h1>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    
                    @guest
                    <div class="dropdown d-inline-block">
                        <a href="/login">
                            <button type="button" class="btn btn-success fab fa-connectdevelop" id="page-header-user">
                                <span class="d-none d-xl-inline-block ms-1">Se Connecter</span>
                            </button>
                        </a>
                        <a href="/register">
                            <button type="button" class="btn btn-success fas fa-cash-register" id="page-header-user">
                                <span class="d-none d-xl-inline-block ms-1">S'Enregistrer</span>
                            </button>
                        </a>
                    </div>
                    @else
                    <div  aria-labelledby="">
                    <button type="button" class="btn btn-danger mdi-logout" id="page-header-user">
                                    <a class="" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Deconnecter') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </button>
                                </div>
                    @endguest

                </div>
            </div>
        </header>



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 ">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <!-- center modal -->
                                        @guest
                                        @else
                                            @if(Auth::user()->profile_type=="guest")
                                            @else
                                            <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"> Ajouter un article</button>
                                            @endif    
                                        @endguest
                                        <div class="modal fade bs-example-modal-center" tabindex="-1" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ajouter un article</h5>
                                                        <button type="  button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="/storearticle" id="articleForm"  enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row mb-4">
                                                                <label class="col-sm-4 col-form-label">Titre de l'article </label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" name="titre">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                                <label class="col-sm-4 col-form-label">Description de l'article</label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" name="description">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-4">
                                                                <label class="col-sm-4 col-form-label">Image de l'article</label>
                                                                <div class="col-sm-8">
                                                                    <input type="file" class="form-control" name="file">
                                                                </div>
                                                            </div>

                                                            <div class="row justify-content-end">
                                                                <div class="col-sm-12">
                                                                    <button type="submit" class="btn btn-success w-md">Enregistrer</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                    </div>

                                </div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom justify-content-center pt-2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#all-post" role="tab">
                                            Tous les articles disponibles
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-4">
                                    <div class="tab-pane active" id="all-post" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-xl-10">
                                                    <div>
                                                        <div class="row">
                                                            @foreach($article as $article)
                                                            <div class="col-sm-6">
                                                                <div class="card p-1 border shadow-none">
                                                                    <div class="p-3">
                                                                        <h5><a href="blog-details.html" class="text-dark">{{$article->title}}</a></h5>
                                                                        <p class="text-muted mb-0">{{$article->created_at}}</p>
                                                                    </div>

                                                                    <div class="position-relative">
                                                                        <img src="file/{{$article->image}}" alt="" class="img-thumbnail">
                                                                    </div>

                                                                    <div class="p-3">
                                                                        <ul class="list-inline">
                                                                            <li class="list-inline-item me-3">
                                                                                <a href="/like/{{$article->id}}" class="text-muted">
                                                                                    <i class="fas fa-heart align-middle text-muted me-1"></i>{{$article->liked_number}} Like
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item me-3">
                                                                                <a href="/unlike/{{$article->id}}" class="text-muted">
                                                                                    <i class="fas fa-heart-broken align-middle text-muted me-1"></i>{{$article->unliked_number}} disLike
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item me-3">
                                                                                <a href="#" class="text-muted">
                                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i>{{$article->number_of_comments}} Commentaires
                                                                                </a>
                                                                            </li>
                                                                            @guest
                                                                            @else
                                                                                @if(Auth::user()->profile_type=="guest")
                                                                                @else
                                                                                <li class="list-inline-item me-3">
                                                                                    <a href="/supprimer/{{$article->id}}" class="text-muted">
                                                                                        <i class="fas fa-trash-alt align-middle text-danger me-1"></i>Supprimer l'article
                                                                                    </a>
                                                                                </li>
                                                                                @endif    
                                                                            @endguest
                                                                        </ul>
                                                                        <p>{{$article->description}}</p>
                                                                        <form method="POST" action="/comments">
                                                                            @csrf
                                                                            <div>
                                                                                <input type="hidden" value="{{$article->id}}" name="id">
                                                                                <div class="form-floating mb-3">
                                                                                <input type="text" class="form-control" id="floatingnameInput" placeholder="Enter Name" value="" name="description">
                                                                                <label for="floatingnameInput">Mettre un commentaire</label>
                                                                            </div>
                                                                            <button class="btn btn-info" type="submit">Enregistrer votre commentaire</button>
                                                                        </form
>                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


           <center>
           <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Copyrigth.
                        </div>
                        </div>
                    </div>
                </div>
            </footer>
           </center>
        </div>
        <!-- end main content-->

    </div>

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

    <script src="{{asset('assets/js/app.js')}}"></script>

</body>

</html>