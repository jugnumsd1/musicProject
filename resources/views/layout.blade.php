<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <script src="{{ asset('asset/java/js.js') }}"></script>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div id="sidebar" class="col-sm-2 sidebar">
                <div class="logo">
                    <img src="{{asset('asset/images/R.jpg')}}" alt="">
                </div>
                <hr class="bg-dark">
                <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-home"></i> Home
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/admin_home') }}"><i class="fa fa-circle small-icon"></i> Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin_release') }}"><i class="fa fa-circle small-icon"></i> Release</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin_album') }}"><i class="fa fa-circle small-icon"></i> Album</a></li>
                   
                    </ul>
                </div>
                
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Admin
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('/admin_panel')}}"><i class="fa fa-circle small-icon"></i> Admin</a></li>
                        <li><a class="dropdown-item" href="{{url('/admin_category')}}"><i class="fa fa-circle small-icon"></i> Category</a></li>
                        <li><a class="dropdown-item" href="{{url('/admin_writers')}}"><i class="fa fa-circle small-icon"></i> Writer</a></li>
                        <li><a class="dropdown-item" href="{{url('/admin_singer')}}"><i class="fa fa-circle small-icon"></i> Singer</a></li>
                        <li><a class="dropdown-item" href="{{url('/admin_music')}}"><i class="fa fa-circle small-icon"></i> Music</a></li>
                        <li><a class="dropdown-item" href="{{url('/admin_newuser')}}"><i class="fa fa-circle small-icon"></i> NewUser</a></li>
                        
                    </ul>
                </div>
                <div class="dropdown">
                    <button class="btn btn-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> Artist
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{url('/artist')}}"><i class="fa fa-circle small-icon"></i> Add Artist</a></li>
                        
                        
                    </ul>
                </div>
            </div> 

            <!-- Main Content -->
            <div class="col-md-10 ms-sm-auto px-md-4 main-content">
                <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <div class="container-fluid">
                        <ul class="navbar-nav" style="display: flex; gap: 15px;">
                            <li><a class="text-dark" href="{{url('/admin_home')}}">Home</a></li>
                            <li><a class="text-dark" href="{{url('/admin_release')}}">Release</a></li>
                            <li><a class="text-dark" href="{{url('/admin_album')}}">Album</a></li>
                        </ul>
                        <div class="search-container">
                            <i class="fa fa-search icon-s"></i>  <input type="text" class="search-input" placeholder="Search here...">
                            <button class="search-button text-dark"><div class="clt">Clt +k</div></button>
                        </div>
                        <div class="icon ms-4">
                            <i class="fas fa-cog"></i>
                            <i class="fa fa-bell"></i>
                        </div>
                        <!-- Profile Dropdown -->
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ asset('asset/images/R.jpg') }}" alt="Avatar" class="rounded-circle" width="30" height="30">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Privacy Settings</a></li>
                                    <hr class="bg-dark">
                                    <li>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            @method('POST')
            <button type="submit" class="dropdown-item" style="background: none; border: none; width: 100%; text-align: left;">
                Logout
            </button>
        </form>
    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <hr>
                <!-- Content Area -->
                <div class="container mt-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
 {{-- <div class="first-footer">
    <div class="card border-top mb-0">
        <diiv class="card-body">
            <div class="d-flex align-items-center justify-content-between flex-md-row flex-column gap-3">
                <div class="">
                    <ul class="list-unstyled p-0 m-0 mb-3 text-capitalize d-flex gap-3 flex-md-nowrap flex-wrap">
                        <li>about</li>
                        <li>|</li>
                        <li>terms of use</li>
                        <li>|</li>
                        <li>privacy policy</li>
                        <li>|</li>
                        <li>support</li>
                        <li>|</li>
                        <li>feedback</li>
                        <li>|</li>
                    </ul>
                    <small class="copy">Copyright <span id="copyright">2024</span>. Made with love by Iqonic Design.</small>
                </div>
                <div>
                    <ul class="list-unstyled m-0 p-0 d-flex align-items-center gap-3">
                        <li>
                            <i class="fab fa-facebook"></i>
                        </li>
                        <li>
                            <i class="fab fa-instagram"></i>
                        </li>
                        <li>
                            <i class="fab fa-linkedin"></i>
                        </li>
                        <li>
                            <i class="fab fa-twitter"></i>
                        </li>
                    </ul>
                </div>
            </div>
        </diiv>
    </div></div> --}}

</div> 
{{-- 
    footer is started know --}}
 <div class="footer">
   
@section('footer')
<footer class="footer">
    <div class="footer-top">
        <div class="row">
            <div class="col-12">
                <input type="range" min="1" max="100" value="0" class="seek_slider" onchange="seekTo()">
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid px-4">
            <div class="row align-items-center">
                <div class="col-xl-4 col-md-4 col-sm-6">
                    <div class="details">
                        <div class="footer-track-detail d-flex align-items-center gap-3 flex-wrap justify-content-sm-start justify-content-center">
                            <div class="track-art" style="background-image: url(&quot;{{asset('asset/images/01.png')}}&quot;);"></div>
                            <div>
                                <h6 class="track-name text-white font-size-14 mb-1">Pop Smoke</h6>
                                <p class="track-artist text-white small m-0">Cascada</p>
                            </div>
                            <div class="like text-white flex-shrink-0 ms-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <g>
                                        <path d="M9 15.1875C9 15.1875 1.6875 11.25 1.6875 6.60938C1.6875 5.60238 2.08753 4.63663 2.79958 3.92458C3.51163 3.21253 4.47738 2.8125 5.48438 2.8125C7.07273 2.8125 8.43328 3.67805 9 5.0625C9.56672 3.67805 10.9273 2.8125 12.5156 2.8125C13.5226 2.8125 14.4884 3.21253 15.2004 3.92458C15.9125 4.63663 16.3125 5.60238 16.3125 6.60938C16.3125 11.25 9 15.1875 9 15.1875Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                    <defs>
                                        <clipPath>
                                            <rect width="18" height="18" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-3 col-sm-6 mt-sm-0 mt-3">
                    <div class="d-flex align-items-center justify-content-md-center justify-content-sm-end justify-content-center gap-3">
                        <div class="track-suffle text-white">
                            <i class="fas fa-random track-shuffle"></i>
                                <defs>
                                    <clipPath>
                                        <rect width="18" height="18" fill="white"></rect>
                                    </clipPath>
                                </defs>
                          
                        </div>
                        <div class="prev-track text-white" onclick="prevTrack()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g>
                                    <path d="M13 2.9925V13.0075C12.9981 13.1848 12.9492 13.3584 12.8581 13.5105C12.767 13.6627 12.6372 13.7879 12.4818 13.8733C12.3264 13.9587 12.1511 14.0013 11.9739 13.9966C11.7966 13.992 11.6238 13.9403 11.4731 13.8469L4 9.17313V13.5C4 13.6326 3.94732 13.7598 3.85355 13.8536C3.75979 13.9473 3.63261 14 3.5 14C3.36739 14 3.24021 13.9473 3.14645 13.8536C3.05268 13.7598 3 13.6326 3 13.5V2.5C3 2.36739 3.05268 2.24021 3.14645 2.14645C3.24021 2.05268 3.36739 2 3.5 2C3.63261 2 3.75979 2.05268 3.85355 2.14645C3.94732 2.24021 4 2.36739 4 2.5V6.82688L11.4731 2.15313C11.6236 2.05865 11.7966 2.00612 11.9743 2.00097C12.1519 1.99582 12.3277 2.03825 12.4834 2.12385C12.6391 2.20946 12.7691 2.33513 12.8599 2.48785C12.9508 2.64058 12.9991 2.81481 13 2.9925Z" fill="currentColor"></path>
                                </g>
                                <defs>
                                    <clipPath>
                                        <rect width="16" height="16" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                       <!-- Play/Pause and Audio Controls -->
<!-- Play/Pause Button -->
<div class="playpause-track" onclick="playpauseTrack()">
    <span class="d-inline-block rounded-circle p-2 bg-primary text-white">
        <svg fill="none" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M16.6308 13.131C16.5743 13.189 16.3609 13.437 16.1622 13.641C14.9971 14.924 11.9576 17.024 10.3668 17.665C10.1252 17.768 9.51437 17.986 9.18802 18C8.8753 18 8.5772 17.928 8.29274 17.782C7.93814 17.578 7.65368 17.257 7.49781 16.878C7.39747 16.615 7.2416 15.828 7.2416 15.814C7.08573 14.953 7 13.554 7 12.008C7 10.535 7.08573 9.193 7.21335 8.319C7.22796 8.305 7.38383 7.327 7.55431 6.992C7.86702 6.38 8.47784 6 9.13151 6H9.18802C9.61374 6.015 10.509 6.395 10.509 6.409C12.0141 7.051 14.9834 9.048 16.1768 10.375C16.1768 10.375 16.5129 10.716 16.659 10.929C16.887 11.235 17 11.614 17 11.993C17 12.416 16.8724 12.81 16.6308 13.131Z" fill="currentColor"></path>
        </svg>
    </span>
</div>

<!-- Audio element with the correct path -->
<audio id="audioPlayer" preload="auto">
    <source src="{{ asset('audio/audio1.mp3') }}" type="audio/mp3">
    Your browser does not support the audio element.
</audio>

<!-- Next Track Button -->
<div class="next-track text-white" onclick="nextTrack()">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
        <g>
            <path d="M13 2.5V13.5C13 13.6326 12.9473 13.7598 12.8536 13.8536C12.7598 13.9473 12.6326 14 12.5 14C12.3674 14 12.2402 13.9473 12.1464 13.8536C12.0527 13.7598 12 13.6326 12 13.5V9.17313L4.52688 13.8469C4.37638 13.9414 4.20336 13.9939 4.02574 13.999C3.84811 14.0042 3.67235 13.9618 3.51663 13.8761C3.36091 13.7905 3.23091 13.6649 3.14007 13.5121C3.04924 13.3594 3.00088 13.1852 3 13.0075V2.9925C3.00088 2.81481 3.04924 2.64058 3.14007 2.48785C3.23091 2.33513 3.36091 2.20946 3.51663 2.12385C3.67235 2.03825 3.84811 1.99582 4.02574 2.00097C4.20336 2.00612 4.37638 2.05865 4.52688 2.15313L12 6.82688V2.5C12 2.36739 12.0527 2.24021 12.1464 2.14645C12.2402 2.05268 12.3674 2 12.5 2C12.6326 2 12.7598 2.05268 12.8536 2.14645C12.9473 2.24021 13 2.36739 13 2.5Z" fill="currentColor"></path>
        </g>
        <defs>
            <clipPath>
                <rect width="16" height="16" fill="white"></rect>
            </clipPath>
        </defs>
    </svg>
</div>


                        <div class="track-replay text-white">
                                <i class="fas fa-repeat"></i>
                                <defs>
                                    <clipPath>
                                        <rect width="16" height="16" fill="white"></rect>
                                    </clipPath>
                                </defs>
                         
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5 mt-md-0 mt-3">
                    <div class="row align-items-center gx-xl-5 justify-content-md-end justify-content-center sound">
                        <div class="col-lg-2 d-lg-block d-none"></div>
                        <div class="col-lg-4 col-md-5 col-sm-4 col-4">
                            <div class="track-volumne d-flex align-items-center justify-content-md-end justify-content-sm-start justify-content-center">
                                <div class="flex-shrink-0 text-white">
                                    <i class="fas fa-volume-up"></i>
                                </div>                           
                                <input type="range" min="1" max="100" value="99" class="volume_slider" onchange="setVolume()">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-4 col-5">
                            <div class="track-time text-center">
                                <span class="current-time text-white small">00:00</span>
                                <span class="mx-1 text-white">
                                </span>
                                <span class="total-duration text-white small time-sound">00:27</span>
                                <i class="fas fa-expand text-white screen-scroll"></i>
                                <i class="fas fa-bars  text-white screen-scroll1"></i> 
                            </div>
                            
                            <div>
                               
                            </div>
                        </div>

                      

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 

 </div>









    <link rel="stylesheet" href="{{asset('asset/java/js')}}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
