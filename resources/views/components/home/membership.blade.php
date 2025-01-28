<div class="hide-div p-5" style="background-color:#EEE ;">
    <div class="container">
        <h1 class="mb-2" style="color: #183161d1;">Why join the club</h1>
        <div class="row">
            <div class="col-lg-12 offset-lg-1 mt-5">
                <div class="row">
                    @foreach ($membership as $item)
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="data p-3 rounded-3" style="background-color: white; color: #183161d1;">
                            <div class="contant" style="color: #183161d1;">
                                <h5 style="color: #183161d1;" >{{ $item->en_title }}</h5>
                                <h2>{{ $item->price }}</h2>
                                <p><small>{!! $item->en_subtitle !!}</small></p>
                                <button class=" rounded-3 w-100 text-center mb-3"
                                    style="color: #183161d1; border: 1px solid #183161d1;">
                                    Join Now</button>
                                    <ul class="list-group">
                                        @foreach ($item->pricing as $list)
                                        <li class="list-unstyled pb-3">
                                            <i class="fa-solid fa-solid fa-check me-1" style="font-size:12px"></i>
                                        {{ $list['attributes']['en_name'] }}
                                        </li>
                                        @endforeach
                                    </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
