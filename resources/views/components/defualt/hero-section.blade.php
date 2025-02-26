<style>
    .layoutslider {
        z-index: 1;
        background: rgba(0, 0, 0, .4);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
</style>
<!-- header -->
<div id="Home" class="header position-relative main-hero-section">
    <!-- navbar -->
    <div style=""> <x-header.navbar /></div>

    <!-- hero section -->
    <div class="container hero-content-section">
        <img class="video-header-section" style="width:100vw" src="{{ asset($src) }}" />
        {{-- <div class="layoutslider"></div> --}}
        <div class="middle d-none d-md-block position-relative w-100" style="z-index:2">
            <div class=" d-flex justify-content-center align-items-center" id="ahmad" style="z-index: 4">
                <div class="d-flex flex-col">
                    <div class="d-flex data align-items-center content-section">
                        <span class="text-white text-right m-0 hero-content" style="line-height: 1">
                            Our Boats
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
