<ul class="vertical menu off-menu" data-responsive-menu="drilldown">
    <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
        <li class="has-submenu">
            <a href="{{URL::to('/')}}"><i class="fa fa-home"></i>Home</a>
        </li>
        <li class="has-submenu" data-dropdown-menu="example1">
            <a href="{{URL::to('/course')}}"><i class="fa fa-graduation-cap"></i>Mata Kuliah</a>
        </li>
        <li><a href="{{URL::to('/chapter')}}"><i class="fa fa-th"></i>Materi Kuliah</a></li>
        <li>
            <a href="{{URL::to('/information')}}"><i class="fa fa-info"></i>Informasi Perkuliahan</a>
        </li>
    </ul>
</ul>