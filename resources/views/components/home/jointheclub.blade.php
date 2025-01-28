<div class="join-club py-5" style="background-color:#EEE ;">
    <div class="container">
        <h1 style="color: #183161d1;">{{ $whyjoin->en_title }}</h1>
        <div class="row align-items-stretch align-items-center">
            <div class="col-lg-6 offset-lg-1 d-flex">
                <div class="stretch py-5">
                    {!! $whyjoin->en_description !!}
                    <div class="custom-nav" style="color: red;">
                        <i class="fa-solid fa-arrow-left me-2" id="prev"></i>
                        <i class="fa-solid fa-arrow-right" id="next"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 d-flex">
                <div class="stretch w-100 py-5" id="aaa">
                    <div id="carusel4" class=" owl-carousel owl-theme">
                        @foreach ($whyjoin->slider as $slider)
                        <div class="item">
                            <img src="{{ asset($slider['attributes']['slider']) }}" alt="" style="height: 400px;object-fit:cover">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
