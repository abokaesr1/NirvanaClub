
<div class="row g-0 d-flex align-items-stretch" x-data="{ visibleDiv: '{{ $discover[0]['en_subtitle'] }}' }">
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
        <div class="myslider p-5" style="background-color: #303e75;height:100%">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-uppercase mb-4" style="color: white; font-weight: 700;">discover</h4>
                    <ul class="list-unstyled text-uppercase d-flex">
                        @foreach ($discover as $key => $item)
                            <li class="{{ $key == 0 ? 'active' : '' }}" @click="visibleDiv = '{{ $item->en_subtitle }}'">{{ $item->en_title }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            @foreach ($discover as $key => $item)
            <div class="col-12" x-show="visibleDiv === '{{ $item->en_subtitle }}' ">
                    <div id="carusel{{ $key + 1 }}" class="owl-carousel owl-theme mt-4">
                        @foreach ($item->tabs as $tab)
                            @if($key + 1 !== 2)
                            <div class="item">
                                <img
                                src="{{ asset($tab['attributes']['slider_image']) }}"
                                alt="{{ $item->en_title }}"
                                style="height: 250px;">
                            </div>
                            @else
                            <div class="item bg-white d-flex rounded-1">
                                <div class="img-container rounded-1" style="flex: 1;">
                                    <img
                                    src="{{ asset($tab['attributes']['slider_image']) }}"
                                    alt="Image 1"
                                    class="img-fluid rounded-1"
                                    style="height: 250px;object-fit:cover">
                                </div>
                                <div class=" text-container p-3" style="flex: 1;">
                                    <h4 style="color: #64a6d0; font-weight: 700;">
                                        {{ $tab['attributes']['en_title'] }}
                                    </h4>
                                    <div class="content">
                                        {!! $tab['attributes']['en_description'] !!}
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="my-button text-end mt-4">
                        <button type="button" class="ahmad rounded-pill px-3">See More</button>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
