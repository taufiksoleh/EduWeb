@inject('chapter_on_course','App\Chapters')

<!doctype html>
<html class="no-js" lang="en">
    @include('master.head')
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        @include('master.header')

            <div class="row padding-14">
                <!-- left side content area -->
                <div class="large-1 columns">&nbsp;</div>
                <div class="large-10 columns">
                    <section class="content content-with-sidebar">
                        <!-- newest video -->
                        <div class="main-heading">
                            <div class="row secBg padding-14">
                                <div class="medium-8 small-8 columns">
                                    <div class="head-title">
                                        <i class="fa fa-graduation-cap"></i>
                                        <h4>Mata Kuliah</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row secBg">
                            <div class="large-12 columns">
                                <div class="row column head-text clearfix">
                                    <div class="grid-system pull-right show-for-large">
                                        <a class="secondary-button grid-default" href="#"><i class="fa fa-th"></i></a>
                                        <a class="secondary-button current grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                        <a class="secondary-button list" href="#"><i class="fa fa-th-list"></i></a>
                                    </div>
                                </div>
                                <div class="tabs-content" data-tabs-content="newVideos">
                                    <div class="tabs-panel is-active" id="new-all">
                                        <div class="row list-group">
                                            @foreach($courses as $COURSE)
                                                <div class="item large-4 medium-6 columns grid-medium">
                                                    <div class="post thumb-border">
                                                        <div class="post-thumb">
                                                            <img src="{{url('assets/courses/images')}}/{{$COURSE->course_image}}" alt="new video">
                                                            <a href="{{ url('view/'.$COURSE->course_id) }}" class="hover-posts">
                                                                <span><i class="fa fa-eye"></i>Lihat Mata Kuliah</span>
                                                            </a>
                                                            <div class="video-stats clearfix">
                                                                <div class="thumb-stats pull-right">
                                                                    <span>{{$chapter_on_course->where('course_id',$COURSE->course_id)->count()}} Materi</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="post-des">
                                                            <h6><a href="{{ url('view/'.$COURSE->course_id) }}">{{$COURSE->course_id.' - '.$COURSE->course_name}}</a></h6>
                                                            <div class="post-stats clearfix">
                                                                <p class="pull-left">
                                                                    <i class="fa fa-user"></i>
                                                                    <span><a href="#">{{$COURSE->course_admin}}</a></span>
                                                                </p>
                                                                <p class="pull-left">
                                                                    <i class="fa fa-list"></i>
                                                                    <span>{{$chapter_on_course->where('course_id',$COURSE->course_id)->count()}} Materi</span>
                                                                </p>
                                                            </div>
                                                            <div class="post-summary">
                                                                <p>{!!str_limit($COURSE->course_description,150)!!}</p>
                                                            </div>
                                                            <div class="post-button">
                                                                <a href="{{ url('view/'.$COURSE->course_id) }}"" class="secondary-button"><i class="fa fa-list"></i>Lihat Mata Kuliah</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center row-btn">
                                    <!--     -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- ad Section -->
                    <!-- <div class="googleAdv text-center">
                        <a href="#"><img src="{{asset('assets/images/goodleadv.png') }}" alt="googel ads"></a>
                    </div> -->
                    <!-- End ad Section -->

                    <!-- popular video -->

                </div><!-- end left side content area -->
                <div class="large-1 columns">&nbsp;</div>
            </div>
            <!-- footer -->
            <footer>
                <a href="#" id="back-to-top" title="Back to top"><i class="fa fa-angle-double-up"></i></a>
            </footer><!-- footer -->
            @include('master.footer-bottom')
        </div><!--end off canvas content-->
    </div><!--end off canvas wrapper inner-->
</div><!--end off canvas wrapper-->
@include('master.js')
</body>
</html>