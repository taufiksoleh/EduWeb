@extends('master.layout')

@section('content')
    <!--breadcrumbs-->
    <!-- <section id="breadcrumb">
        <div class="row">
            <div class="large-12 columns">
                <nav aria-label="You are here:" role="navigation">
                    <ul class="breadcrumbs">
                        <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                        <li><a href="#">profile</a></li>
                        <li>
                            <span class="show-for-sr">Current: </span> submit post
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section> -->
    <!--end breadcrumbs-->

    <!-- profile top section -->
        @include('master.profile-cover')
    <!-- profile top section -->
    <div class="row">
        <!-- left sidebar -->
            @include('master.profile-left-sidebar')
        <!-- end sidebar -->
        <!-- right side content area -->
        <div class="large-8 columns profile-inner">
            <!-- single post description -->
            <section class="profile-videos">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="heading">
                            <i class="fa fa-user"></i>
                            <h4>
                                List Informasi Perkuliahan
                            </h4>
                            <a class="button" style="padding:10px;float: right;font-size:12px;margin-top: -8px;" href="{{URL::to('information/new')}}">Informasi Baru</a>
                        </div>
                        @foreach($datas as $data)
                            <div class="profile-video">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section media-img-content">
                                        <div class="video-img">
                                            <img src="{{URL::to('assets/images/logo.jpg')}}" alt="Information">
                                        </div>
                                    </div>
                                    <div class="media-object-section media-video-content large-12">
                                        <div class="video-content">
                                            <h5><a href="{{URL::to('information/detail')}}/{{$data->information_id}}/{{str_slug($data->information_title,'-')}}">{{$data->information_title}}</a></h5>
                                            <p>
                                            	<p style="padding-right: 10px;">{!! str_limit($data->information_description,170) !!}</p>
                                            </p>
                                        </div>
                                        <div class="video-btns float-right">
                                            <!-- <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>Edit</a> -->
                                            <a class="video-btn" href="{{URL::to('information/delete')}}/{{$data->information_id}}"><i class="fa fa-trash"></i>Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="show-more-inner text-center">
                        @if($datas->count()>0)
                            <a href="#" class="show-more-btn">show more</a>
                        @else
                            <h4>Mata Kuliah Kosong</h4>
                        @endif
                        
                        </div>
                    </div>
                </div>
            </section><!-- End single post description -->
        </div><!-- end left side content area -->
    </div>
@stop