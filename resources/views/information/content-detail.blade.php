@extends('master.layout')

@section('content')
	<div class="row">
		&nbsp;
	</div>
    <div class="row">
        <!-- left side content area -->
        <div class="large-2 columns">&nbsp;</div>
        <div class="large-8 columns">
            <!-- single post description -->
            <section class="singlePostDescription">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="heading">
                            <h4>{!! $info->information_title !!}</h4>
                        </div>
                        <div class="description showmore_one">
                            <p>
                                {!!$info->information_description!!}
                            </p>
                            <!-- <div class="categories">
                                <button><i class="fa fa-folder"></i>Categories</button>
                                <a href="#" class="inner-btn">entertainment</a>
                                <a href="#" class="inner-btn">comedy</a>
                            </div>
                            <div class="tags">
                                <button><i class="fa fa-tags"></i>Tags</button>
                                <a href="#" class="inner-btn">3D Videos</a>
                                <a href="#" class="inner-btn">Videos</a>
                                <a href="#" class="inner-btn">HD</a>
                                <a href="#" class="inner-btn">Movies</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section><!-- End single post description -->

            <!-- related Posts -->
            <section class="content content-with-sidebar related">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="main-heading borderBottom">
                            <div class="row padding-14">
                                <div class="medium-12 small-12 columns">
                                    <div class="head-title">
                                        <i class="fa fa-book"></i>
                                        <h4>Materi Lainnya</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--end related posts-->
            <!-- Comments -->
            <section class="content comments">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div id="disqus_thread"></div>
                    </div>
                </div>
            </section><!-- End Comments -->
        </div><!-- end left side content area -->
        <div class="large-2 columns"></div>
    </div>                                
@stop