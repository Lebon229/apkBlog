<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ApkBlog</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="style.css">
        <!-- Fonts -->
        <link href="https://bootswatch.com/5/flatly/bootstrap.min.css" rel="stylesheet">
        <!-- Styles -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">ApkBlog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link active" href="/">Articles
                        <span class="visually-hidden">(current)</span>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Gerer article</a>
                    </li>
                 </ul>
            </div>
         </nav>
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
            @if (Route::has('login'))
                <div class="hidden  left-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary">Deconnexion</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">Connexion</a>

                    @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Inscription</a>
                        @endif
                    @endauth
                </div>
            @endif
                  <section class="articles">
                        <articles>
                            <center><h2><i><u>Article 1</u></i></h2></center>
                            <div class="metadata">Poster le {{date('d/m/Y')}} à {{date('h:i A')}}.
                            </div>
                            <div class="content">
                                <div class="images"><img src="https://cdn.fashiola.fr/L729434959/balenciaga-baskets-en-cuir-triple-s.jpg" alt=""></div>
                                <div class="voting">
                                    <button id="likebtn">
                                        <i class="fa fa-thumbs-up"></i>
                                    </button>
                                    <input type="number" id="input1" value="0" name="">

                                    <button id="dislikebtn">
                                        <i class="fa fa-thumbs-down"></i>
                                    </button>
                                    <input type="number" id="input2" value="0" name="">
                                </div>
                                <script type="text/javascript">
                                    let likebtn = document.querySelector('#likebtn');
                                    let dislikebtn = document.querySelector('#dislikebtn');
                                    let input1 = document.querySelector('#input1');
                                    let input2 = document.querySelector('#input2');
                                    likebtn.addEventListener('click',()=>{
                                        input1.value = parseInt(input1.value) + 1
                                        input1.style.color = "#12ff00";
                                    })
                                    dislikebtn.addEventListener('click',()=>{
                                        input2.value = parseInt(input2.value) + 1
                                        input2.style.color = "#ff0000";
                                    })
                                </script>
                                <center>
                                    <form method="POST">
                                    <textarea name="commentaire" placeholder="Votre commentaire..."></textarea>
                                    <input type="submit" value="Commenter" name="Commentaire">
                                </form><br>
                                </center>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tenetur eius voluptatibus, 
                                    distinctio repellendus ut voluptas quidem debitis ab? Inventore nobis 
                                    maiores vel alias, facere totam at fugit vitae soluta?
                                </p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati tempore architecto sit ratione 
                                    laboriosam praesentium corporis error quaerat nam corrupti atque unde labore, 
                                    consequatur ducimus consectetur rerum quo eos perferendis?
                                </p>
                               
                            </div>
                        </articles>
                            <center><h2><i><u>Article 2</u></i></h2></center>
                            <div class="metadata">Poster le {{date('d/m/Y')}} à {{date('h:i A')}}.
                            </div>
                            <div class="content">
                                <div class="images"><img src="http://cdn.shopify.com/s/files/1/0521/3454/3539/products/Sneaker6ix-Shop-Sneakers-Senegal-Air-Jordan-4-Retro-Fire-Red-2020-1_2000x_1_1200x1200.png?v=1638041015" alt=""></div>
                                <div class="voting">
                                    <button id="likebtn">
                                        <i class="fa fa-thumbs-up"></i>
                                    </button>
                                    <input type="number" id="input1" value="0" name="">

                                    <button id="dislikebtn">
                                        <i class="fa fa-thumbs-down"></i>
                                    </button>
                                    <input type="number" id="input2" value="0" name="">
                                </div>
                                <script type="text/javascript">
                                    let likebtn = document.querySelector('#likebtn');
                                    let dislikebtn = document.querySelector('#dislikebtn');
                                    let input1 = document.querySelector('#input1');
                                    let input2 = document.querySelector('#input2');
                                    likebtn.addEventListener('click',()=>{
                                        input1.value = parseInt(input1.value) + 1
                                        input1.style.color = "#12ff00";
                                    })
                                    dislikebtn.addEventListener('click',()=>{
                                        input2.value = parseInt(input2.value) + 1
                                        input2.style.color = "#ff0000";
                                    })
                                </script>
                                <center>
                                    <form method="POST">
                                    <textarea name="commentaire" placeholder="Votre commentaire..."></textarea>
                                    <input type="submit" value="Commenter" name="Commentaire">
                                </form><br>
                                </center>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tenetur eius voluptatibus, 
                                    distinctio repellendus ut voluptas quidem debitis ab? Inventore nobis 
                                    maiores vel alias, facere totam at fugit vitae soluta?
                                </p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati tempore architecto sit ratione 
                                    laboriosam praesentium corporis error quaerat nam corrupti atque unde labore, 
                                    consequatur ducimus consectetur rerum quo eos perferendis?
                                </p>
                               
                            </div>
                        </articles>
                        <articles>
                            <center><h2><i><u>Article 3</u></i></h2></center>
                            <div class="metadata">Poster le {{date('d/m/Y')}} à {{date('h:i A')}}.
                            </div>
                            <div class="content">
                                <div class="images"><img src="https://cdn.shopify.com/s/files/1/0496/4325/8009/products/baskets-air-jordan-1-mid-diamond-shorts-air-jordan-kikikickz-663663_1024x1024.jpg?v=1644151019" alt=""></div>
                                <div class="voting">
                                    <button id="likebtn">
                                        <i class="fa fa-thumbs-up"></i>
                                    </button>
                                    <input type="number" id="input1" value="0" name="">

                                    <button id="dislikebtn">
                                        <i class="fa fa-thumbs-down"></i>
                                    </button>
                                    <input type="number" id="input2" value="0" name="">
                                </div>
                                <script type="text/javascript">
                                    let likebtn = document.querySelector('#likebtn');
                                    let dislikebtn = document.querySelector('#dislikebtn');
                                    let input1 = document.querySelector('#input1');
                                    let input2 = document.querySelector('#input2');
                                    likebtn.addEventListener('click',()=>{
                                        input1.value = parseInt(input1.value) + 1
                                        input1.style.color = "#12ff00";
                                    })
                                    dislikebtn.addEventListener('click',()=>{
                                        input2.value = parseInt(input2.value) + 1
                                        input2.style.color = "#ff0000";
                                    })
                                </script>
                                <center>
                                    <form method="POST">
                                    <textarea name="commentaire" placeholder="Votre commentaire..."></textarea>
                                    <input type="submit" value="Commenter" name="Commentaire">
                                </form><br>
                                </center>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tenetur eius voluptatibus, 
                                    distinctio repellendus ut voluptas quidem debitis ab? Inventore nobis 
                                    maiores vel alias, facere totam at fugit vitae soluta?
                                </p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati tempore architecto sit ratione 
                                    laboriosam praesentium corporis error quaerat nam corrupti atque unde labore, 
                                    consequatur ducimus consectetur rerum quo eos perferendis?
                                </p>
                               
                            </div>
                        </articles>
                        <articles>
                            <center><h2><i><u>Article 4</u></i></h2></center>
                            <div class="metadata">Poster le {{date('d/m/Y')}} à {{date('h:i A')}}.
                            </div>
                            <div class="content">
                                <div class="images"><img src="https://cdn.shopify.com/s/files/1/2358/2817/products/air-jordan-1-low-sb-unc-488561_1200x.png?v=1638812681" alt=""></div>
                                <div class="voting">
                                    <button id="likebtn">
                                        <i class="fa fa-thumbs-up"></i>
                                    </button>
                                    <input type="number" id="input1" value="0" name="">

                                    <button id="dislikebtn">
                                        <i class="fa fa-thumbs-down"></i>
                                    </button>
                                    <input type="number" id="input2" value="0" name="">
                                </div>
                                <script type="text/javascript">
                                    let likebtn = document.querySelector('#likebtn');
                                    let dislikebtn = document.querySelector('#dislikebtn');
                                    let input1 = document.querySelector('#input1');
                                    let input2 = document.querySelector('#input2');
                                    likebtn.addEventListener('click',()=>{
                                        input1.value = parseInt(input1.value) + 1
                                        input1.style.color = "#12ff00";
                                    })
                                    dislikebtn.addEventListener('click',()=>{
                                        input2.value = parseInt(input2.value) + 1
                                        input2.style.color = "#ff0000";
                                    })
                                </script>
                                <center>
                                    <form method="POST">
                                    <textarea name="commentaire" placeholder="Votre commentaire..."></textarea>
                                    <input type="submit" value="Commenter" name="Commentaire">
                                </form><br>
                                </center>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tenetur eius voluptatibus, 
                                    distinctio repellendus ut voluptas quidem debitis ab? Inventore nobis 
                                    maiores vel alias, facere totam at fugit vitae soluta?
                                </p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati tempore architecto sit ratione 
                                    laboriosam praesentium corporis error quaerat nam corrupti atque unde labore, 
                                    consequatur ducimus consectetur rerum quo eos perferendis?
                                </p>
                               
                            </div>
                        </articles>
                        <articles>
                            <center><h2><i><u>Article 5</u></i></h2></center>
                            <div class="metadata">Poster le {{date('d/m/Y')}} à {{date('h:i A')}}.
                            </div>
                            <div class="content">
                                <div class="images"><img src="https://cdn.shopify.com/s/files/1/0496/4325/8009/products/baskets-air-force-1-low-07-fm-cut-out-swoosh-white-black-nike-kikikickz-480959.jpg?v=1642868872" alt=""></div>
                                <div class="voting">
                                    <button id="likebtn">
                                        <i class="fa fa-thumbs-up"></i>
                                    </button>
                                    <input type="number" id="input1" value="0" name="">

                                    <button id="dislikebtn">
                                        <i class="fa fa-thumbs-down"></i>
                                    </button>
                                    <input type="number" id="input2" value="0" name="">
                                </div>
                                <script type="text/javascript">
                                    let likebtn = document.querySelector('#likebtn');
                                    let dislikebtn = document.querySelector('#dislikebtn');
                                    let input1 = document.querySelector('#input1');
                                    let input2 = document.querySelector('#input2');
                                    likebtn.addEventListener('click',()=>{
                                        input1.value = parseInt(input1.value) + 1
                                        input1.style.color = "#12ff00";
                                    })
                                    dislikebtn.addEventListener('click',()=>{
                                        input2.value = parseInt(input2.value) + 1
                                        input2.style.color = "#ff0000";
                                    })
                                </script>
                                <center>
                                    <form method="POST">
                                    <textarea name="commentaire" placeholder="Votre commentaire..."></textarea>
                                    <input type="submit" value="Commenter" name="Commentaire">
                                </form><br>
                                </center>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem tenetur eius voluptatibus, 
                                    distinctio repellendus ut voluptas quidem debitis ab? Inventore nobis 
                                    maiores vel alias, facere totam at fugit vitae soluta?
                                </p>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati tempore architecto sit ratione 
                                    laboriosam praesentium corporis error quaerat nam corrupti atque unde labore, 
                                    consequatur ducimus consectetur rerum quo eos perferendis?
                                </p>
                               
                            </div>
                        </articles>
                  </section>    
</body>
