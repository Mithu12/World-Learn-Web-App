@extends('layouts.frontApp')

@section('content')
<main>
  <div class="main-section">
    <div class="container mt-3">
      <div class="main-section-data">
        <div class="row">
          <div class="col-lg-3">
            <div class="main-left-sidebar">
              <div class="user_profile">
                <div class="user-pro-img">
                  <img src="{{ asset('images/profileDp')}}/{{ $userDta->image }}" alt="">

                </div><!--user-pro-img end-->

                <ul class="social_links">
                  <li><a href="#" title=""><i class="la la-globe"></i> www.example.com</a></li>
                  <li><a href="#" title=""><i class="fa fa-facebook-square"></i> Http://www.facebook.com/john...</a></li>
                  <li><a href="#" title=""><i class="fa fa-twitter"></i> Http://www.Twitter.com/john...</a></li>
                  <li><a href="#" title=""><i class="fa fa-google-plus-square"></i> Http://www.googleplus.com/john...</a></li>
                  <li><a href="#" title=""><i class="fa fa-behance-square"></i> Http://www.behance.com/john...</a></li>
                  <li><a href="#" title=""><i class="fa fa-pinterest"></i> Http://www.pinterest.com/john...</a></li>
                  <li><a href="#" title=""><i class="fa fa-instagram"></i> Http://www.instagram.com/john...</a></li>
                  <li><a href="#" title=""><i class="fa fa-youtube"></i> Http://www.youtube.com/john...</a></li>
                </ul>
              </div><!--user_profile end-->



            </div><!--main-left-sidebar end-->
          </div>
          <div class="col-lg-6">
            <div class="main-ws-sec">
              <div class="user-tab-sec rewivew mb-3">
                <h3>{{ auth()->user()->name }}</h3>
                <div class="star-descp">
                  <span>{{ $userDta->designation  }}</span>

                </div><!--star-descp end-->

              </div><!--user-tab-sec end-->

              <div class="product-feed-tab mt-3" id="saved-jobs">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="mange-tab" data-toggle="tab" href="#mange" role="tab" aria-controls="home" aria-selected="true">Manage Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="saved-tab" data-toggle="tab" href="#saved" role="tab" aria-controls="profile" aria-selected="false">Saved Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#applied" role="tab" aria-controls="applied" aria-selected="false">Applied Jobs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="cadidates-tab" data-toggle="tab" href="#cadidates" role="tab" aria-controls="contact" aria-selected="false">Applied cadidates</a>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="mange" role="tabpanel" aria-labelledby="mange-tab">
                    <div class="posts-bar">
                      <div class="post-bar bgclr">
                        <div class="wordpressdevlp">
                          <h2>Senior Wordpress Developer</h2>

                          <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
                        </div>
                        <br>
                        <div class="row no-gutters">
                          <div class="col-md-6 col-sm-12">
                            <div class="cadidatesbtn">
                              <button type="button" class="btn btn-primary">
                                <span class="badge badge-light">3</span>Candidates
                              </button>
                              <a href="#">
                                <i class="far fa-edit"></i>
                              </a>
                              <a href="#">
                                <i class="far fa-trash-alt"></i>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <ul class="bk-links bklink">
                              <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                              <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="posts-bar">
                      <div class="post-bar bgclr">
                        <div class="wordpressdevlp">
                          <h2>Senior Php Developer</h2>

                          <p><i class="la la-clock-o"></i> Posted on 29 August 2018</p>
                        </div>
                        <br>
                        <div class="row no-gutters">
                          <div class="col-md-6 col-sm-12">
                            <div class="cadidatesbtn">
                              <button type="button" class="btn btn-primary">
                                <span class="badge badge-light">3</span>Candidates
                              </button>
                              <a href="#">
                                <i class="far fa-edit"></i>
                              </a>
                              <a href="#">
                                <i class="far fa-trash-alt"></i>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <ul class="bk-links bklink">
                              <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                              <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="posts-bar">
                      <div class="post-bar bgclr">
                        <div class="wordpressdevlp">
                          <h2>Senior UI UX Designer</h2>

                          <div class="row no-gutters">
                            <div class="col-md-6 col-sm-12">
                              <p class="posttext"><i class="la la-clock-o"></i>Posted on 5 June 2018</p>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <p><i class="la la-clock-o"></i>Expiried on 5 October 2018</p>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row no-gutters">
                          <div class="col-md-6 col-sm-12">
                            <div class="cadidatesbtn">
                              <button type="button" class="btn btn-primary">
                                <span class="badge badge-light">3</span>Candidates
                              </button>
                              <a href="#">
                                <i class="far fa-trash-alt"></i>
                              </a>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                            <ul class="bk-links bklink">
                              <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                              <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="saved" role="tabpanel" aria-labelledby="saved-tab">
                    <div class="post-bar">
                      <div class="p-all saved-post">
                        <div class="usy-dt">
                          <div class="wordpressdevlp">
                            <h2>Senior Wordpress Developer</h2>

                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                      <ul class="savedjob-info saved-info">
                        <li>
                          <h3>Applicants</h3>
                          <p>10</p>
                        </li>
                        <li>
                          <h3>Job Type</h3>
                          <p>Full Time</p>
                        </li>
                        <li>
                          <h3>Salary</h3>
                          <p>$600 - Mannual</p>
                        </li>
                        <li>
                          <h3>Posted : 5 Days Ago</h3>
                          <p>Open</p>
                        </li>
                        <div class="devepbtn saved-btn">
                          <a class="clrbtn" href="#">Unsaved</a>
                          <a class="clrbtn" href="#">Message</a>
                        </div>
                      </ul>
                    </div>
                    <div class="post-bar">
                      <div class="p-all saved-post">
                        <div class="usy-dt">
                          <div class="wordpressdevlp">
                            <h2>Senior PHP Developer</h2>

                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                      <ul class="savedjob-info saved-info">
                        <li>
                          <h3>Applicants</h3>
                          <p>10</p>
                        </li>
                        <li>
                          <h3>Job Type</h3>
                          <p>Full Time</p>
                        </li>
                        <li>
                          <h3>Salary</h3>
                          <p>$600 - Mannual</p>
                        </li>
                        <li>
                          <h3>Posted : 5 Days Ago</h3>
                          <p>Open</p>
                        </li>
                        <div class="devepbtn saved-btn">
                          <a class="clrbtn" href="#">Unsaved</a>
                          <a class="clrbtn" href="#">Message</a>
                        </div>
                      </ul>
                    </div>
                    <div class="post-bar">
                      <div class="p-all saved-post">
                        <div class="usy-dt">
                          <div class="wordpressdevlp">
                            <h2>UI UX Designer</h2>

                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                      <ul class="savedjob-info saved-info">
                        <li>
                          <h3>Applicants</h3>
                          <p>10</p>
                        </li>
                        <li>
                          <h3>Job Type</h3>
                          <p>Full Time</p>
                        </li>
                        <li>
                          <h3>Salary</h3>
                          <p>$600 - Mannual</p>
                        </li>
                        <li>
                          <h3>Posted : 5 Days Ago</h3>
                          <p>Open</p>
                        </li>
                        <div class="devepbtn saved-btn">
                          <a class="clrbtn" href="#">Unsaved</a>
                          <a class="clrbtn" href="#">Message</a>
                        </div>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="applied" role="tabpanel" aria-labelledby="applied-tab">
                    <div class="post-bar">
                      <div class="p-all saved-post">
                        <div class="usy-dt">
                          <div class="wordpressdevlp">
                            <h2>Senior Wordpress Developer</h2>

                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                      <ul class="savedjob-info saved-info">
                        <li>
                          <h3>Applicants</h3>
                          <p>10</p>
                        </li>
                        <li>
                          <h3>Job Type</h3>
                          <p>Full Time</p>
                        </li>
                        <li>
                          <h3>Salary</h3>
                          <p>$600 - Mannual</p>
                        </li>
                        <li>
                          <h3>Posted : 5 Days Ago</h3>
                          <p>Open</p>
                        </li>
                        <div class="devepbtn saved-btn">
                          <a class="clrbtn" href="#">Applied</a>
                          <a class="clrbtn" href="#">Message</a>
                          <a href="#">
                            <i class="far fa-trash-alt"></i>
                          </a>
                        </div>
                      </ul>
                    </div>
                    <div class="post-bar">
                      <div class="p-all saved-post">
                        <div class="usy-dt">
                          <div class="wordpressdevlp">
                            <h2>Senior PHP Developer</h2>

                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                      <ul class="savedjob-info saved-info">
                        <li>
                          <h3>Applicants</h3>
                          <p>10</p>
                        </li>
                        <li>
                          <h3>Job Type</h3>
                          <p>Full Time</p>
                        </li>
                        <li>
                          <h3>Salary</h3>
                          <p>$600 - Mannual</p>
                        </li>
                        <li>
                          <h3>Posted : 5 Days Ago</h3>
                          <p>Open</p>
                        </li>
                        <div class="devepbtn saved-btn">
                          <a class="clrbtn" href="#">Applied</a>
                          <a class="clrbtn" href="#">Message</a>
                          <a href="#">
                            <i class="far fa-trash-alt"></i>
                          </a>
                        </div>
                      </ul>
                    </div>
                    <div class="post-bar">
                      <div class="p-all saved-post">
                        <div class="usy-dt">
                          <div class="wordpressdevlp">
                            <h2>UI UX Designer</h2>

                            <p><i class="la la-clock-o"></i>Posted on 30 August 2018</p>
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
                      <ul class="savedjob-info saved-info">
                        <li>
                          <h3>Applicants</h3>
                          <p>10</p>
                        </li>
                        <li>
                          <h3>Job Type</h3>
                          <p>Full Time</p>
                        </li>
                        <li>
                          <h3>Salary</h3>
                          <p>$600 - Mannual</p>
                        </li>
                        <li>
                          <h3>Posted : 5 Days Ago</h3>
                          <p>Open</p>
                        </li>
                        <div class="devepbtn saved-btn">
                          <a class="clrbtn" href="#">Applied</a>
                          <a class="clrbtn" href="#">Message</a>
                          <a href="#">
                            <i class="far fa-trash-alt"></i>
                          </a>
                        </div>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="cadidates" role="tabpanel" aria-labelledby="cadidates-tab">
                    <div class="post-bar">
                      <div class="post_topbar applied-post">
                        <div class="usy-dt">
                          <img src="images/resources/us-pic.png" alt="">
                          <div class="usy-name">
                            <h3>John Doe</h3>
                            <div class="epi-sec epi2">
                              <ul class="descp descptab bklink">
                                <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                <li><img src="images/icon9.png" alt=""><span>India</span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="ed-opts">
                          <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                          <ul class="ed-options">
                            <li><a href="#" title="">Edit Post</a></li>
                            <li><a href="#" title="">Accept</a></li>
                            <li><a href="#" title="">Unbid</a></li>
                            <li><a href="#" title="">Close</a></li>
                            <li><a href="#" title="">Hide</a></li>
                          </ul>
                        </div>
                        <div class="job_descp noborder">
                          <div class="star-descp review profilecnd">
                            <ul class="bklik">
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                              <a href="#" title="">5.0 of 5 Reviews</a>
                            </ul>
                          </div>
                          <div class="devepbtn appliedinfo noreply">
                            <a class="clrbtn" href="#">Accept</a>
                            <a class="clrbtn" href="#">View Profile</a>
                            <a class="clrbtn" href="#">Message</a>
                            <a href="#">
                              <i class="far fa-trash-alt"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="post-bar">
                      <div class="post_topbar  applied-post">
                        <div class="usy-dt">
                          <img src="images/resources/us-pic.png" alt="">
                          <div class="usy-name">
                            <h3>John Doe</h3>
                            <div class="epi-sec epi2">
                              <ul class="descp descptab bklink">
                                <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                <li><img src="images/icon9.png" alt=""><span>India</span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="ed-opts">
                          <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                          <ul class="ed-options">
                            <li><a href="#" title="">Edit Post</a></li>
                            <li><a href="#" title="">Accept</a></li>
                            <li><a href="#" title="">Unbid</a></li>
                            <li><a href="#" title="">Close</a></li>
                            <li><a href="#" title="">Hide</a></li>
                          </ul>
                        </div>
                        <div class="job_descp noborder">
                          <div class="star-descp review profilecnd">
                            <ul class="bklik">
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                              <a href="#" title="">5.0 of 5 Reviews</a>
                            </ul>
                          </div>
                          <div class="devepbtn appliedinfo noreply">
                            <a class="clrbtn" href="#">Accept</a>
                            <a class="clrbtn" href="#">View Profile</a>
                            <a class="clrbtn" href="#">Message</a>
                            <a href="#">
                              <i class="far fa-trash-alt"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="post-bar">
                      <div class="post_topbar applied-post">
                        <div class="usy-dt">
                          <img src="images/resources/us-pic.png" alt="">
                          <div class="usy-name">
                            <h3>John Doe</h3>
                            <div class="epi-sec epi2">
                              <ul class="descp descptab bklink">
                                <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                <li><img src="images/icon9.png" alt=""><span>India</span></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="ed-opts">
                          <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                          <ul class="ed-options">
                            <li><a href="#" title="">Edit Post</a></li>
                            <li><a href="#" title="">Accept</a></li>
                            <li><a href="#" title="">Unbid</a></li>
                            <li><a href="#" title="">Close</a></li>
                            <li><a href="#" title="">Hide</a></li>
                          </ul>
                        </div>
                        <div class="job_descp noborder">
                          <div class="star-descp review profilecnd">
                            <ul class="bklik">
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star"></i></li>
                              <li><i class="fa fa-star-half-o"></i></li>
                              <a href="#" title="">5.0 of 5 Reviews</a>
                            </ul>
                          </div>
                          <div class="devepbtn appliedinfo noreply">
                            <a class="clrbtn" href="#">Accept</a>
                            <a class="clrbtn" href="#">View Profile</a>
                            <a class="clrbtn" href="#">Message</a>
                            <a href="#">
                              <i class="far fa-trash-alt"></i>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-feed-tab current" id="feed-dd">
                <div class="posts-section">

                    @foreach($posts as $post)
                  <div class="post-bar">
                    <div class="post_topbar">
                      <div class="usy-dt">
                        <img src="{{ asset('images/profileDp') }}/{{ $userDta->image }}" alt="" width="40px">
                        <div class="usy-name">
                          <h3>{{ auth()->user()->name }}</h3>
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
                        <li><span>{{ $userDta->designation }}</span></li>
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

                </div><!--posts-section end-->
              </div><!--product-feed-tab end-->


            </div><!--main-ws-sec end-->
          </div>
          <div class="col-lg-3">
            <div class="right-sidebar">
              <div class="message-btn">
                <a href="{{ route('editProfile') }}" title=""><i class="fa fa-refresh"></i> Update Profile</a>
              </div>
            </div><!--right-sidebar end-->
          </div>
        </div>
      </div><!-- main-section-data end-->
    </div>
  </div>
</main>

@endsection
