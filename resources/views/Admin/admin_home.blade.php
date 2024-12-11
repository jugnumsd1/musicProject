@extends('layout')

@section('title')
Admin_Panel 

@endsection


@section('content')

<div class="content-inner pb-0 container-fluid" id="page_layout">
    <div class="row mb-5">
        <div class="col-lg-12">
            <div class="card-header">
                <div class="header-title">
                    <h4 class="card-title text-capitalize mb-3">playlist by artist</h4>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-3">
            <div class="bg-soft-danger position-relative  rounded-3 card-box mb-3 ">
                <img src="{{asset('asset/images/01.png')}}" id="01" class="img-fluid mx-auto d-block" alt="play-img">
                <div class="d-flex align-items-center play-list-icon">
                    <i class="fas fa-play"></i> <span class="ms-2 fw-semibold text-capitalize">12 tracks</span>
                </div>
            </div>
            <a href="{{url('/admin_detail')}}" class="text-capitalize h5 route">Eliana d’cruz playlist</a>
            <small class="fw-normal line-count-1 text-capitalize">top 12 songs from Eliana and all
                    type of songs.</small>    
                </div>    
                
               
        <div class="col-xl-3 col-md-6 mb-3">
            <div class="bg-soft-warning position-relative  rounded-3 card-box mb-3 ">
                <img src="{{asset('asset/images/02.png')}}" id="02" class="img-fluid mx-auto d-block" alt="play-img">
                <div class="d-flex align-items-center play-list-icon">
                    <i class="fas fa-play"></i><span class="ms-2 fw-semibold text-capitalize">18 tracks</span>
                </div>
            </div>
            <a href="{{url('/admin_detail')}}" class="text-capitalize h5 route">omen smith playlist</a>
            <small class="fw-normal line-count-1 text-capitalize">top 18 songs from omen and mainly
                    party song.</small>    </div>



        <div class="col-xl-3 col-md-6 mb-3">
            <div class="bg-light position-relative  rounded-3 card-box mb-3 ">
                <img src="{{asset('asset/images/03.png')}}" id="03" class="img-fluid mx-auto d-block" alt="play-img">
                <div class="d-flex align-items-center play-list-icon">
                    <i class="fas fa-play"></i> <span class="ms-2 fw-semibold text-capitalize">16 tracks</span>
                </div>
            </div>
            <a href="{{url('/admin_detail')}}" class="text-capitalize h5 route">Alexa Jonas</a>
            <small class="fw-normal line-count-1 text-capitalize">top 16 songs from Alexa and most of the relax
                    songs.</small>    </div>




        <div class="col-xl-3 col-md-6 mb-3">
            <div class="bg-soft-success position-relative  rounded-3 card-box mb-3 ">
                <img src="{{asset('asset/images/04.png')}}" id="04" class="img-fluid mx-auto d-block" alt="play-img">
                <div class="d-flex align-items-center play-list-icon">
                    <i class="fas fa-play"></i><span class="ms-2 fw-semibold text-capitalize">22 tracks</span>
                </div>
            </div>
            <a href="{{url('/admin_detail')}}" class="text-capitalize h5">vibrato eruct</a>
            <small class="fw-normal line-count-1 text-capitalize">top 22 songs from vibrato and all type of
                    songs.</small>    
                </div>            
                
                
    </div>


    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card-header mb-3">
                <div class="header-title d-flex align-items-center justify-content-between">
                    <h4 class="card-title text-capitalize">trending songs</h4>
                    <a href="../dashboard/release.html" class="small text-body">View All</a>
                </div>
            </div>
        </div>


        <ul class="row row-cols-lg-6 row-cols-md-4  row-cols-2 list-unstyled mb-0">

            <li class="col">
                <div class="card">
                    <div class="card-body">
                       <img src="{{asset('asset/images/05.png')}}" id="05" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="{{url('/admin_detail')}}" class=" text-capitalize line-count-1 h5 d-block">the girl</a>
                            <small class="fw-normal text-capitalize line-count-1">by snoods smith Jonas </small>
                    </div>
                </div>
            </li>


            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="{{asset('asset/images/06.png')}}" id="06" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="{{url('/admin_detail')}}" class=" text-capitalize line-count-1 h5 d-block">masinc party album</a>
                            <small class="fw-normal text-capitalize line-count-1">by kerana euc veena</small>
                    </div>
                </div>
            </li>



            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="{{asset('asset/images/07.png')}}" id="07" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="{{url('/admin_detail')}}" class=" text-capitalize line-count-1 h5 d-block">the silent one</a>
                            <small class="fw-normal text-capitalize line-count-1">by Alex Williams </small>
                    </div>
                </div>
            </li>
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="{{asset('asset/images/08.png')}}" id="08" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="{{url('/admin_detail')}}" class=" text-capitalize line-count-1 h5 d-block">just perfect</a>
                            <small class="fw-normal text-capitalize line-count-1">by karuna truss</small>
                    </div>
                </div>
            </li>
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="{{asset('asset/images/09.png')}}" id="09" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="{{url('/admin_detail')}}" class=" text-capitalize line-count-1 h5 d-block">everything i want</a>
                            <small class="fw-normal text-capitalize line-count-1">by Neha arena </small>
                    </div>
                </div>
            </li>
            <li class="col">
                <div class="card">
                    <div class="card-body">
                        
                        
                            <img src="{{asset('asset/images/10.png')}}" id="10" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="{{url('/admin_detail')}}" class=" text-capitalize line-count-1 h5 d-block">infinity</a>
                            <small class="fw-normal text-capitalize line-count-1">by
                                            nil ana meet nagak</small>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card-header  mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">recently played</h4>
                </div>
                <div class="common-album position-relative d-lg-block d-none">
                    <div class="swiper-button-prev"  id="prev">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="swiper-button-next" id="next">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="swiper overflow-hidden" data-swiper="song-slider">
                <ul class="swiper-wrapper   p-0 list-unstyled mb-0 ">
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/11.png')}}" id="11" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="{{url('/admin_detail')}}" class=" text-capitalize line-count-1 h5 d-block">way of right</a>
                                <small class="fw-normal text-capitalize line-count-1">by king sing</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/12.png')}}" id="12" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">years of hundred</a>
                                <small class="fw-normal text-capitalize line-count-1">by Helena illation</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/13.png')}}" id="13" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">you are mine</a>
                                <small class="fw-normal text-capitalize line-count-1">you are mine</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/14.png')}}" id="14" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">heart is beating</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas </small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/15.png')}}" id="15" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">my crying eyes</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas </small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/16.png')}}" id="16" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">my lovely dad</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/17.png')}}" id="17" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">the girl</a>
                                <small class="fw-normal text-capitalize line-count-1">by
                                                    snoods smith Jonas </small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/18.png')}}" id="18" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">way of right</a>
                                <small class="fw-normal text-capitalize line-count-1">by king sing</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/19.png')}}" id="19" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">years of hundred</a>
                                <small class="fw-normal text-capitalize line-count-1">by Helena illation</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/20.png')}}" id="20" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">you are mine</a>
                                <small class="fw-normal text-capitalize line-count-1">you are mine</small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/21.png')}}" id="21" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">heart is beating</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas </small>
                        </div>
                    </li>
                    <li class="swiper-slide card card-slide">
                        <div class="card-body">
                            
                            
                                <img src="{{asset('asset/images/22.png')}}" id="22" class="mb-3 img-fluid rounded-3" alt="song-img">
                                <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">my crying eyes</a>
                                <small class="fw-normal text-capitalize line-count-1">snoods smith jonas </small>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        

{{-- top genres is started know --}}

        <div class="col-lg-12 mb-5">
            <div class="card-header  mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">top genres for you</h4>
                </div>
                <div class="common-album position-relative d-lg-block d-none">
                    <div class="swiper-button-prev" id="prev1" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-d710b5b835622ecee">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="swiper-button-next" id="next1" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d710b5b835622ecee">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </div>
            </div>
            <div class="swiper overflow-hidden swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper="geners-slider">
                <ul class="swiper-wrapper   p-0 list-unstyled mb-0 " id="swiper-wrapper-427491f10c29105cbf" aria-live="polite" style="transform: translate3d(-556px, 0px, 0px); transition-duration: 0ms;"><li class="swiper-slide mb-3 swiper-slide-duplicate" role="group" aria-label="5 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="4">
                        
                        
                            <img src="{{asset('asset/images/16.png')}}" id="27" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">19’s retro song</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12 songs from travels and</small>
                    </li><li class="swiper-slide mb-3 swiper-slide-duplicate swiper-slide-prev" role="group" aria-label="6 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="5">
                        
                        
                            <img src="{{asset('asset/images/17.png')}}" id="29" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">relax</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3 swiper-slide-active" role="group" aria-label="1 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="0">
                        
                        
                            <img src="{{asset('asset/images/18.png')}}" id="23" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">sorrow</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3 swiper-slide-next" role="group" aria-label="2 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="1">
                        
                        
                            <img src="{{asset('asset/images/19.png')}}" id="24" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">relax</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3" role="group" aria-label="3 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="2">
                        
                        
                            <img src="{{asset('asset/images/20.png')}}" id="25" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">travel</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3" role="group" aria-label="4 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="3">
                        
                        
                            <img src="{{asset('asset/images/21.png')}}" id="26" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">party</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3" role="group" aria-label="5 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="4">
                        
                        
                            <img src="{{asset('asset/images/17.png')}}" id="27" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">19’s retro song</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12 songs from travels and</small>
                    </li>
                    <li class="swiper-slide mb-3 swiper-slide-duplicate-prev" role="group" aria-label="6 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="5">
                        
                        
                            <img src="{{asset('asset/images/15.png')}}" id="29" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">relax</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li>
                <li class="swiper-slide mb-3 swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="1 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="0">
                        
                        
                            <img src="{{asset('asset/images/24.png')}}" id="23" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">sorrow</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li><li class="swiper-slide mb-3 swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="2 / 6" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="1">
                        
                        
                            <img src="{{asset('asset/images/27.png')}}" id="24" class="mb-3 img-fluid rounded-3" alt="song-img">
                            <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">relax</a>
                            <small class="fw-normal text-capitalize line-count-1">top 12
                                            songs from travels and</small>
                    </li></ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </div>
    </div>


   
   {{-- Radio session is started know --}}
    <div class="row  mb-5">
        <div class="col-lg-12">
            <div class="card-header mb-3">
                <div class="header-title d-flex align-items-center justify-content-between">
                    <h4 class="card-title text-capitalize">radio station songs</h4>
                    <a href="{{url('/dashboard')}}" class="small text-body">View All <i class="fas fa-angle-up-right"></i></a>
                </div>
            </div>
        </div>
        <ul class="row row-cols-lg-5 row-cols-md-4  row-cols-2 list-unstyled mb-0">
            <li class="col mb-3">
                
                
                    <img src="{{asset('asset/images/45.png')}}" id="30" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">music hits</a>
                    <small class="fw-normal text-capitalize line-count-1">music
                            hits by rj karuna</small>
            </li>
            <li class="col mb-3">
                
                
                    <img src="{{asset('asset/images/46.png')}}" id="31" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">8917 radio hits</a>
                    <small class="fw-normal text-capitalize line-count-1">897
                            radio hits by rj Nina</small>
            </li>
            <li class="col mb-3">
                
                
                    <img src="{{asset('asset/images/47.png')}}" id="32" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">country music</a>
                    <small class="fw-normal text-capitalize line-count-1">country music by rj angel</small>
            </li>
            <li class="col mb-3">
                
                
                    <img src="{{asset('asset/images/48.png')}}" id="33" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">winter thunders</a>
                    <small class="fw-normal text-capitalize line-count-1">winter thunders by rj myoma</small>
            </li>
            <li class="col mb-3">
                
                
                    <img src="{{asset('asset/images/49.png')}}" id="34" class="mb-3 img-fluid rounded-3" alt="song-img">
                    <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">radio with rive</a>
                    <small class="fw-normal text-capitalize line-count-1">radio with rive from rj rive</small>
            </li>
        </ul>
    </div>


{{-- Radio sation is ending now  --}}


{{-- top lisening is started know --}}

    <div class="row  mb-5">
        <div class="col-lg-12">
            <div class="card-header  mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">our top listening songs</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                <ul class="p-0 list-unstyled mb-0 ">
                    <li class="pb-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/22.png')}}" id="60" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">Saturday party</a>
                                    </div>
                                    <small class="text-capitalize">john deo</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">8.6k</small>
                            </div>
                        </div>                </div></li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/23.png')}}" id="61" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">Saturday party</a>
                                    </div>
                                    <small class="text-capitalize">angle wings</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                   </svg>
                                   <i class="fa-solid fa-headphones"></i><small class="ms-2">8.2k</small>
                            </div>
                        </div>                </div></li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/24.png')}}" id="62" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">Ferrari</a>
                                    </div>
                                    <small class="text-capitalize">smith euc</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                               
                                <i class="fa-solid fa-headphones"> </i><small class="ms-2">8.0k</small>
                            </div>
                        </div>                </div></li>
                    <li class="pt-3">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/25.png')}}" id="63" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">my bike</a>
                                    </div>
                                    <small class="text-capitalize">karuna Williams</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">7.6k</small>
                            </div>
                        </div>                </div></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                <ul class="p-0 list-unstyled mb-0 ">
                    <li class="pb-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/26.png')}}" id="64" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">my way of music</a>
                                    </div>
                                    <small class="text-capitalize">winy sling</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                   
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">7.4k</small>
                            </div>
                        </div>                </div></li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/27.png')}}" id="65" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">hits of beats</a>
                                    </div>
                                    <small class="text-capitalize">Alina smith</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                   
                                </svg>
                                <i class="fa-solid fa-headphones"></i> <small class="ms-2">7.2k</small>
                            </div>
                        </div>                </div></li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/28.png')}}" id="66" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">hole world</a>
                                    </div>
                                    <small class="text-capitalize">mitten raj</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">6.9k</small>
                            </div>
                        </div>                </div></li>
                    <li class="pt-3">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/30.png')}}" id="67" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">passion of work</a>
                                    </div>
                                    <small class="text-capitalize">haul josh</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">6.4k</small>
                            </div>
                        </div>                </div></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                <ul class="p-0 list-unstyled mb-0 ">
                    <li class="pb-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/31.png')}}" id="68" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">my lovely doll</a>
                                    </div>
                                    <small class="text-capitalize">king of rape</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                   
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">6.2k</small>
                            </div>
                        </div>                </div></li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/32.png')}}" id="69" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">my yellow car</a>
                                    </div>
                                    <small class="text-capitalize">Alina kuru</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">5.9k</small>
                            </div>
                        </div>                </div></li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/33.png')}}" id="70" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">retro lo-fi</a>
                                    </div>
                                    <small class="text-capitalize">mitral luff</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">5.4k</small>
                            </div>
                        </div>                </div></li>
                    <li class="pt-3">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/34.png')}}" id="71" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">party nights</a>
                                    </div>
                                  </i><small class="text-capitalize">john deo</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                 
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">5.1k</small>
                            </div>
                        </div>                </div></li>
                </ul>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 mb-3">
                <ul class="p-0 list-unstyled mb-0 ">
                    <li class="pb-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/35.png')}}" id="72" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">my little world</a>
                                    </div>
                                    <small class="text-capitalize">john and smith jonas</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                 
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">4.6k</small>
                            </div>
                        </div>                </div></li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/36.png')}}" id="73" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">party nights</a>
                                    </div>
                                    <small class="text-capitalize">Alina Jonas</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                  
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">4.2k</small>
                            </div>
                        </div>                </div></li>
                    <li class="py-3 border-bottom">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/37.png')}}" id="74" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">first concert</a>
                                    </div>
                                    <small class="text-capitalize">kimono dictum</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    
                                </svg>
                                <i class="fa-solid fa-headphones"></i><small class="ms-2">3.9k</small>
                            </div>
                        </div>  
   </div>


</li>
                    <li class="pt-3">
                        <div class="d-flex">
                            <img src="{{asset('asset/images/37.png')}}" id="75" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                            <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                <div>
                                    <div>
                                        <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">mountain road</a>
                                    </div>
                                    <small class="text-capitalize">john deo</small>
                                </div>
                             <div class="d-flex align-items-center heading-color">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        </svg>
                        <i class="fa-solid fa-headphones"></i><small class="ms-2">3.4k</small>
                            </div>
                        </div>                
                    </div>
</li>


                </ul>
            </div>
        </div>
    </div>

{{-- end of outtop lisining --}}
 

{{-- start top artist --}}
    <div class="row  mb-5">
        <div class="col-lg-12">
            <div class="card-header  mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize top">top artists</h4>
                </div>
                <div class="common-album position-relative d-lg-block d-none">
                    <div class="swiper-button-prev" id="prev1" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-d710b5b835622ecee">
                        <i class="fas fa-arrow-left row1"></i>
                    </div>
                    <div class="swiper-button-next" id="next1" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d710b5b835622ecee">
                        <i class="fas fa-arrow-right row2"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper overflow-hidden swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" data-swiper="artists-slider">
            <ul class="swiper-wrapper top  p-0 list-unstyled mb-0 " id="swiper-wrapper-d710b5b835622ecee" aria-live="polite" style="transform: translate3d(-556px, 0px, 0px); transition-duration: 0ms;"><li class="swiper-slide mb-3 swiper-slide-duplicate" role="group" aria-label="6 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="5">
                    
                    
                        <img src="{{asset('asset/images/43.png')}}" id="57" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">vibrato
                                    eruct </a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li><li class="swiper-slide mb-3 swiper-slide-duplicate swiper-slide-prev" role="group" aria-label="7 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="6">
                    
                    
                        <img src="{{asset('asset/images/44.png')}}" id="58" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">mainours
                                    Kian</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3 swiper-slide-active" role="group" aria-label="1 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="0">
                    
                    
                        <img src="{{asset('asset/images/38.png')}}" id="52" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">Eliana
                                    d’Cruz</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3 swiper-slide-next" role="group" aria-label="2 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="1">
                    
                    
                        <img src="{{asset('asset/images/39.png')}}" id="53" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">Alex
                                    Williams</a>
                        <small class="fw-normal text-capitalize text-center d-block">composer</small>
                </li>
                <li class="swiper-slide mb-3" role="group" aria-label="3 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="2">
                    
                    
                        <img src="{{asset('asset/images/40.png')}}" id="54" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">omen smith</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3" role="group" aria-label="4 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="3">
                    
                    
                        <img src="{{asset('asset/images/41.png')}}" id="55" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">Alexa Jonas</a>
                        <small class="fw-normal text-capitalize text-center d-block">music player</small>
                </li>
                <li class="swiper-slide mb-3" role="group" aria-label="5 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="4">
                    
                    
                        <img src="{{asset('asset/images/42.png')}}" id="56" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">koruna
                                    truss</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3" role="group" aria-label="6 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="5">
                    
                    
                        <img src="{{asset('asset/images/43.png')}}" id="57" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">vibrato
                                    eruct </a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
                <li class="swiper-slide mb-3 swiper-slide-duplicate-prev" role="group" aria-label="7 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="6">
                    
                    
                        <img src="{{asset('asset/images/44.png')}}" id="58" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">mainours
                                    Kian</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li>
            <li class="swiper-slide mb-3 swiper-slide-duplicate swiper-slide-duplicate-active" role="group" aria-label="1 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="0">
                    
                    
                        <img src="{{asset('asset/images/38.png')}}" id="52" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">Eliana
                                    d’Cruz</a>
                        <small class="fw-normal text-capitalize text-center d-block">playback singer</small>
                </li><li class="swiper-slide mb-3 swiper-slide-duplicate swiper-slide-duplicate-next" role="group" aria-label="2 / 7" style="width: 258px; margin-right: 20px;" data-swiper-slide-index="1">
                    
                    
                        <img src="{{asset('asset/images/39.png')}}" id="53" class="img-fluid rounded-3 mb-3" alt="song-img">
                        <a href="../dashboard/music-player.html" class=" text-capitalize  text-center h5 d-block">Alex
                                    Williams</a>
                        <small class="fw-normal text-capitalize text-center d-block">composer</small>
                </li></ul>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
    </div>
      

@endsection




<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

