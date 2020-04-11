@extends('layouts.frontApp')

@section('content')
    {{--{{ $userData->user_id }}--}}



    <div class="main-left-sidebar no-margin magic-box  faded">
        <div class="user-data full-width">

            <ul class="user-fw-status">
                <i class="fa fa-times-circle crossControl"></i>
                <li>
                    <h4>Word</h4>
                    <span class="selectedWord"></span>
                </li>
                <li>
                    <h4>Meaning</h4>
                    <span class="wordMeaning"></span>
                </li>
            </ul>
        </div>
    </div>



    <section class="profile-account-setting">
        <div class="container">
            <div class="account-tabs-setting">

                <div class="row">
                    @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content" id="nav-tabContent">




                            <div class="" id="nav-deactivate" role="tabpanel" aria-labelledby="nav-deactivate-tab">
                                <div class="acc-setting">
                                    <h3>Create Post</h3>
                                    <form action="{{ route('makePosts') }}" method="post">
                                        @csrf
                                        <div class="cp-field">
                                            <h5>Title</h5>
                                            <div class="cpp-fiel">
                                                <input type="text" name="title" placeholder="Title">
                                                <i class="fas fa-heading"></i>
                                            </div>
                                        </div>
                                        <div class="cp-field">
                                            <h5>Description</h5>
                                            <textarea name="description"></textarea>
                                        </div>
                                        <div class="cp-field">
                                            <div class="fgt-sec">
                                                <input type="checkbox" name="cc" id="c4">

                                            </div>
                                        </div>
                                        <div class="save-stngs pd3">
                                            <ul>
                                                <li><button type="submit">Upload</button></li>
                                            </ul>
                                        </div><!--save-stngs end-->
                                    </form>
                                </div><!--acc-setting end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--account-tabs-setting end-->
        </div>
    </section>



@endsection
