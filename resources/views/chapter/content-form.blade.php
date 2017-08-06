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
                            <h4>Membuat Materi Baru</h4>
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
                                            <label>Mata Kuliah?
                                                <select name="course_id" required>
                                                    <option>...</option>
                                                    @foreach($courses as $COURSE)
                                                        <option value="{{$COURSE->course_id}}">{{$COURSE->course_name}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Mata Kuliah</b>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Nama Materi
                                                <input type="text" name="chapter_name" placeholder="Masukan Nama Materi ..." required>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Nama Materi</b>.
                                                </span>
                                            </label>
                                        </div>
                                         <div class="large-12 columns">
                                            <label>Deskripsi Materi
                                                <textarea name="chapter_description" required></textarea>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Nama Mata Kuliah</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Lampiran Materi (PPT,PPTX,PDF,WORD)
                                                <input type="file" name="chapter_attachment" placeholder="Masukan Lampiran Materi (ppt,pptx,pdf,word)">
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Lampiran Materi</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Gambar
                                                <input type="file" name="chapter_image" placeholder="Masukan Gambar Materi">
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Gambar</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Video
                                                <input type="text" name="chapter_video" placeholder="Masukan Link Video">
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Video</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Metode Pembelajaran
                                                <select name="chapter_learning_method" required>
                                                    <option>...</option>
                                                </select>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b> Metode Pembelajaran</b>.
                                                </span>
                                            </label>
                                        </div>
                                        <div class="large-12 columns">
                                            <label>Urutan Materi
                                                <input type="number" name="chapter_order" placeholder="Masukan Urutan Materi ..." required>
                                                <span class="form-error">
                                                    Terjadi kesalahan di <b>Urutan Materi</b>.
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