<div class="row g-0 d-flex align-items-stretch" x-data="{ visibleDiv: 'div1' }">
    <div class="col-lg-6">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                @foreach ($readytojoin->slider as $key => $item)
                <div class="carousel-item @if($key == 0) active @endif">
                    <img src="{{ asset($item['attributes']['slider']) }}" class="d-block w-100 img-fluid" alt="..."
                        style="height: 528px;object-fit:cover;object-position:center">
                </div>
                @endforeach
                <div class="carusal-caption position-absolute h-50 d-none d-xl-block" style="width: 60%;">
                    <h2 class="text-uppercase mb-3">
                        {{$readytojoin->en_title}}
                    </h2>
                    <button type="button" class="ahmad rounded-pill px-3 py-1  d-none d-lg-block">Book
                        Now !</button>
                </div>
            </div>
            <div class="container">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon me-lg-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="myslider p-5" style="background-color: #303e75;">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-uppercase mb-4" style="color: white; font-weight: 700;">discover</h4>
                    <ul class="list-unstyled text-uppercase d-flex">
                        <li class="active" @click="visibleDiv = 'div1'">experences</li>
                        <li @click="visibleDiv = 'div2'">boats</li>
                        <li @click="visibleDiv = 'div3'">staff</li>
                    </ul>
                </div>
            </div>
            <div class=" col-12" x-show="visibleDiv === 'div1'">
                <div id="carusel1" class=" owl-carousel owl-theme mt-4">
                    <div class="item">
                        <img src="imeges/ssmc.jpg" alt="" style="height: 250px;">
                    </div>
                    <div class="item">
                        <img src="imeges/ssmc.jpg" alt="" style="height: 250px;">
                    </div>
                    <div class="item">
                        <img src="imeges/ssmc.jpg" alt="" style="height: 250px;">
                    </div>
                    <div class="item">
                        <img src="imeges/ssmc.jpg" alt="" style="height: 250px;">
                    </div>
                    <div class="item">
                        <img src="imeges/ssmc.jpg" alt="" style="height: 250px;">
                    </div>
                </div>
                <div class="my-button text-end">
                    <button type="button" class="ahmad rounded-pill px-3">See More</button>
                </div>
            </div>
            <div class=" col-12" x-show="visibleDiv === 'div2'">
                <div id="carusel2" class="owl-carousel owl-theme mt-4">
                    <div class="item bg-white d-flex rounded-4">
                        <div class="img-container rounded-4" style="flex: 1.4;">
                            <img src="imeges/ssmc.jpg" alt="Image 1" class="img-fluid rounded-4"
                                style="height: 250px;">
                        </div>
                        <div class=" text-container p-3" style="flex: 1;">
                            <h4 style="color: #64a6d0; font-weight: 700;">SPX 214</h4>
                            <h5 style="color: #444;">LENGTH</h5>
                            <p style="color: #666; margin-top: 0px;">21 ft 8(32+t)</p>
                            <h5 style="color: #444;">LENGTH</h5>
                            <p style="color: #666; margin-top: 0px;">21 ft 8(32+t)</p>
                            <div class="link rounded-4 text-center"
                                style="background-color: #64a6d0; color: white; border: 1px solid #64a6d0; ">
                                <a style="text-decoration: none; color: white;" href="#">BOOK NOW!</a>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-white d-flex rounded-4">
                        <div class="img-container rounded-4" style="flex: 1.4;">
                            <img src="imeges/images (1).jpg" alt="Image 1" class="img-fluid rounded-4"
                                style="height: 250px;">
                        </div>
                        <div class=" text-container p-3" style="flex: 1;">
                            <h4 style="color: #64a6d0; font-weight: 700;">SPX 214</h4>
                            <h5 style="color: #444;">LENGTH</h5>
                            <p style="color: #666; margin-top: 0px;">21 ft 8(32+t)</p>
                            <h5 style="color: #444;">LENGTH</h5>
                            <p style="color: #666; margin-top: 0px;">21 ft 8(32+t)</p>
                            <div class="link rounded-4 text-center"
                                style="background-color: #64a6d0; color: white; border: 1px solid #64a6d0; ">
                                <a style="text-decoration: none; color: white;" href="#">BOOK NOW!</a>
                            </div>
                        </div>
                    </div>
                    <div class="item bg-white d-flex rounded-4">
                        <div class="img-container rounded-4" style="flex: 1.4;">
                            <img src="imeges/images (2).jpg" alt="Image 1" class="img-fluid rounded-4"
                                style="height: 250px;">
                        </div>
                        <div class=" text-container p-3" style="flex: 1;">
                            <h4 style="color: #64a6d0; font-weight: 700;">SPX 214</h4>
                            <h5 style="color: #444;">LENGTH</h5>
                            <p style="color: #666; margin-top: 0px;">21 ft 8(32+t)</p>
                            <h5 style="color: #444;">LENGTH</h5>
                            <p style="color: #666; margin-top: 0px;">21 ft 8(32+t)</p>
                            <div class="link rounded-4 text-center"
                                style="background-color: #64a6d0; color: white; border: 1px solid #64a6d0; ">
                                <a style="text-decoration: none; color: white;" href="#">BOOK NOW!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-button text-end">
                    <button type="button" class="ahmad rounded-pill px-3">See More</button>
                </div>
            </div>
            <div class="col-12" x-show="visibleDiv === 'div3'">
                <div id="carusel3" class=" owl-carousel owl-theme mt-4">
                    <div class="item">
                        <img src="imeges/images (1).jpg" alt="" style="height: 250px;">
                    </div>
                    <div class="item">
                        <img src="imeges/images (1).jpg" alt="" style="height: 250px;">
                    </div>
                    <div class="item">
                        <img src="imeges/images (1).jpg" alt="" style="height: 250px;">
                    </div>
                    <div class="item">
                        <img src="imeges/images (1).jpg" alt="" style="height: 250px;">
                    </div>
                    <div class="item">
                        <img src="imeges/images (1).jpg" alt="" style="height: 250px;">
                    </div>
                </div>
                <div class="my-button text-end">
                    <button type="button" class="ahmad rounded-pill px-3">Join
                        Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
