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
                            <i class="fa fa-list"></i>
                            <h4>
                                List Materi @if(!empty($course_name)) - {{$course_name}} @endif
                            </h4>
                            <a class="button" style="padding:10px;float: right;font-size:12px;margin-top: -8px;" href="{{URL::to('chapter/new')}}">Materi Baru</a>
                        </div>
                        @foreach($chapters as $CHAPTER)
                            <div class="profile-video">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section media-img-content">
                                        <div class="video-img">
                                            <a href="{{URL::to('chapter/detail')}}/{{$CHAPTER->chapter_id}}/{{str_slug($CHAPTER->chapter_name,'-')}}">
                                            <img width="100%" src="{{asset('assets/chapters/images')}}/{{$CHAPTER->chapter_image}}" alt="video thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section media-video-content large-10">
                                        <div class="video-content">
                                            <h5><a href="{{URL::to('chapter/detail')}}/{{$CHAPTER->chapter_id}}/{{str_slug($CHAPTER->chapter_name,'-')}}">{{$CHAPTER->chapter_name}}</a></h5>
                                            <p style="padding-right: 10px;">{!! str_limit($CHAPTER->chapter_description,170) !!}</p>
                                        </div>
                                        <div class="video-detail clearfix">
                                            <div class="video-stats">
                                                <!-- <span><i class="fa fa-check-square-o"></i>published</span> -->
                                                    <?php 
                                                        if(!empty($CHAPTER->chapter_date))
                                                        {
                                                            echo '<span><i class="fa fa-clock-o"></i> '.$CHAPTER->chapter_date.'</span>'; 
                                                        }
                                                    ?>
                                                <!-- <span><i class="fa fa-eye"></i>1,862K</span> -->
                                            </div>
                                            @if(Auth::check())
                                                <div class="video-btns">
                                                    <!-- <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>edit</a> -->
                                                    <a class="video-btn" href="{{URL::to('chapter/delete')}}/{{$CHAPTER->chapter_id}}"><i class="fa fa-trash"></i>delete</a>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="show-more-inner text-center">
                        @if($chapters->count()>0)
                            <a href="#" class="show-more-btn">show more</a>
                        @else
                            <h4>Materi Kuliah Kosong</h4>
                        @endif
                        
                        </div>
                    </div>
                </div>
            </section><!-- End single post description -->
        </div><!-- end left side content area -->
    </div>
@stop