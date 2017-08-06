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
            <!-- profile settings -->
            <section class="submit-post">
                <div class="row secBg">
                    <div class="large-12 columns">
                        <div class="heading">
                            <i class="fa fa-pencil-square-o"></i>
                            <h4>Menambahkan Pengguna</h4>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">

                                <form data-abide novalidate method="post" action="" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fa fa-exclamation-triangle"></i>
                                            Data yang anda masukan tidak benar</p>
                                    </div>
                                    @include('additionals.message')
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <label>Nama Lengkap
                                                <input type="text" name="display_name" placeholder="Masukan Nama Lengkap ..." required>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Nama Lengkap</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Email
                                                <input type="email" name="email" placeholder="Masukan Email ..." required>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Nama Lengkap</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Username
                                                <input type="text" name="username" placeholder="Masukan Username ..." required>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Username</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Password
                                                <input type="password" name="password" placeholder="Masukan Password ..." required>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Password</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Foto Profile
                                                <input type="file" name="profile_picture">
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Foto Profile</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <button class="button expanded" type="submit" name="submit">Simpan</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End profile settings -->
        </div><!-- end left side content area -->
    </div>
@stop