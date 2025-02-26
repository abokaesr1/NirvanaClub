<div id="faq" class="frecuantly pb-5" style="background-color: #EEE;">
    <div class="container">
        <h1 class="col-3 mb-5 " style="color: #183161d1;">Frequently Asked Question</h1>
        <div class="row d-flex g-5">
            @foreach ($faq as $key => $item)
                <div class="col-lg-5 @if ($key % 2 == 0) offset-lg-1 @endif" x-data="{ open: false }">
                    <div class="ddd p-4 rounded-3" style="background-color: white;" x-on:click="open = !open">
                        <div class="ahmad mt-2 mb-1 d-flex justify-content-between align-items-center">
                            <h5 style=" margin-bottom: 0; color: #444;">
                                {{ $item->en_question }}
                            </h5>
                            <i :class="open ? 'fa-solid fa-minus' : 'fa-solid fa-plus'"></i>
                        </div>
                        <div x-show="open" x-transition>
                            {!! $item->en_answer !!}
                        </div>
                    </div>
                </div>
            @endforeach
            <h2>Become a member of the Exclusive Nirvana Boat Club!</h2>
        </div>
    </div>
</div>
