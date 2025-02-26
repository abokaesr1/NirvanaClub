<style>
    .download-images {
        display: flex;
        gap: 20px;

        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 20px
    }

    @media (max-width: 768px) {
        .download-images {
            flex-direction: column;
        }
    }

    .download-images img {
        width: 170px;
    }
</style>
<div id="downloadApp" style="background: #64A6D0">
    <div class="imege-fill position-relative "
        style=" height: 100vh; background-image: url({{ $dividedimage->background }}); background-size: contain; background-repeat: no-repeat;background-position:right">
        <div class="container ">
            <div class="mystyle px-5 position-absolute" style="top: 30%; left: 10%; color: #fff;">
                <h1 style="white-space: pre-line;">
                    {{ $dividedimage->en_title }}
                </h1>
                <div class="content-divide-page">
                    {!! $dividedimage->en_description !!}
                </div>
                <div class="download-images">
                    <a href="{{ $dividedimage->ios_link }}">
                        <img src="{{ $dividedimage->ios_image }}" alt="{{ $dividedimage->en_title }}">
                    </a>
                    <a href="{{ $dividedimage->android_link }}">
                        <img src="{{ $dividedimage->android_image }}" alt="{{ $dividedimage->en_title }}">
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
