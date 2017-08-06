<!doctype html>
<html class="no-js" lang="en">
    @include('master.head')
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        @include('master.header')
            <div class="row padding-14">
                <div class="large-1 columns">&nbsp;</div>
                <!-- left side content area -->
                <div class="large-10 columns">
                        <section class="content content-with-sidebar">
                            <!-- newest video -->
                            <div class="main-heading removeMargin">
                                <div class="row secBg padding-14 removeBorderBottom">
                                    <div class="medium-8 small-12 columns">
                                        <div class="head-title">
                                            <i class="fa fa-list"></i>
                                            <h4>List Materi </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row secBg">
                                <div class="large-12 columns">
                                    <div class="row column head-text clearfix">
                                        <div class="grid-system pull-right show-for-large">
                                            <a class="secondary-button grid-default" href="#"><i class="fa fa-th"></i></a>
                                            <a class="secondary-button grid-medium" href="#"><i class="fa fa-th-large"></i></a>
                                            <a class="secondary-button list current" href="#"><i class="fa fa-th-list"></i></a>
                                        </div>
                                    </div>
                                    <div class="tabs-content" data-tabs-content="newVideos">
                                        <div class="tabs-panel is-active" id="new-all">
                                            <div class="row list-group">
                                                @foreach($chapters as $CHAPTER)
                                                    <div class="item large-4 medium-6 columns list">
                                                        <div class="post thumb-border">
                                                            <div class="post-thumb">
                                                                <img src="{{url('assets/chapters/images')}}/{{$CHAPTER->chapter_image}}" alt="new video">
                                                                <a href="{{URL::to('chapter/detail')}}/{{$CHAPTER->chapter_id}}/{{str_slug($CHAPTER->chapter_name,'-')}}" class="hover-posts">
                                                                    <span><i class="fa fa-eye"></i>Lihat Mata Kuliah</span>
                                                                </a>
                                                            </div>
                                                            <div class="post-des">
                                                                <h6><a href="{{url('chapter/detail')}}/{{$CHAPTER->chapter_id}}/{{str_slug($CHAPTER->chapter_name,'-')}}">{{$CHAPTER->course_id.' - '.$CHAPTER->chapter_name}}</a></h6>
                                                                <div class="post-summary">
                                                                    <p>{!!str_limit($CHAPTER->chapter_description,150)!!}</p>
                                                                </div>
                                                                <div class="post-button">
                                                                    <a href="{{URL::to('chapter/detail')}}/{{$CHAPTER->chapter_id}}/{{str_slug($CHAPTER->chapter_name,'-')}}"" class="secondary-button"><i class="fa fa-list"></i>Lihat Materi</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center loadMore">
                                        <button class="button" type="button">load more</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
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