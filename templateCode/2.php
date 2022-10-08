<div class="d-flex justify-content-center align-items-center">
    <div class="bg-warning" style="width: 15%;height: 1px;">&nbsp;</div>
    <div class="text-warning mx-3">X X X</div>
    <div class="bg-warning" style="width: 15%;height: 1px;">&nbsp;</div>
</div>

<div class="row my-5 align-items-center">
    <div class="col-lg-6">
        <h1 class="mb-3">{{eventtitle}}</h1>
        <p class="lead mb-5 pr-xl-2">{{eventshort}}</p>

        <div class="row">
            <div class="col-md-6 col-lg-12 col-xl-6 mt-4 animated slideInUp" style="animation-delay: 300ms;">
                <div class="media">
                    <div class="font-icon-wrapper font-icon-lg align-self-start shadow-sm">
                        <i class="pe-7s-date"></i>
                    </div>
                    <div class="media-body">
                        <h4>তারিখ ও সময়ঃ</h4>
                        <p class="mb-0">{{eventstart}} &nbsp;{{starttime}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xl-6 mt-4 animated slideInUp" style="animation-delay: 600ms;">
                <div class="media">
                    <div class="font-icon-wrapper font-icon-lg align-self-start shadow-sm">
                        <i class="pe-7s-culture"></i>
                    </div>
                    <div class="media-body">
                        <h4>স্থানঃ</h4>
                        <p class="mb-0">{{eventlocation}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xl-6 mt-4 animated slideInUp" style="animation-delay: 900ms;">
                <div class="media">
                    <div class="font-icon-wrapper font-icon-lg align-self-start shadow-sm">
                        <i class="pe-7s-check"></i>
                    </div>
                    <div class="media-body">
                        <h4>রেজিস্ট্রেশন শুরুঃ</h4>
                        <p class="mb-0">{{regstarttime}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-12 col-xl-6 mt-4 animated slideInUp" style="animation-delay: 1200ms;">
                <div class="media">
                    <div class="font-icon-wrapper font-icon-lg align-self-start shadow-sm">
                        <i class="pe-7s-shield"></i>
                    </div>
                    <div class="media-body">
                        <h4>রেজিস্ট্রেশন শেষঃ</h4>
                        <p class="mb-0">{{regvaliduntil}}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="text-center my-3">
            <a href="{{regurl}}" class="btn btn-first-theme font-size-lg px-4 animated slideInUp" style="animation-delay: 1500ms;">নিবন্ধন করুন</a>
        </div> -->
    </div>

    <div class="col-lg-6 align-self-end animated fadeIn" style="animation-delay: 0ms;">
        <img src="{{imageurl}}" class="img-fluid rounded w-100" alt="">
    </div>
</div>