<!-- header -->
<div id="Home" class="header position-relative main-hero-section">
    <!-- navbar -->
    <x-header.navbar />

    <!-- hero section -->
    <div class="container hero-content-section">
        <video class="video-header-section" autoplay loop muted>
            <source src="{{ asset('storage/' . $Herodata->video) }}" type="video/mp4">
        </video>
        <div class="middle d-none d-md-block position-relative w-100" style="z-index:2">
            <div class=" d-flex justify-content-between align-items-center" id="ahmad">
                <div class="d-flex flex-col">
                    <div class="icons d-flex flex-column">
                        <i class="fa-brands fa-facebook-f fa-1x"></i>
                        <i class="fa-brands fa-whatsapp fa-1x"></i>
                        <i class="fa-brands fa-linkedin-in fa-1x"></i>
                    </div>
                </div>
                <div class="d-flex flex-col">
                    <div class="d-flex data align-items-end content-section">
                        <span class="text-white text-right m-0 hero-content" style="line-height: 1">
                            {!! $Herodata->en_subtitle !!}
                        </span>
                        <p style="font-size: 12px;width:40%;color:#fff" class="content-section">
                            An exclusive gateway for boating fans, allowing them to become part of a top-notch boating
                            community that prides itself catering to boating and maritime enthusiasts, ensuring a unique
                            experience that combines luxury and high performance with reasonably priced plans.
                        </p>
                        <button style=" font-size:15px !important;width: 140px;" type="button"
                            class="ahmad rounded-pill"> Book Now!</button>
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
