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
                            <h4>Membuat Mata Kuliah Baru</h4>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">

                                <form data-abide novalidate method="post" action="" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div data-abide-error class="alert callout" style="display: none;">
                                        <p><i class="fa fa-exclamation-triangle"></i>
                                            Data yang anda masukan tidak benar</p>
                                    </div>
                                    <div class="row">
                                        <div class="large-12 columns">
                                            <label>Kode Mata Kuliah
                                                <input type="text" name="course_id" placeholder="Masukan Kode Mata Kuliah ..." required>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Kode Mata Kuliah</b>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Nama Mata Kuliah
                                                <input type="text" name="course_name" placeholder="Masukan Kode Mata Kuliah ..." required>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Nama Mata Kuliah</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Jenis Mata Kuliah
                                                <select name="course_type">
                                                    <option>...</option>
                                                    <option value="umum">Umum</option>
                                                    <option value="khusus">Khusus</option>
                                                    <option value="universitas">Universitas</option>
                                                    <option value="fakultas">Fakultas</option>
                                                    <option value="jurusan">Jurusan</option>
                                                    <option value="peminatan">Peminatan</option>
                                                </select>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Jenis Mata Kuliah</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Deskripsi Mata Kuliah
                                                <textarea name="course_description"></textarea>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Gambar
                                                <input type="file" name="course_image" placeholder="Masukan Gambar Materi">
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Gambar</b>.
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