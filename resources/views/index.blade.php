@inject('chapter_on_course','App\Chapters')

<!doctype html>
<html class="no-js" lang="en">
    @include('master.head')
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        @include('master.header')
            <!-- layerslider -->
            <section id="slider">
                <div id="full-slider-wrapper">
                    <div id="layerslider" style="width:100%;height:500px;">
                        <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                            <img src="{{asset('assets/images/sliderimages/bg.png') }}" class="ls-bg" alt="Slide background"/>
                            <h3 class="ls-l" style="left:50px; top:135px; padding: 15px; color: #444444;font-size: 24px;font-family: 'Open Sans'; font-weight: bold; text-transform: uppercase;" data-ls="offsetxin:0;durationin:2500;delayin:500;durationout:750;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotateout:-90;transformoriginout:left bottom 0;">Multimedia Pemebelajaran Interaktif</h3>
                            <h1 class="ls-l" style="left: 63px; top:185px;background: #e96969;padding:0 10px; opacity: 1; color: #ffffff; font-size: 36px; font-family: 'Open Sans'; text-transform: uppercase; font-weight: bold;" data-ls="offsetxin:left;durationin:3000; delayin:800;durationout:850;rotatexin:90;rotatexout:-90;">Universitas Esa Unggul</h1>
                            <!-- <p class="ls-l" style="font-weight:600;left:62px; top:250px; opacity: 1;width: 450px; color: #444; font-size: 14px; font-family: 'Open Sans';" data-ls="offsetyin:top;durationin:4000;rotateyin:90;rotateyout:-90;durationout:1050;">Belajar menjadi lebih mudah dan menyenangkan</p> -->
                            <img class="ls-l ls-linkto-2" style="top:400px;left:50%;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="{{asset('assets/images/sliderimages/left.png') }}" alt="">
                            <img class="ls-l ls-linkto-2" style="top:400px;left:52%;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="{{asset('assets/images/sliderimages/right.png') }}" alt="">
                        </div>
                        <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;">
                            <img src="{{asset('assets/images/sliderimages/bg2.png') }}" class="ls-bg" alt="Slide background"/>
                            <h3 class="ls-l" style="left:50%; top:150px; padding: 15px; color: #444444;font-size: 24px;font-family: 'Open Sans'; font-weight: bold; text-transform: uppercase;" data-ls="offsetxin:0;durationin:2500;delayin:500;durationout:750;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotateout:-90;transformoriginout:left bottom 0;">Multimedia Pembelajaran Interaktif</h3>
                            <h1 class="ls-l" style="left: 50%; top:200px;background: #e96969;padding:0 10px; opacity: 1; color: #ffffff; font-size: 36px; font-family: 'Open Sans'; text-transform: uppercase; font-weight: bold;" data-ls="offsetxin:left;durationin:3000; delayin:800;durationout:850;rotatexin:90;rotatexout:-90;">Universitas Esa Unggul</h1>
                            <p class="ls-l" style="text-align:center; font-weight:600;left:50%; top:265px; opacity: 1;width: 450px; color: #444; font-size: 14px; font-family: 'Open Sans';" data-ls="offsetyin:top;durationin:4000;rotateyin:90;rotateyout:-90;durationout:1050;">Ayo diskusi dengan teman - teman anda di sini</p>
                            <!-- <a href="#" class="ls-l button" style="border-radius:4px;text-align:center;left:50%; top:315px;background: #444;color: #ffffff;font-family: 'Open Sans';font-size: 14px;display: inline-block; text-transform: uppercase; font-weight: bold;" data-ls="durationout:850;offsetxin:90;offsetxout:-90;duration:4200;fadein:true;fadeout:true;">Buy This Theme</a> -->
                            <img class="ls-l ls-linkto-1" style="top:400px;left:50%;white-space: nowrap;" data-ls="offsetxin:-50;delayin:1000;rotatein:-40;offsetxout:-50;rotateout:-40;" src="{{asset('assets/images/sliderimages/left.png') }}" alt="">
                            <img class="ls-l ls-linkto-1" style="top:400px;left:52%;white-space: nowrap;" data-ls="offsetxin:50;delayin:1000;offsetxout:50;" src="{{asset('assets/images/sliderimages/right.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!--end slider-->

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