<!-- header -->
<div id="Home" class="header position-relative " style="height: 100vh;width:100vw;overflow:hidden">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg container pt-5" style="z-index:1">
        <div class="container-fluid">
            <a href="#"><img src="imeges/1_65.jpg" alt="Bootstrap" width="100" height="50"></a>
            <button id="myButton" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i id="myIcon" class=" fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#Home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#aboutUs">How it works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#Our-Commitment">Our boats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Membership</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Locations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#new-blogs">New/Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">FAQ</a>
                    </li>
                </ul>
                <div class="d-lg-block d-none">
                    <button type="button" class="ahmad rounded-pill px-3 py-1">Join
                        Now</button>
                </div>
                <div class="w-100 d-lg-none">
                    <button type="button" class="ahmad w-100 rounded-pill">Join
                        Now</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- icons -->
    <div class="container" style="height: 60vh;width:100vw;overflow-x:hidden">
            <video style="position: absolute;top:0;left:0;right:0;z-index:0;" autoplay loop muted >
                <source src="{{ asset('storage/'.$Herodata->video) }}" type="video/mp4">
            </video>
        <div class="middle d-none d-md-block position-relative w-100" style="z-index:2">
            <div class="row d-flex justify-content-between align-items-center" id="ahmad">
                <div class="col-auto">
                    <div class="icons d-flex flex-column">
                        <i class="fa-brands fa-facebook-f fa-1x"></i>
                        <i class="fa-brands fa-whatsapp fa-1x"></i>
                        <i class="fa-brands fa-linkedin-in fa-1x"></i>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex data align-items-end" style="text-align: right;flex-direction:column;gap:15px; font-size:60px;">
                        <span class="text-white text-right m-0 hero-content" style="line-height: 1" >
                            {!! $Herodata->en_subtitle !!}
                        </span>
                        <button style=" font-size:15px !important;width: 140px;" type="button" class="ahmad rounded-pill"> Book Now!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="header-last py-3 d-none d-lg-block position-absolute" style="background-color: #183161d1;z-index:2">
        <div class="container">
            <div class="row d-flex justify-content-between">
                @foreach ($Herodata->statics as $item)
                <div class="col-auto">
                    <h5>{{ $item['attributes']['en_title'] }}</h5>
                    <p>{{ $item['attributes']['en_subtitle'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
