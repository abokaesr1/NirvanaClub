<div id="aboutUs" class="about-us py-5" style="background-color: #EEE;">
    <div class="container">
        <h1 style="color: #183161d1;">About Us</h1>
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <h4 class="mb-4" style="color: #183161d1;">{{ $aboutus->en_title }}</h4>
                <div>
                    {!! $aboutus->en_description !!}
                </div>
            </div>
            @foreach ($aboutus->partner as $partner)
            <div class="col-lg-11 offset-lg-1 mt-5">
                <div class="row gx-5">
                    <div class="col-3">
                        <p style="font-size:12px">A Company Of<strong> {{ $partner['attributes']['en_partner_name'] }}</strong></p>
                        <img src="{{ $partner['attributes']['partner_logo'] }}" alt="aa" class="aboutus-logo mt-2">
                    </div>
                    <div class="col-9">
                        <h4 class="mb-3">{{ $partner['attributes']['en_partner_name'] }}</h4>
                        <div>
                            {!! $partner['attributes']['en_partner_description'] !!}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
