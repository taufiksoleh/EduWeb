@extends('master.layout')

@section('content')
	<div class="row">
		&nbsp;
	</div>
    <div class="row">
        <!-- left side content area -->
        <div class="large-2 columns">&nbsp;</div>
        <div class="large-8 columns">
            <!--single inner video-->
            <section class="inner-videoy" style="margin-bottom: 10px;">
                <div class="row secBg">
                    <div class="large-12 columns inner-flex-video" style="padding: 0px;">
                        <div class="flex-video widescreen" style="margin-bottom: 0px;">
                            <?php
                                if(!empty($chapter->chapter_video)){
                                    echo '<iframe width="560" height="315" src="'.str_replace('watch?v=', 'embed/', $chapter->chapter_video).'" allowfullscreen frameborder="0"></iframe>';
                                } 
                                else if(!empty($chapter->chapter_image)) {
                                    echo '<center><img src="'.url('assets/chapters/images').'/'.$chapter->chapter_image.'" height="100%"></center>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- single post stats -->
            <section class="SinglePostStats">
                <!-- newest video -->
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="media-object stack-for-small">
                            <!-- <div class="media-object-section">
                                <div class="author-img-sec">
                                    <div class="thumbnail author-single-post">
                                        <a href="#"><img src= "http://placehold.it/80x80" alt="post"></a>
                                    </div>
                                    <p class="text-center"><a href="#">Administrator</a></p>
                                </div>
                            </div> -->
                            <div class="large-12" style="padding-bottom: 10px;">
                                <div class="author-des clearfix">
                                    <div class="post-title">
                                        <h4>{!! $chapter->chapter_name !!}</h4>
                                        <!-- <p>
                                            <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                            <span><i class="fa fa-eye"></i>1,862K</span>
                                            <span><i class="fa fa-thumbs-o-up"></i>1,862</span>
                                            <span><i class="fa fa-thumbs-o-down"></i>180</span>
                                            <span><i class="fa fa-commenting"></i>8</span>
                                        </p> -->
                                    </div>
                                    <!-- <div class="subscribe">
                                        <form method="post">
                                            <button type="submit" name="subscribe"><i class="fa fa-download"></i>   Download Materi</button>
                                        </form>
                                    </div> -->
                                </div>
                                <div class="social-share">
                                    <div class="post-like-btn clearfix">
                                        <form method="get" action="{{URL::to('chapter/download/')}}/{{$chapter->chapter_id}}">
                                            <button><i class="fa fa-download"></i>Download Materi</button>
                                        </form>

                                        <div class="float-right easy-share" data-easyshare data-easyshare-http data-easyshare-url="{{URL::current()}}">
                                            <!-- Total -->
                                            <button data-easyshare-button="total">
                                                <span>Total</span>
                                            </button>
                                            <span data-easyshare-total-count>0</span>

                                            <!-- Facebook -->
                                            <button data-easyshare-button="facebook">
                                                <span class="fa fa-facebook"></span>
                                                <span>Share</span>
                                            </button>
                                            <span data-easyshare-button-count="facebook">0</span>

                                            <!-- Twitter -->
                                            <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                                                <span class="fa fa-twitter"></span>
                                                <span>Tweet</span>
                                            </button>
                                            <span data-easyshare-button-count="twitter">0</span>

                                            <!-- Google+ -->
                                            <button data-easyshare-button="google">
                                                <span class="fa fa-google-plus"></span>
                                                <span>+1</span>
                                            </button>
                                            <span data-easyshare-button-count="google">0</span>

                                            <div data-easyshare-loader>Loading...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End single post stats -->

            <!-- single post description -->
            <section class="singlePostDescription">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="heading">
                            <h5>Description</h5>
                        </div>
                        <div class="description showmore_one">
                            <p>
                                {!!$chapter->chapter_description!!}
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

                        <div class="row list-group">
                            @if($datas->count()>0)
                                @foreach($datas as $data)
                                    <div class="item large-4 columns end group-item-grid-default">
                                        <div class="post thumb-border">
                                            <div class="post-thumb">
                                                <img src="http://placehold.it/370x220" alt="landing">
                                                <a href="#" class="hover-posts">
                                                    <span><i class="fa fa-play"></i>Watch Video</span>
                                                </a>
                                                <div class="video-stats clearfix">
                                                    <div class="thumb-stats pull-left">
                                                        <h6>HD</h6>
                                                    </div>
                                                    <div class="thumb-stats pull-left">
                                                        <i class="fa fa-heart"></i>
                                                        <span>506</span>
                                                    </div>
                                                    <div class="thumb-stats pull-right">
                                                        <span>05:56</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-des">
                                                <h6><a href="#">There are many variations of passage.</a></h6>
                                                <div class="post-stats clearfix">
                                                    <p class="pull-left">
                                                        <i class="fa fa-user"></i>
                                                        <span><a href="#">admin</a></span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>5 January 16</span>
                                                    </p>
                                                    <p class="pull-left">
                                                        <i class="fa fa-eye"></i>
                                                        <span>1,862K</span>
                                                    </p>
                                                </div>
                                                <div class="post-summary">
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                                </div>
                                                <div class="post-button">
                                                    <a href="#" class="secondary-button"><i class="fa fa-play-circle"></i>watch video</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                @else
                                    <center>
                                        <h6 class="columns large-12">Tidak ada materi</h6>
                                    </center>
                            @endif
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