<!-- navbar -->
<nav class="navbar navbar-expand-lg container pt-2 nav-hero-section" style="z-index: 99999999">
    <div class="container-fluid">
        <a href="#"><img src="{{ asset('assets/images/logo.png') }}" alt="Bootstrap" class="logo-white"></a>
        <button id="myButton" class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i id="myIcon" class=" fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="/#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/#howitworks">How it works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="{{ route('ourboats') }}">Our boats</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/#membership">Membership</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/#map">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="/#new-blogs">New/Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/#faq">FAQ</a>
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
