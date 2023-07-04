<div class="navbar navbar-expand-lg navbar-dark navbar-static">
    <div class="d-flex flex-1 d-lg-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-paragraph-justify3"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-transmission"></i>
        </button>
    </div>
    <x-navbar.brand />
    <div class="collapse navbar-collapse order-2 order-lg-1" id="navbar-mobile">
        <ul class="navbar-nav">
        <span class="badge badge-success my-3 my-lg-0 ml-lg-3">Terhubung</span>
        </ul>
    </div>
    <ul class="navbar-nav flex-row order-1 order-lg-2 flex-1 flex-lg-0 justify-content-end align-items-center">
        <li class="nav-item">
            <a href="#" class="navbar-nav-link navbar-nav-link-toggler">
                <i class="icon-bell2"></i>
                <span class="badge badge-warning badge-pill ml-auto ml-lg-0">2</span>
            </a>
        </li>
        <x-navbar.usermenu />
    </ul>
</div>
