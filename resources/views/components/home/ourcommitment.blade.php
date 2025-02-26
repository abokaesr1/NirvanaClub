<div id="ourCommitment" class="Our-Commitment py-5" style="background-color: #303e75;">
    <div class="container">
        <h2 style="color: white;" class="text-uppercase mb-5">Why join Nirvana Boating Club?</h2>
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <div style="color: white;">
                    {!! $ourcommitment->en_description !!}
                </div>
            </div>
            <style>
                .carusel-whyjoin .item .box {
                    background-color: white;
                    color: #DDD;
                    height: 100%;
                    border-radius: 15px
                }

                .carusel-whyjoin .item .box img {
                    width: 30%;
                    margin: auto;
                    margin-bottom: 10px
                }

                .carusel-whyjoin .owl-stage {
                    display: flex;
                }

                .carusel-whyjoin .owl-item {
                    display: flex;
                    flex: 1 0 auto;

                }

                .carusel-whyjoin .owl-item .item {
                    height: 100%
                }
            </style>
            <div class="col-lg-11 offset-lg-1 mt-5">
                <div id="carusel-whyjoin" class="owl-carousel carusel-whyjoin owl-theme mt-4">
                    @foreach ($ourcommitment->cards as $card)
                        <div class="item ">
                            <div class="box text-center p-4">
                                <img src=" {{ $card['attributes']['Icon'] }}" class="icon-ourcommitment" alt=""
                                    srcset="">
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
