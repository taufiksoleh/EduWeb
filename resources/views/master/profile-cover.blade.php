@inject('users','App\Users')
@inject('courses','App\Courses')
@inject('chapters','App\Chapters')
@inject('info','App\Informations')
<section class="topProfile topProfile-inner" style="background: url('{{asset('assets/images/profile_cover.jpg') }}') no-repeat; background-attachment: fixed;background-position: 0px 80px;">
        <div class="main-text">
            <div class="row">
                <div class="large-12 columns">
                    <h3>Multimedia Pembelajaran Interaktif</h3>
                    <h1>Universitas Esa Unggul</h1>
                </div>
            </div>
        </div>
        <div class="profile-stats">
            <div class="row secBg">
                <div class="large-12 columns">
                    <div class="profile-author-img">
                        <img src="{{Auth::check() ? URL::to('assets/users/images/'.Auth::user()->profile_picture) : '' }}" alt="profile author img">
                    </div>
                    <!--
                    <div class="profile-subscribe">
                        <span><i class="fa fa-users"></i>6</span>
                        <button type="submit" name="subscribe">subscribe</button>
                    </div>
                    <div class="profile-share">
                         <div class="easy-share" data-easyshare data-easyshare-http data-easyshare-url="http://joinwebs.com"> -->
                            <!-- Facebook -->
                            <!-- <button data-easyshare-button="facebook">
                                <span class="fa fa-facebook"></span>
                                <span>Share</span>
                            </button>
                            <span data-easyshare-button-count="facebook">0</span> -->

                            <!-- Twitter -->
                            <!-- <button data-easyshare-button="twitter" data-easyshare-tweet-text="">
                                <span class="fa fa-twitter"></span>
                                <span>Tweet</span>
                            </button>
                            <span data-easyshare-button-count="twitter">0</span>
                    -->
                            <!-- Google+ -->
                            <!-- <button data-easyshare-button="google">
                                <span class="fa fa-google-plus"></span>
                                <span>+1</span>
                            </button>
                            <span data-easyshare-button-count="google">0</span>

                            <div data-easyshare-loader>Loading...</div>
                        </div>
                    </div> -->

                    <div class="clearfix">
                        <div class="profile-author-name float-left">
                            <h4>{{Auth::check() ? Auth::user()->display_name : '' }}</h4>
                            <p>Email : <span>{{Auth::check() ? Auth::user()->email : '' }}</span></p>
                        </div>
                        <div class="profile-author-stats float-right">
                            <ul class="menu">
                                <li>
                                    <div class="icon float-left">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="li-text float-left">
                                        <p class="number-text">{{$users->count()}}</p>
                                        <span>Pengguna</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon float-left">
                                        <i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="li-text float-left">
                                        <p class="number-text">{{$courses->count()}}</p>
                                        <span>Mata Kuliah</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon float-left">
                                        <i class="fa fa-book"></i>
                                    </div>
                                    <div class="li-text float-left">
                                        <p class="number-text">{{$chapters->count()}}</p>
                                        <span>Materi Kuliah</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon float-left">
                                        <i class="fa fa-info"></i>
                                    </div>
                                    <div class="li-text float-left">
                                        <p class="number-text">{{$info->count()}}</p>
                                        <span>Informasi</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End profile top section -->