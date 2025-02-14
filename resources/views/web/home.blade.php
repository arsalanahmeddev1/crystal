@extends('web/layouts.app')
@section('title', 'Home Page')

@section('content')
    <section class="hero-banner">
        <div class="container">
            <div class="flex justify-between pb-[243px]">
                <div>
                    <h1 class="text-[30px] font-medium text-white uppercase mb-[46px]">Start Your Career in <br> Dental
                        Assisting
                        Today!</h1>
                    <div class="flex items-center gap-[10px]">
                        <a href="" class="btn-primary btn block max-w-[164px] text-center">Enroll Now</a>
                        <a href="" class="btn-primary btn btn-blur !text-white !text-[18px] !font-medium">Contact
                            Us</a>
                    </div>
                </div>
                <div>
                    <p class="max-w-[425px] text-right mb-[40px]">
                        Lorem ipsum dolor sit amet, consectetur elit. Ut elit tellus, luctus nec ullamcorper mattis ipsum
                        dolor sit amet, consectetur elit.
                    </p>
                    <a href="javascript:;"
                        class="btn-transparent btn flex justify-center ml-auto max-w-[206px] text-[18px]">Class Schedule</a>
                </div>
            </div>
            <div class="flex justify-between">
                <h2 class="text-[80px] text-white italic font-bold max-w-[871px] leading-[90px] uppercase">
                    Learn from Industry Experts!
                </h2>
                <div class="flex items-center flex-col relative">
                    <div class="flex items-center gap-[20px]">
                        <span class="text-white text-[50px]">10k+</span>
                        <div class="h-[35px] w-[2px] bg-white opacity-[30%] mt-[-18px]"></div>
                        <p class="max-w-[74px] mt-[-18px] leading-[19px]">satisfied customer</p>
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
        <marquee behavior="scroll" direction="left" scrollamount="5">
            <div class="flex items-center justify-between">    
                <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of indianapolis</span>
                <img src="{{ asset('web/images/cap.svg')}}" width="40" height="40" alt="cap" />
                <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of indianapolis</span>
                <img src="{{ asset('web/images/cap.svg')}}" width="40" height="40" alt="cap" />
                <span class="text-[40px] italic uppercase font-bold text-lightBlack">dental assisting school of indianapolis</span>
                <img src="{{ asset('web/images/cap.svg')}}" width="40" height="40" alt="cap" />
            </div>
          </marquee>
    </section>
@endsection
