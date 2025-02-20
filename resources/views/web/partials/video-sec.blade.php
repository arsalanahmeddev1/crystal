<section class="video-sec pb-[170px]">
    <div class="container">
        {{-- <div class="video-wrapper  relative">
            <div class="video-thumbnail-wrapper relative">
                <img src="{{ asset('web/images/video-tumbnail.png') }}" class="h-[500px] md:h-auto rounded-[30px]"
                    alt="">
            </div>
            <div class="absolute flex justify-center items-center flex-col inset-0">
                <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px]  mb-[30px]"><i
                        class="fa-solid fa-play"></i></button>
                <h4 class="hd-medium text-white">Get To Know Us Better</h4>
            </div>
        </div> --}}
        <div class="grid grid-cols-4 gap-[30px]">
            <div class="video-card-wrapper ">
                <a data-fancybox='gallery' href="web/videos/video-1.mp4">
                    <img class="card-img-top" src="{{ asset('web/images/video-tumbnail.png') }}" />
                    <div class="absolute flex justify-center items-center flex-col inset-0">
                        <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                class="fa-solid fa-play"></i></button>
                    </div>
                </a>
            </div>
            <div class="video-card-wrapper">
                <a data-fancybox="gallery" href="{{ asset('web/videos/video-2.mp4') }}">
                    <img class="card-img-top" src="{{ asset('web/images/video-tumbnail.png') }}" />
                    <div class="absolute flex justify-center items-center flex-col inset-0">
                        <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                class="fa-solid fa-play"></i></button>
                    </div>
                </a>
            </div>
            <div class="video-card-wrapper">
                <a data-fancybox='gallery' href="{{ asset('web/videos/video-3.mp4') }}">
                    <img class="card-img-top" src="{{ asset('web/images/video-tumbnail.png') }}" />
                    <div class="absolute flex justify-center items-center flex-col inset-0">
                        <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                class="fa-solid fa-play"></i></button>
                    </div>
                </a>
            </div>
            <div class="video-card-wrapper">
                <a data-fancybox='gallery' href="{{ asset('web/videos/video-4.mp4') }}">
                    <img class="card-img-top" src="{{ asset('web/images/video-tumbnail.png') }}" />
                    <div class="absolute flex justify-center items-center flex-col inset-0">
                        <button class="btn-blur rounded-full w-[90px] h-[90px] text-white  text-[30px] "><i
                                class="fa-solid fa-play"></i></button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
