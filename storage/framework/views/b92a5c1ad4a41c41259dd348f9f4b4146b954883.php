<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->

    <!-- Webpage Title -->
    <title>Jamy's uitlaatservice</title>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <!-- Cropper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/datepicker-nl.js')); ?>"></script>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

    <script src="<?php echo e(asset('js/confirmdelete.js')); ?>"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fontawesome-all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/aos.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/swiper.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('extra/Dogeplanner.png')); ?>">

    <!-- Link to CSS files -->
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
    <div class="container">

        <!-- Image Logo -->
        <a class="logo-image" href="/"><img src="<?php echo e(asset('extra/Dogeplanner.png')); ?>" alt="alternative"></a>

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="logo-text" href="/">Jamy's uitlaatservice</a>

        <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault" >
            <ul class="navbar-nav ms-auto navbar-nav-scroll">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('home')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('aboutme')); ?>">Over mij</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('benefits')); ?>">Voordelen uitlaatservice</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/diensten">Diensten</a>
                </li>
                <li class="nav-item">
                    <?php if(Auth::check() &&   Auth::User()->isAdmin == '1'): ?>
                        <a class="nav-link" href="../admin">Admin modus</a>
                    <?php endif; ?>
                </li>
                <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register-user')); ?>">Registreren</a>
                        </li>
                    <?php else: ?>
                        
                        <style>
                            @media (min-width: 768px) {
                                .animate {
                                    animation-duration: 0.3s;
                                    -webkit-animation-duration: 0.3s;
                                    animation-fill-mode: both;
                                    -webkit-animation-fill-mode: both;
                                }
                            }

                            @keyframes  slideIn {
                                0% {
                                    transform: translateY(1rem);
                                    opacity: 0;
                                }

                                100% {
                                    transform: translateY(0rem);
                                    opacity: 1;
                                }

                                0% {
                                    transform: translateY(1rem);
                                    opacity: 0;
                                }
                            }

                            @-webkit-keyframes slideIn {
                                0% {
                                    -webkit-transform: transform;
                                    -webkit-opacity: 0;
                                }

                                100% {
                                    -webkit-transform: translateY(0);
                                    -webkit-opacity: 1;
                                }

                                0% {
                                    -webkit-transform: translateY(1rem);
                                    -webkit-opacity: 0;
                                }
                            }

                            .slideIn {
                                -webkit-animation-name: slideIn;
                                animation-name: slideIn;
                            }
                        </style>
                    
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo e(auth()->user()->name); ?>

                                </a>
                                <div class="userDropdown dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="navbarDropdown">
                                    <a href="<?php echo e(route('profile.index')); ?>" class="dropdown-item">Profiel</a>
                                    <a href="<?php echo e(route('walk.index')); ?>" class="dropdown-item">Wandelingen</a>
                                    <a href="<?php echo e(route('signout')); ?>" class="dropdown-item">Log uit</a>
                                </div>
                            </li>
                <?php endif; ?>
            </ul>
            <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="https://www.facebook.com/pages/category/Local-Service/Jamys-Honden-Uitlaatservice-107712781052058/">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
            </span>
        </div> <!-- end of navbar-collapse -->
    </div> <!-- end of container -->
</nav> <!-- end of navbar -->
<!-- end of navbar -->

<?php echo $__env->yieldContent('content'); ?>

<!-- Location -->
<section class="location text-light py-5">
    <div class="container" data-aos="zoom-in">
        <div class="row justify-content-center">
            <div class="col-lg-3 d-flex align-items-center">
                <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                <div class="ms-2">
                    <p>Griend 8225 8225 SJ Lelystad</p>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-center" >
                <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                <div class="ms-2">
                    <p>06-83948600</p>
                </div>
            </div>
            <div class="col-lg-3 d-flex align-items-center" >
                <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                <div class="ms-2">
                    <p>infodemofile@example.com</p>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section> <!-- end of location -->


<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Hond afbeelding bijsnijden</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-8">
                            <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                        </div>
                        <div class="col-md-4">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cropButton" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary cropButton" id="crop">Crop</button>
            </div>
        </div>
    </div>
</div>
</div>
</div>


<!-- Footer -->
<section class="footer text-light">
    <div class="container">
        <div class="row" data-aos="fade-right">
            <div class="col-lg-3 py-4 py-md-5">
                <div class="d-flex align-items-center">
                    <h4 class="">Jamy's uitlaatservice</h4>
                </div>
                <p class="py-3 para-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus animi repudiandae explicabo esse maxime, impedit rem voluptatibus amet error quas.</p>
                <div class="d-flex">
                    <div class="me-3">
                        <a href="https://www.facebook.com/pages/category/Local-Service/Jamys-Honden-Uitlaatservice-107712781052058/">
                            <i class="fab fa-facebook-f fa-2x py-2"></i>
                        </a>
                    </div>
                </div>
            </div> <!-- end of col -->

            <div class="col-lg-3 py-4 py-md-5">
                <div>
                    <h4 class="py-2">Links</h4>
                    <div class="d-flex align-items-center py-2">
                        <i class="fas fa-caret-right"></i>
                        <a href="<?php echo e(route('aboutme')); ?>"><p class="ms-3">Over mij</p></a>
                    </div>
                    <div class="d-flex align-items-center py-2">
                        <i class="fas fa-caret-right"></i>
                        <a href="<?php echo e(route('benefits')); ?>"><p class="ms-3">Voordelen uitlaatservice</p></a>
                    </div>
                    <div class="d-flex align-items-center py-2">
                        <i class="fas fa-caret-right"></i>
                        <a href="/diensten"><p class="ms-3">Diensten</p></a>
                    </div>
                </div>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section> <!-- end of footer -->

<!-- Back To Top Button -->
<button onclick="topFunction()" id="myBtn">
    <img src="<?php echo e(asset('assets/images/up-arrow.png')); ?>" alt="alternative">
</button>
<!-- end of back to top button -->


<!-- Scripts -->
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script><!-- Bootstrap framework -->
<script src="<?php echo e(asset('js/purecounter.min.js')); ?>"></script> <!-- Purecounter counter for statistics numbers -->
<script src="<?php echo e(asset('js/swiper.min.js')); ?>"></script><!-- Swiper for image and text sliders -->
<script src="<?php echo e(asset('js/aos.js')); ?>"></script><!-- AOS on Animation Scroll -->
<script src="<?php echo e(asset('js/script.js')); ?>"></script>  <!-- Custom scripts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

<script>
    /* Date format */

    /* Datepicker function */
    $( function() {
        var dateToday = new Date();

        $.datepicker.setDefaults($.datepicker.regional['nl']);
        $( "#datepicker" ).datepicker({
            minDate: dateToday,
        });
        $('#datepicker').datepicker('option', 'dateFormat', 'dd-mm-yy');
    });

    /* End date format */
</script>

<script>
    var $modal = $('#modal');
    var image = document.getElementById('image');
    var cropper;
    $("body").on("change", ".image", function(e){
        var files = e.target.files;
        var done = function (url) {
            image.src = url;
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
            file = files[0];
            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });
    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });
    $("#crop").click(function(){
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });
        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                $('#imgbase64').val(base64data);
                $modal.modal('hide');
            }
        });
    })
</script>
</body>

<?php /**PATH M:\Phpstorm Code\b1-dogeplanner\resources\views/layout/user.blade.php ENDPATH**/ ?>