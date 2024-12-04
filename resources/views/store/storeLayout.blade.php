<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Nexus Gear</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}" />

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/style2.css')}}" />
    
    <!-- JQuery and Validator Plugins -->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    {{-- custom css --}}
    <style>
        @media only screen and (max-width: 767px){
            #head_links {
                visibility: hidden;
            }
            .custom_search_top {
                text-align:center;
            }

            .header-ctn {
                width: 100%;
            }
        }
        </style>

</head>

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul class="header-links pull-right">
                    @if(session()->has('user'))
                      <li><a style="color:white" href="{{route('user.history')}}">{{session()->get('user')->full_name}} </a></li>  
                      <li><a href="{{route('user.logout')}}">Logout</a></li>
                    @else
                    <li><a href="{{route('user.login')}}">Login</a></li>
                    
                    <li><a href="{{route('user.signup')}}">SignUp</a></li>
                    @endif
                    
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="{{route('user.home')}}" class="logo">
                                <p>Nexus Gear</p>
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <!-- Traditional Search Form -->
                            <form action="{{route('user.search')}}" method="get">
                                <div class="custom_search_top">
                                    <input class="input" name="n" style="border-radius: 40px 0 0 40px;" placeholder="Search here">
                                    <button class="search-btn" style="border-radius: 0;">Search</button>
                                    <button type="button" class="search-btn" style="border-radius: 0 40px 40px 0;" data-toggle="modal" data-target="#aiSearchModal">
                                        <i class="fa fa-camera"></i>
                                    </button>
                                </div>
                            </form>

                            <!-- AI Search Modal -->
                            <div class="modal fade" id="aiSearchModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Search by Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- File Input -->
                                            <input 
                                                type="file" 
                                                class="form-control-file" 
                                                id="imageFile" 
                                                accept="image/*" 
                                                onchange="previewImage(event)">

                                            <!-- Image Preview Box with Scroll -->
                                            <div id="imagePreview" 
                                                style="margin-top: 10px; width: 100%; height: 300px; overflow-y: auto; border: 1px solid #ccc; border-radius: 5px; text-align: center;">
                                                <img 
                                                    id="previewImg" 
                                                    src="#" 
                                                    alt="Preview" 
                                                    style="max-width: 100%; display: none;">
                                            </div>

                                            <!-- Result Section -->
                                            <div id="result" class="mt-3"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" id="submitButton">Search</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /SEARCH BAR -->
                    <script>
                        function previewImage(event) {
                            const previewImg = document.getElementById('previewImg');
                            const file = event.target.files[0];
                    
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    previewImg.src = e.target.result;
                                    previewImg.style.display = "block"; // Show the preview image
                                };
                                reader.readAsDataURL(file);
                            } else {
                                previewImg.style.display = "none"; // Hide the preview image if no file is selected
                            }
                        }
                    </script>

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->
                             
                            <div class="dropdown">
                                <a class="dropdown-toggle " id="custom_shopping_cart" href="{{route('user.cart')}}">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Your Cart</span>
                                </a>

                            </div>
                            <!-- /Cart -->
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li class="{{Route::is('user.home') ? 'active' : ''}}"><a href="{{route('user.home')}}">Home</a></li>
                    @if(Route::is('user.search'))
                        @foreach($cat as $c)
                        <li class="{{$c->id == $a ? 'active' : ''}}"><a href="{{route('user.search.cat',['id'=>$c->id])}}" >{{$c->name}}</a></li>
                        @endforeach
                    @else
                    @foreach($categories as $category)
                        <li ><a href="{{ route('user.search.cat', $category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                    @endif
                    
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            @if(Route::is('user.home'))
            <div class="row">
                <!-- shop -->
                @php
                $counter=0;
                @endphp
                @foreach($cat as $c)
                 @php
                $counter++;
                if($counter==4)
                break;
               
                @endphp
                <!-- /shop -->
                @endforeach
            </div>
            @endif
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- SECTION -->


    @yield('content')

    <!-- /SECTION -->
    
    <!-- FOOTER -->
    <footer id="footer" >
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row" >
                    <div class="col-md-3 col-xs-6" >
                        <div class="footer" >
                            <h3 class="footer-title">About Us</h3>
                            <p>We Are The Best Accessories Reseller</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>Jl. Hartono</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+62 135 3124 3451 </a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>ivanwibu@yahoo.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categories</h3>
                            <ul class="footer-links">
                                <li><a href="#">Headset</a></li>
                                <li><a href="#">Mouse</a></li>
                                <li><a href="#">Keyaboard</a></li>
                                <li><a href="#">Monitors</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Tools</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->
    </footer>
    <!-- /FOOTER -->


    <!-- jQuery Plugins -->
    <!-- Add this in the head section or before closing body tag -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{asset('js/ai-search.js') }}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/nouislider.min.js')}}"></script>
    <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/lib/jquery.js')}}"></script>
    <script src="{{asset('js/dist/jquery.validate.js')}}"></script>
    
    

</body>

</html>
