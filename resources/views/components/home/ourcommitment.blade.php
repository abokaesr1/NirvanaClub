<div id="Our-Commitment" class="Our-Commitment py-5" style="background-color: #303e75;">
    <div class="container">
        <h2 style="color: white;" class="text-uppercase mb-5">{{ $ourcommitment->en_title }}</h2>
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <div style="color: white;">
                    {!! $ourcommitment->en_description !!}
                </div>
            </div>
            <div class="col-lg-11 offset-lg-1 mt-5">
                <div class="row gx-5">
                    @foreach ( $ourcommitment->cards as $card)
                    <div class="col-lg-4 col-xs-12">
                        <div class="box text-center p-4" style="background-color: white; color: #DDD;">
                            <img src=" {{ $card['attributes']['Icon'] }}" class="icon-ourcommitment" alt="" srcset="">
                            <h5 style="color: #DDD;" class="text-capitalize  mb-4">
                                {{ $card['attributes']['en_name'] }}
                            </h5>
                            <div style="color: #DDD;">
                                {!! $card['attributes']['en_description'] !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
