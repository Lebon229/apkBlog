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
                        <h1 style="color:#fff" class="mt-2">APK BLOG</h1>
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

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1" key="t-henry">Henry</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                            <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                            <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                        </div>
                    </div>

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
                                        <button type="button" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center"> Ajouter un article</button>

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
                                            All Post
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
                                                                                <a href="#" class="text-muted">
                                                                                    <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                                                                </a>
                                                                            </li>
                                                                            <li class="list-inline-item me-3">
                                                                                <a href="#" class="text-muted">
                                                                                    <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <p>{{$article->description}}</p>

                                                                        <div>
                                                                            <a href="#" class="text-primary">Read more <i class="mdi mdi-arrow-right"></i></a>
                                                                        </div>
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


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Skote.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
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