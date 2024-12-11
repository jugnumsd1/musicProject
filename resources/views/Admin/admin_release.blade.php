@extends('layout')
@section('tile')
Release song
@endsection

@section('content')
<div class="content-inner pb-0 container-fluid" id="page_layout">
    <div class="row mb-5">
        <div class="col-lg-12">
            <div class="card-header mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">release</h4>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab-three" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="feature-tab" data-bs-toggle="tab" href="#feature-tab-one" role="tab" aria-selected="true">Featured</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="popuar-tab" data-bs-toggle="tab" href="#popular-tab-one" role="tab" aria-selected="false" tabindex="-1">Popular</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="newest-tab" data-bs-toggle="tab" href="#newest-tab-one" role="tab" aria-selected="false" tabindex="-1">Newest</a>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="tab-content" id="myTabContent-4">
                <div class="tab-pane fade show active" id="feature-tab-one" role="tabpanel" aria-labelledby="feature-tab">
                    <ul class="row list-unstyled mb-0 ">



                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/05.png')}}" id="05" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">the girl</a>
                                        <small class="fw-normal text-capitalize line-count-1">by snoods smith Jonas </small>
                                </div>
                            </div>
                        </li>



                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/06.png')}}" id="06" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">masinc party album</a>
                                        <small class="fw-normal text-capitalize line-count-1">by kerana euc veena</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/07.png')}}" id="07" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">the silent one</a>
                                        <small class="fw-normal text-capitalize line-count-1">by Alex Williams </small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/08.png')}}" id="08" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">just perfect</a>
                                        <small class="fw-normal text-capitalize line-count-1">by karuna truss</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/09.png')}}" id="09" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">everything i want</a>
                                        <small class="fw-normal text-capitalize line-count-1">by Neha arena </small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/10.png')}}" id="10" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">infinity</a>
                                        <small class="fw-normal text-capitalize line-count-1">by nil ana meet nagak</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/37.png')}}" id="17" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">travel mix</a>
                                        <small class="fw-normal text-capitalize line-count-1">by Alex Williams</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/28.png')}}" id="28" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">romantic songs</a>
                                        <small class="fw-normal text-capitalize line-count-1">by Eliana d’cruz</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/29.png')}}" id="29" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">rocking party</a>
                                        <small class="fw-normal text-capitalize line-count-1">by omen smith</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/15.png')}}" id="15" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">peace of mind</a>
                                        <small class="fw-normal text-capitalize line-count-1">by mainours Kian</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/30.png')}}" id="30" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">rap songs</a>
                                        <small class="fw-normal text-capitalize line-count-1">by koruna truss</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/32.png')}}" id="32" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">retro albums</a>
                                        <small class="fw-normal text-capitalize line-count-1">retro albums</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/61.png')}}" id="06" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">way of right</a>
                                        <small class="fw-normal text-capitalize line-count-1">by king sing</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/62.png')}}" id="07" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">you are mine</a>
                                        <small class="fw-normal text-capitalize line-count-1">by meet and Karena Jonas</small>
                                </div>
                            </div>
                           </li>

                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body"> 
                                      <img src="{{asset('asset/images/15.png')}}" id="09" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">my crying eyes</a>
                                        <small class="fw-normal text-capitalize line-count-1">by snoods smith Jonas</small>
                                </div>
                            </div>
                        </li>

                        <li class="col-lg-2 col-md-4 mt-3">
                            <div class="card">
                                <div class="card-body">
                                        <img src="{{asset('asset/images/16.png')}}" id="10" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">my lovely dad</a>
                                        <small class="fw-normal text-capitalize line-count-1">by snoods smith Jonas </small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="tab-pane fade" id="popular-tab-one" role="tabpanel" aria-labelledby="popuar-tab">
                    <ul class="row list-unstyled mb-0 ">
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/05.png')}}" id="05" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">the girl</a>
                                        <small class="fw-normal text-capitalize line-count-1">by snoods smith Jonas </small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/06.png')}}" id="06" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">masinc party album</a>
                                        <small class="fw-normal text-capitalize line-count-1">by kerana euc veena</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/07.png')}}" id="07" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">the silent one</a>
                                        <small class="fw-normal text-capitalize line-count-1">by Alex Williams </small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/08.png')}}" id="08" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">just perfect</a>
                                        <small class="fw-normal text-capitalize line-count-1">by karuna truss</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/09.png')}}" id="09" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">everything i want</a>
                                        <small class="fw-normal text-capitalize line-count-1">by Neha arena </small>
                                </div>
                            </div>
                        </li>
                         <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/29.png')}}" id="29" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">rocking party</a>
                                        <small class="fw-normal text-capitalize line-count-1">by omen smith</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/15.png')}}" id="15" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">peace of mind</a>
                                        <small class="fw-normal text-capitalize line-count-1">by mainours Kian</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/30.png')}}" id="30" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">rap songs</a>
                                        <small class="fw-normal text-capitalize line-count-1">by koruna truss</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/32.png')}}" id="32" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">retro albums</a>
                                        <small class="fw-normal text-capitalize line-count-1">retro albums</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/61.png')}}" id="06" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">way of right</a>
                                        <small class="fw-normal text-capitalize line-count-1">by king sing</small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="newest-tab-one" role="tabpanel" aria-labelledby="newest-tab">
                    <ul class="row list-unstyled mb-0 ">
                         <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/29.png')}}" id="29" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">rocking party</a>
                                        <small class="fw-normal text-capitalize line-count-1">by omen smith</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/15.png')}}" id="15" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">peace of mind</a>
                                        <small class="fw-normal text-capitalize line-count-1">by mainours Kian</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/30.png')}}" id="30" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">rap songs</a>
                                        <small class="fw-normal text-capitalize line-count-1">by koruna truss</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/32.png')}}" id="32" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">retro albums</a>
                                        <small class="fw-normal text-capitalize line-count-1">retro albums</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/61.png')}}" id="06" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">way of right</a>
                                        <small class="fw-normal text-capitalize line-count-1">by king sing</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/61.png')}}" id="06" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">way of right</a>
                                        <small class="fw-normal text-capitalize line-count-1">by king sing</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/62.png')}}" id="07" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">you are mine</a>
                                        <small class="fw-normal text-capitalize line-count-1">by meet and Karena Jonas</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/15.png')}}" id="09" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">my crying eyes</a>
                                        <small class="fw-normal text-capitalize line-count-1">by snoods smith Jonas</small>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-2 col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    
                                    
                                        <img src="{{asset('asset/images/16.png')}}" id="10" class="mb-3 img-fluid rounded-3" alt="song-img">
                                        <a href="../dashboard/music-player.html" class=" text-capitalize line-count-1 h5 d-block">my lovely dad</a>
                                        <small class="fw-normal text-capitalize line-count-1">by snoods smith Jonas </small>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-lg-6 mb-3">
            <div class="card-header mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">our top releasing listening songs</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
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
                                        <path d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z" fill="#4A525F"></path>
                                    </svg>
                                    <small class="ms-2">8.6k</small>
                                </div>
                            </div>                    </div></li>
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
                                        <path d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z" fill="#4A525F"></path>
                                    </svg>
                                    <small class="ms-2">8.2k</small>
                                </div>
                            </div>                    </div></li>
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
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z" fill="#4A525F"></path>
                                    </svg>
                                    <small class="ms-2">8.0k</small>
                                </div>
                            </div>                    </div></li>
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
                                        <path d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z" fill="#4A525F"></path>
                                    </svg>
                                    <small class="ms-2">7.6k</small>
                                </div>
                            </div>                    </div></li>
                    </ul>
                </div>
                <div class="col-lg-6">
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
                                        <path d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z" fill="#4A525F"></path>
                                    </svg>
                                    <small class="ms-2">7.4k</small>
                                </div>
                            </div>                    </div></li>
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
                                        <path d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z" fill="#4A525F"></path>
                                    </svg>
                                    <small class="ms-2">7.2k</small>
                                </div>
                            </div>                    </div></li>
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
                                        <path d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z" fill="#4A525F"></path>
                                    </svg>
                                    <small class="ms-2">6.9k</small>
                                </div>
                            </div>                    </div></li>
                        <li class="pt-3">
                            <div class="d-flex">
                                <img src="{{asset('asset/images/29.png')}}" id="67" class="img-fluid rounded me-3 avatar-55" alt="list-img">
                                <div class="d-flex align-items-center justify-content-between flex-wrap w-100">
                                    <div>
                                        <div>
                                            <a href="../dashboard/music-player.html" class="text-capitalize h5 mt-3">passion of work</a>
                                        </div>
                                        <small class="text-capitalize">haul josh</small>
                                    </div>
                                 <div class="d-flex align-items-center heading-color">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M15.7727 4.89531C15.025 4.14014 14.1357 3.53986 13.1558 3.12883C12.1758 2.71781 11.1244 2.50412 10.0617 2.5H10C7.84512 2.5 5.77849 3.35602 4.25476 4.87976C2.73102 6.40349 1.875 8.47012 1.875 10.625V15C1.875 15.4973 2.07254 15.9742 2.42417 16.3258C2.77581 16.6775 3.25272 16.875 3.75 16.875H5C5.49728 16.875 5.97419 16.6775 6.32583 16.3258C6.67746 15.9742 6.875 15.4973 6.875 15V11.875C6.875 11.3777 6.67746 10.9008 6.32583 10.5492C5.97419 10.1975 5.49728 10 5 10H3.15313C3.30905 8.29188 4.09785 6.70373 5.36466 5.54736C6.63147 4.39099 8.28477 3.74991 10 3.75H10.0523C11.7604 3.75722 13.4042 4.40211 14.6616 5.55827C15.9189 6.71444 16.6991 8.29851 16.8492 10H15C14.5027 10 14.0258 10.1975 13.6742 10.5492C13.3225 10.9008 13.125 11.3777 13.125 11.875V15C13.125 15.4973 13.3225 15.9742 13.6742 16.3258C14.0258 16.6775 14.5027 16.875 15 16.875H16.25C16.7473 16.875 17.2242 16.6775 17.5758 16.3258C17.9275 15.9742 18.125 15.4973 18.125 15V10.625C18.1291 9.56217 17.9234 8.50898 17.5197 7.52577C17.1161 6.54257 16.5224 5.64868 15.7727 4.89531ZM5 11.25C5.16576 11.25 5.32473 11.3158 5.44194 11.4331C5.55915 11.5503 5.625 11.7092 5.625 11.875V15C5.625 15.1658 5.55915 15.3247 5.44194 15.4419C5.32473 15.5592 5.16576 15.625 5 15.625H3.75C3.58424 15.625 3.42527 15.5592 3.30806 15.4419C3.19085 15.3247 3.125 15.1658 3.125 15V11.25H5ZM16.875 15C16.875 15.1658 16.8092 15.3247 16.6919 15.4419C16.5747 15.5592 16.4158 15.625 16.25 15.625H15C14.8342 15.625 14.6753 15.5592 14.5581 15.4419C14.4408 15.3247 14.375 15.1658 14.375 15V11.875C14.375 11.7092 14.4408 11.5503 14.5581 11.4331C14.6753 11.3158 14.8342 11.25 15 11.25H16.875V15Z" fill="#4A525F"></path>
                                    </svg>
                                    <small class="ms-2">6.4k</small>
                                </div>
                            </div>                    </div></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-3">
             <div class="card-header mb-3">
                <div class="header-title">
                    <h4 class="card-title text-capitalize">amazing playlist release by artist</h4>
                </div>
            </div>
               <div class="row">
                   <div class="col-lg-6">
                        <div class="bg-soft-warning position-relative  rounded-3 card-box mb-3 ">
                            <img src="{{asset('asset/images/02.png')}}" id="03" class="img-fluid mx-auto d-block" alt="play-img">
                            <div class="d-flex align-items-center play-list-icon">
                                <svg class="text-warning" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Play">
                                    <path id="Fill 1" opacity="0.4" d="M21.8334 11.0052C21.8334 16.9732 16.9709 21.8334 11 21.8334C5.02914 21.8334 0.166687 16.9732 0.166687 11.0052C0.166687 5.02679 5.02914 0.166687 11 0.166687C16.9709 0.166687 21.8334 5.02679 21.8334 11.0052Z" fill="currentColor"></path>
                                    <path id="Fill 4" d="M15.3333 11.0053C15.3333 11.2791 15.2472 11.5539 15.0748 11.774C15.0425 11.8172 14.8917 11.9952 14.7732 12.111L14.7086 12.1742C13.8037 13.1335 11.5524 14.5762 10.4106 15.0385C10.4106 15.049 9.73201 15.3239 9.40885 15.3334H9.36577C8.87027 15.3334 8.40708 15.0606 8.1701 14.6183C8.04084 14.3751 7.92235 13.6695 7.91158 13.66C7.81463 13.0272 7.75 12.0583 7.75 10.9948C7.75 9.87957 7.81463 8.86758 7.93312 8.24627C7.93312 8.23574 8.05161 7.66709 8.12701 7.47754C8.2455 7.2048 8.46094 6.97207 8.73023 6.82465C8.94567 6.72039 9.17188 6.66669 9.40885 6.66669C9.65661 6.67827 10.1198 6.83518 10.3029 6.90889C11.5094 7.37224 13.8145 8.88864 14.6978 9.81533C14.8486 9.96276 15.0102 10.1428 15.0533 10.1839C15.2364 10.4156 15.3333 10.6999 15.3333 11.0053Z" fill="currentColor"></path>
                                    </g>
                                </svg>
                                <span class="ms-2 fw-semibold text-capitalize">18 tracks</span>
                            </div>
                        </div>
                        <a href="../dashboard/music-player.html" class="text-capitalize h5">omen smith playlist</a>
                        <small class="fw-normal line-count-1 text-capitalize">top 16 songs from Alexa and most of the relax songs.</small>               </div>
                   <div class="col-lg-6 mt-lg-0 mt-4">
                        <div class="bg-soft-info position-relative  rounded-3 card-box mb-3 ">
                            <img src="{{asset('asset/images/03.png')}}" id="04" class="img-fluid mx-auto d-block" alt="play-img">
                            <div class="d-flex align-items-center play-list-icon">
                                <svg class="text-info" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="Play">
                                    <path id="Fill 1" opacity="0.4" d="M21.8334 11.0052C21.8334 16.9732 16.9709 21.8334 11 21.8334C5.02914 21.8334 0.166687 16.9732 0.166687 11.0052C0.166687 5.02679 5.02914 0.166687 11 0.166687C16.9709 0.166687 21.8334 5.02679 21.8334 11.0052Z" fill="currentColor"></path>
                                    <path id="Fill 4" d="M15.3333 11.0053C15.3333 11.2791 15.2472 11.5539 15.0748 11.774C15.0425 11.8172 14.8917 11.9952 14.7732 12.111L14.7086 12.1742C13.8037 13.1335 11.5524 14.5762 10.4106 15.0385C10.4106 15.049 9.73201 15.3239 9.40885 15.3334H9.36577C8.87027 15.3334 8.40708 15.0606 8.1701 14.6183C8.04084 14.3751 7.92235 13.6695 7.91158 13.66C7.81463 13.0272 7.75 12.0583 7.75 10.9948C7.75 9.87957 7.81463 8.86758 7.93312 8.24627C7.93312 8.23574 8.05161 7.66709 8.12701 7.47754C8.2455 7.2048 8.46094 6.97207 8.73023 6.82465C8.94567 6.72039 9.17188 6.66669 9.40885 6.66669C9.65661 6.67827 10.1198 6.83518 10.3029 6.90889C11.5094 7.37224 13.8145 8.88864 14.6978 9.81533C14.8486 9.96276 15.0102 10.1428 15.0533 10.1839C15.2364 10.4156 15.3333 10.6999 15.3333 11.0053Z" fill="currentColor"></path>
                                    </g>
                                </svg>
                                <span class="ms-2 fw-semibold text-capitalize">16 tracks</span>
                            </div>
                        </div>
                        <a href="../dashboard/music-player.html" class="text-capitalize h5">Alexa Jonas</a>
                        <small class="fw-normal line-count-1 text-capitalize">top 22 songs from vibrato and all type of songs.</small>               </div>
               </div>
        </div>
    </div>
        </div>
@endsection