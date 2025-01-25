<div class="work py-5" style="background-color: #EEE;">
    <div class="container">
        <h2 class="text-uppercase mb-5" style="color: #183161d1;">{{ $howitwork->en_title }}</h2>
        <div class="row align-items-center">
            <div class="imege col-lg-5 col-12 offset-lg-1 mb-sm-4">
                <video muted loop autoplay style="width:100%;height:700px;border-radius:20px;border:none !important">
                    <source src="{{ asset('storage/'. $howitwork->video) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row justify-content-between">
                    @foreach ($howitwork->cards as $key => $card)
                    <div class="fff{{ $key + 1 }} d-flex gap-30 card-howitworks">
                        <div class="col-2">
                            <h1>{{ $card['attributes']['number'] }}</h1>
                        </div>
                        <div class="col-10">
                            <h5 class="text-uppercase mb-3 pt-2">
                                {{ $card['attributes']['en_name'] }}
                            </h5>
                            <div>
                                {!!  $card['attributes']['en_description']  !!}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>
