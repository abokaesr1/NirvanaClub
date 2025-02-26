<style>
    .filterDiv {
        margin-bottom: 20px;
        display: none;
        margin-top: 20px
    }

    .show {
        display: block;
    }

    .container {
        margin-top: 20px;
        overflow: hidden;
    }

    /* Style the buttons */
    .btnFilter {
        border: none;
        outline: none;
        padding: 12px 16px;
        background-color: #f1f1f1 !importantس;
        cursor: pointer;
        color: #888 !important
    }

    .btnFilter:hover {
        background-color: #ddd !important;
    }

    .btnFilter.activeFilter {
        background-color: #666 !important;
        color: white !important;
        border-radius: 5px;
    }
</style>
<div id="ourboats" class="ourboats py-5" style="background-color: #EEE;">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 offset-lg-1">
                <!--filters : class="owl-carousel project-terms owl-theme"-->
                <div id="myBtnContainer">
                    <button class="btnFilter activeFilter" onclick="filterSelection('all')"> Show all</button>
                    @foreach ($discover as $key => $item)
                        @foreach (collect($item->tabs)->unique('attributes.category') as $tab)
                            @if ($key + 1 == 2)
                                <button class="btnFilter"
                                    onclick="filterSelection('{{ $tab['attributes']['category'][0] }}')">
                                    {{ $tab['attributes']['category'][0] }}
                                </button>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                <div class="row">
                    @foreach ($discover as $key => $item)
                        @foreach ($item->tabs as $tab)
                            @if ($key + 1 == 2)
                                <div class="filterDiv {{ $tab['attributes']['category'][0] }} col-12 col-md-6 ">
                                    <div class="d-flex project  bg-white rounded-1"
                                        style="border-radius: 20px !important;">
                                        <div class="img-container rounded-1" style="flex: 1;">
                                            <img src="{{ asset($tab['attributes']['slider_image']) }}" alt="Image 1"
                                                class="img-fluid rounded-1" style="height: 250px;object-fit:cover">
                                        </div>
                                        <div class=" text-container p-3" style="flex: 1;">
                                            <h4 style="color: #64a6d0; font-weight: 700;">
                                                {{ $tab['attributes']['en_title'] }}
                                            </h4>
                                            <div class="content">
                                                {!! $tab['attributes']['en_description'] !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    filterSelection("all")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("filterDiv");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add activeFilter class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btnFilter");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("activeFilter");
            current[0].className = current[0].className.replace(" activeFilter", "");
            this.className += " activeFilter";
        });
    }
</script>
