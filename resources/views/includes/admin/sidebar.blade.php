<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="index.html" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a>
                </li>
                <li><a href="{{route('siswa.index')}}" class=""><i class="lnr lnr-user"></i> <span>Siswa</span></a>
                </li>
                <li><a href="{{route('jurusan.index')}}" class=""><i class="lnr lnr-user"></i> <span>Jurusan</span></a>
                </li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="page-profile.html" class="">Profile</a></li>
                            <li><a href="page-login.html" class="">Login</a></li>
                            <li><a href="page-lockscreen.html" class="">Lockscreen</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</div>