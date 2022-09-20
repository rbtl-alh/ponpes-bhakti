<section class="container-fluid footer py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row ">
                    <div class="col-5">
                        <img class="ml-4" src="{{ asset('assets/img/logo-bwh.png') }}" alt="" width="175">
                    </div>
                    <div class="col-4">
                        <div class="row d-flex">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/icons/ig.png') }}" alt="" width="40">
                            </div>
                            <div class="col-sm-4">
                                <p class="pt-2">@popesbhaktibapakemak</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/icons/fb.png') }}" alt="" width="40">
                            </div>
                            <div class="col-sm-4">
                                <p class="pt-2">@popesbhaktibapakemak</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img class="p-1" src="{{ asset('assets/img/icons/gmail.png') }}" alt="" width="40">
                            </div>
                            <div class="col-sm-4">
                                <p class="pt-2">@popesbhaktibapakemak</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/icons/wa.png') }}" alt="" width="40">
                            </div>
                            <div class="col-sm-4">
                                <p class="pt-2">@popesbhaktibapakemak</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-2 mt-4 moto">
                    <div class="row mb-1">
                        <div class="col pl-3 mt-2">
                            <h5>Berakhlak, Agamis, Cerdas dan Terampil</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 pl-3">
                            <hr class="f-line"> 
                        </div>
                    </div>
                </div>
            </div>            
            <div class="col-md-6 pl-4 maps">                
                {{-- <div id="map" style="width:100%;height:400px;"></div> --}}
                <div class="mapouter ml-4">
                    <div class="gmap_canvas">
                        <iframe width="542" 
                            height="301" 
                            id="gmap_canvas" 
                            src="https://maps.google.com/maps?q=ponpes%20bhakti%20bapak%20emak&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                        {{-- <a href="https://123movies-to.org">123movies</a><br> --}}
                        <style>
                            .mapouter{
                                position:relative;
                                text-align:right;
                                height:265px;
                                width:472px;
                            }
                        </style>
                        {{-- <a href="https://www.embedgooglemap.net"></a> --}}
                        <style>
                            .gmap_canvas {
                                overflow:hidden;
                                background:none!important;
                                height:265px;
                                width:472px;
                                border: 1px solid #D6CDA4;
                                border-radius: 12px;
                                margin-top: 7px;
                                }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.031 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
    }

    window.initMap = initMap;
</script>