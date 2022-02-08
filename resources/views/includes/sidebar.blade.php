<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="/">
            <img src="../../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Tamu</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a class="nav-link text-white">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="avatar">
                    <span class="nav-link-text ms-2 ps-1">{{ Auth::user()->name }}</span>
                </a>
            </li>
            <hr class="horizontal light mt-0">
            <li class="nav-item">
                <a class="nav-link text-white" href="/">
                    <i class="material-icons-round opacity-10">dashboard</i>
                    <span class="nav-link-text ms-2 ps-1">Dashboards</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">DATA</h6>
            </li>
            <li class="nav-item">
                <li class="nav-item">
                    <a href="/tamu" class="nav-link text-white "
                        aria-controls="pagesExamples" role="button" aria-expanded="false">
                        <i class="fas fa-users"></i>
                        <span class="nav-link-text ms-2 ps-1">Tamu</span>
                    </a>
                </li>
                <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white "
                    aria-controls="pagesExamples" role="button" aria-expanded="false">
                    <i class="fas fa-folder-open"></i>
                    <span class="nav-link-text ms-2 ps-1">Data</span>
                </a>
                <div class="collapse " id="pagesExamples">
                    <ul class="nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="/data-tamu">
                                <span class="sidenav-normal  ms-2  ps-1"> Data Tamu <b class="caret"></b></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
    </div>
</aside>
