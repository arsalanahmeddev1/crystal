@extends('web/layouts.app')
@section('title', 'Home Page')

@section('content')
<section class="hero-banner">
    <div class="container">
        <div class="flex flex-wrap justify-center  md:justify-between pb-[40px] lg:pb-[111px] xxl:pb-[243px]">
            <div>
                <h1 class="text-[30px] font-medium text-center lg:text-left text-white uppercase mb-[46px]">Start Your Career in <br> Dental
                    Assisting
                    Today!</h1>
                <div class="flex items-center gap-[10px] justify-center lg:justify-start mb-[10px] lg:mb-0">
                    <a href="" class="btn-primary btn block max-w-[164px] text-center">Enroll Now</a>
                    <a href="" class="btn-primary btn btn-blur !text-white !text-[18px] !font-medium">Contact
                        Us</a>
                </div>
            </div>
            <div>
                <p class="lg:max-w-[425px]  mb-[40px] text-white text-center lg:text-right">
                    Lorem ipsum dolor sit amet, consectetur elit. Ut elit tellus, luctus nec ullamcorper mattis ipsum
                    dolor sit amet, consectetur elit.
                </p>
                <a href="javascript:;"
                    class="btn-transparent btn flex justify-center lg:ml-auto  lg:max-w-[206px] text-[18px]">Class Schedule</a>
            </div>
        </div>
        <div class="flex md:justify-between text-center md:text-start justify-center md:flex-nowrap flex-wrap ">
            <h2 class="text-[30px] md:text-[50px] leading-[30px] lg:leading-[50px] xxl:leading-[90px]  xxl:text-[80px]  text-white italic font-bold max-w-[871px]  uppercase">
                Learn from Industry Experts!
            </h2>
            <div class="flex items-center flex-col relative">
                <div class="flex items-center gap-[20px]">
                    <span class="text-white text-[50px]">10k+</span>
                    <div class="h-[35px] w-[2px] bg-white opacity-[30%] mt-[-18px]"></div>
                    <p class="max-w-[74px] mt-[-18px] leading-[19px] text-white">satisfied customer</p>
                </div>
                <ul class="satis-profiles-list flex items-center justify-center">
                    <li class="absolute top-[80px] right-[120px] w-full max-w-[50px] z-[1]"><img
                            src="{{ asset('web/images/satis-profile-1.png') }}" alt=""></li>
                    <li class="absolute top-[80px] right-[78px] w-full max-w-[50px] z-[2]"><img
                            src="{{ asset('web/images/satis-profile-2.png') }}" alt=""></li>
                    <li class="absolute top-[80px] right-[38px] w-full max-w-[50px] z-[3]"><img
                            src="{{ asset('web/images/satis-profile-3.png') }}" alt=""></li>
                    <li class="absolute top-[80px] right-[-2px] w-full max-w-[50px] z-[4]"><img
                            src="{{ asset('web/images/satis-profile-4.png') }}" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="marque-sec bg-grey py-[16px]">
    <marquee behavior="scroll" direction="left" scrollamount="10">
        <div class="flex items-center justify-between gap-x-[80px]">
            <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of
                indianapolis</span>
            <img src="{{ asset('web/images/cap.svg') }}" width="40" height="40" alt="cap" />
            <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of
                indianapolis</span>
            <img src="{{ asset('web/images/cap.svg') }}" width="40" height="40" alt="cap" />
            <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of
                indianapolis</span>
            <img src="{{ asset('web/images/cap.svg') }}" width="40" height="40" alt="cap" />
        </div>
    </marquee>
</section>
@include('web/partials.training')
@include('web/partials.achievement')

<div class="grey-gredient py-[130px]">
    <section class="explore-sec pb-[120px]">
        <div class="container">
            <div class="flex flex-col md:flex-row  text-center lg:text-start  flex-wrap items-center justify-between mb-[80px] gap-y-[20px]">
                <div>
                    <span class="hd-sm">our programs</span>
                    <h2 class="hd-medium">Explore Our Programs</h2>
                </div>
                <div>
                    <p class="max-w-[379px]">
                        Lorem ipsum dolor sit amet, consectetur elit. Ut elit tellus, luctus nec ullamcorper.
                    </p>
                </div>
                <div>
                    <a href="" class="primary-btn btn bg-grey">Explore All</a>
                </div>
            </div>
            <div class="border border-grey mb-[80px]"></div>
            <div class="explore-card-container  ">
                <div class="explore-card-wrapper card-light  ">
                    <div class="training-list-icon mb-[40px]">
                        <img src="{{ asset('web/images/training-icon-1.png') }}" alt="">
                    </div>
                    <h4 class="hd-sm mb-[30px]">Dental Assisting</h4>
                    <p class="mb-[50px]">
                        Lorem ipsum dolor sit amet scing elit. Ut elit tellus, luctus nec ullamcorper matt pulvinar
                        dapibus.
                    </p>
                    <a href="" class="uppercase font-semibold">read more <span class="ml-[10px] arrow-right"><i
                                class="fa-solid fa-angle-right"></i></span></a>
                </div>
                <div class="explore-card-wrapper card-light">
                    <div class="training-list-icon mb-[40px]">
                        <img src="{{ asset('web/images/training-icon-1.png') }}" alt="">
                    </div>
                    <h4 class="hd-sm mb-[30px]">Dental Assisting</h4>
                    <p class="mb-[50px]">
                        Lorem ipsum dolor sit amet scing elit. Ut elit tellus, luctus nec ullamcorper matt pulvinar
                        dapibus.
                    </p>
                    <a href="" class="uppercase font-semibold">read more <span class="ml-[10px] arrow-right"><i
                                class="fa-solid fa-angle-right"></i></span></a>
                </div>
                <div class="explore-card-wrapper card-light">
                    <div class="training-list-icon mb-[40px]">
                        <img src="{{ asset('web/images/training-icon-1.png') }}" alt="">
                    </div>
                    <h4 class="hd-sm mb-[30px]">Dental Assisting</h4>
                    <p class="mb-[50px]">
                        Lorem ipsum dolor sit amet scing elit. Ut elit tellus, luctus nec ullamcorper matt pulvinar
                        dapibus.
                    </p>
                    <a href="" class="uppercase font-semibold">read more <span
                            class="ml-[10px] arrow-right"><i class="fa-solid fa-angle-right"></i></span></a>
                </div>
                <div class="explore-card-wrapper card-light">
                    <div class="training-list-icon mb-[40px]">
                        <img src="{{ asset('web/images/training-icon-1.png') }}" alt="">
                    </div>
                    <h4 class="hd-sm mb-[30px]">Dental Assisting</h4>
                    <p class="mb-[50px]">
                        Lorem ipsum dolor sit amet scing elit. Ut elit tellus, luctus nec ullamcorper matt pulvinar
                        dapibus.
                    </p>
                    <a href="" class="uppercase font-semibold">read more <span
                            class="ml-[10px] arrow-right"><i class="fa-solid fa-angle-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    @include('web/partials.video-sec')

    <section class="positive-review-sec ">
        <div class="container container-custom">
            <div class="grid grid-cols-1 xxl:grid-cols-[auto_auto_auto]   justify-between gap-[20px]">
                <div class="flex flex-col md:flex-row gap-[40px] order-2 xl:order-1">
                    <div>
                        <div class="positive-review-card card-light max-h-[409px] mb-[40px]">
                            <img src="{{ asset('web/images/quote.svg') }}" class="mb-[50px]" alt="quote">
                            <p class="text-20 mb-[40px] max-w-[325px]">
                                Lorem ipsum dolor sit amet scing elit. Ut luctus nec matt pulvinar dapibus elit tellus,
                                luctus
                                nec matt pulvinar dapibus.
                            </p>
                            <div class="flex items-center gap-[24px]">
                                <div>
                                    <img src="{{ asset('web/images/review-profile-1.png') }} "
                                        class="w-[70px] h-[70px] " alt="">
                                </div>
                                <div>
                                    <span class="hd-sm mb-[14px]">john doe</span>
                                    <p class="">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="positive-review-card card-light max-h-[493px]">
                            <img src="{{ asset('web/images/quote.svg') }}" class="mb-[50px]" alt="quote">
                            <p class="text-20 mb-[40px] max-w-[325px]">
                                Lorem ipsum dolor sit amet scing elit. Ut luctus nec matt pulvinar dapibus elit tellus,
                                luctus nec matt pulvinar dapibus. Lorem ipsum dolor sit amet scing elit. Ut luctus nec
                                matt pulvinar dapibus elit tellus, luctus nec matt.
                            </p>
                            <div class="flex items-center gap-[24px]">
                                <div>
                                    <img src="{{ asset('web/images/review-profile-1.png') }} "
                                        class="w-[70px] h-[70px] " alt="">
                                </div>
                                <div>
                                    <span class="hd-sm mb-[14px]">john doe</span>
                                    <p class="">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="positive-review-card card-light max-h-[493px] mb-[40px]">
                            <img src="{{ asset('web/images/quote.svg') }}" class="mb-[50px]" alt="quote">
                            <p class="text-20 mb-[40px] max-w-[325px]">
                                Lorem ipsum dolor sit amet scing elit. Ut luctus nec matt pulvinar dapibus elit tellus,
                                luctus nec matt pulvinar dapibus. Lorem ipsum dolor sit amet scing elit. Ut luctus nec
                                matt pulvinar dapibus elit tellus, luctus nec matt.
                            </p>
                            <div class="flex items-center gap-[24px]">
                                <div>
                                    <img src="{{ asset('web/images/review-profile-1.png') }} "
                                        class="w-[70px] h-[70px] " alt="">
                                </div>
                                <div>
                                    <span class="hd-sm mb-[14px]">john doe</span>
                                    <p class="">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>
                        <div class="positive-review-card card-light max-h-[409px]">
                            <img src="{{ asset('web/images/quote.svg') }}" class="mb-[50px]" alt="quote">
                            <p class="text-20 mb-[40px] max-w-[325px]">
                                Lorem ipsum dolor sit amet scing elit. Ut luctus nec matt pulvinar dapibus elit tellus,
                                luctus
                                nec matt pulvinar dapibus.
                            </p>
                            <div class="flex items-center gap-[24px]">
                                <div>
                                    <img src="{{ asset('web/images/review-profile-1.png') }} "
                                        class="w-[70px] h-[70px] " alt="">
                                </div>
                                <div>
                                    <span class="hd-sm mb-[14px]">john doe</span>
                                    <p class="">Lorem ipsum</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="order-1 xl:order-2">
                    <div class="flex-col  text-center lg:text-start">
                        <h3 class="hd-sm mb-[30px]">testimonials</h3>
                        <h4 class="hd-medium mb-[30px] max-w-[469px]">Positive Review From Our students</h4>
                        <p class="max-w-[407px] mb-[40px]">
                            Lorem ipsum dolor sit amet, consectetur elit. Ut elit tellus, luctus nec ullamcorper mattis
                            ipsum dolor sit amet, consectetur elit.
                        </p>
                        <div class="flex justify-center lg:justify-start mb-[40px]">
                            <a href="" class="primary-btn btn bg-grey capitalize">explore all</a>
                        </div>
                    </div>
                    <img src="{{ asset('web/images/positive-review-img.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
@include('web.partials.blogs')
@endsection