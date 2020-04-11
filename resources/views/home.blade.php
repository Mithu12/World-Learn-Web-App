@extends('layouts.frontApp')

@section('content')
    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">

                        </div>
                        <div class="col-lg-6 col-md-8 no-pd">
                            <div class="main-ws-sec">

                                @foreach($posts as $post)
                                    <div class="post-bar">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <img src="{{ asset('images/profileDp') }}/{{ $post->image }}" alt="" width="40px">
                                                <div class="usy-name">
                                                    <h3>{{ $post->name }}</h3>
                                                </div>
                                            </div>
                                            <div class="ed-opts">
                                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                <ul class="ed-options">
                                                    <li><a href="#" title="">Edit Post</a></li>
                                                    <li><a href="#" title="">Unsaved</a></li>
                                                    <li><a href="#" title="">Unbid</a></li>
                                                    <li><a href="#" title="">Close</a></li>
                                                    <li><a href="#" title="">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="epi-sec">
                                            <ul class="descp">
                                                <li><span>{{ $post->designation }}</span></li>
                                            </ul>
                                        </div>
                                        <div class="job_descp">
                                            <h3>{{ $post->title }}</h3>
                                            <p>{{ $post->description }}</p>
                                        </div>
                                        <div class="job-status-bar">
                                            <ul class="like-com">
                                                <li>
                                                    <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                    <img src="images/liked-img.png" alt="">
                                                    <span>25</span>
                                                </li>
                                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                            </ul>
                                            <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                        </div>
                                    </div><!--post-bar end-->
                                @endforeach
                            </div><!--main-ws-sec end-->
                        </div>
                        <div class="col-lg-3 pd-right-none no-pd">
                            <div class="right-sidebar">
                                <div class="top-profiles">
                                    <div class="pf-hd">
                                        <h3>Top Profiles</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="profiles-slider">
                                        <div class="user-profy">
                                            <img src="images/resources/user1.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div><!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="images/resources/user2.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div><!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="images/resources/user3.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div><!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="images/resources/user1.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div><!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="images/resources/user2.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div><!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="images/resources/user3.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li><a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a></li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div><!--user-profy end-->
                                    </div><!--profiles-slider end-->
                                </div><!--top-profiles end-->
                            </div><!--right-sidebar end-->
                        </div>
                    </div>
                </div><!-- main-section-data end-->
            </div>
        </div>
    </main>
@endsection
