<!doctype html>
<html class="no-js" lang="en">
    @include('master.head')
<body>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        @include('master.header')
        <div class="off-canvas-content" data-off-canvas-content style="box-shadow:0px 0px 0px;">
            <!-- layerslider -->
            @yield('content')
           
            <!-- footer -->
            {{--@include('master.footer')--}}
            @include('master.footer-bottom')
        </div><!--end off canvas content-->
    </div><!--end off canvas wrapper inner-->
</div><!--end off canvas wrapper-->
@include('master.js')
</body>
</html>