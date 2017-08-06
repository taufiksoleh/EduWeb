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
                                List Mata Kuliah
                            </h4>
                            <a class="button" style="padding:10px;float: right;font-size:12px;margin-top: -8px;" href="{{URL::to('course/new')}}">Mata Kuliah Baru</a>
                        </div>
                        @foreach($courses as $COURSE)
                            <div class="profile-video">
                                <div class="media-object stack-for-small">
                                    <div class="media-object-section media-img-content">
                                        <div class="video-img">
                                            <a href="{{URL::to('chapter/list')}}/{{$COURSE->course_id}}">
                                                <img width="100%" src="{{asset('assets/courses/images')}}/{{$COURSE->course_image}}" alt="video thumbnail">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="media-object-section media-video-content large-10">
                                        <div class="video-content">
                                            <h5><a href="{{URL::to('chapter/list')}}/{{$COURSE->course_id}}">{{$COURSE->course_name}}</a></h5>
                                            <p style="padding-right: 10px;">{!! str_limit($COURSE->course_description,170) !!}</p>
                                        </div>
                                        <div class="video-detail clearfix">
                                            <div class="video-stats">
                                                <!-- <span><i class="fa fa-check-square-o"></i>published</span> -->
                                                    <?php 
                                                        if(!empty($COURSE->chapter_date))
                                                        {
                                                            echo '<span><i class="fa fa-clock-o"></i> '.$COURSE->chapter_date.'</span>'; 
                                                        }
                                                    ?>
                                                <!-- <span><i class="fa fa-eye"></i>1,862K</span> -->
                                            </div>
                                            <div class="video-btns">
                                                <a class="video-btn" href="{{URL::to('chapter/list')}}/{{$COURSE->course_id}}"><i class="fa fa-list"></i>List</a>
                                                <!-- <a class="video-btn" href="#"><i class="fa fa-pencil-square-o"></i>Edit</a> -->
                                                <a class="video-btn" href="{{URL::to('course/delete')}}/{{$COURSE->course_id}}"><i class="fa fa-trash"></i>Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="show-more-inner text-center">
                        @if($courses->count()>0)
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