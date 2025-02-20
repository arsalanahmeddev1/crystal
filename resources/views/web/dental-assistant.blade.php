@extends('web/layouts.app')
@section('title', 'Dental Assistant')

@section('content')
<section class="dental-assistant-banner inner-banner mini-banner">
    <div class="container">
        <h1 class="">dental assistant</h1>
    </div>
</section>

<section class="training-sec program-outline-sec py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-full pr-7 order-2 xl:col-span-6 xl:order-1">
                <span class="hd-sm flex justify-center lg:justify-start">Dental Assistant Program Outline</span>
                <h4 class="lg:pr-48">Become a Dental Assistant!
                </h4>
                <p class="text-lightBlack mb-0 font-medium">
                    Our dental assistant program has been developed for 12 consecutive weeks.  Our program is jammed packed with information, didactic and lab portions, as well as on site observation day. Students are required to wear clinical attire (scrubs). We will provide, gloves, masks, safety goggles and all disposable items and supplies along with instruments and equipment for training.
                </p>
                <p class="text-lightBlack mb-0 font-medium">
                    Students will be required to carry themselves professionally, have long hair pulled back, clean, close toe shoes.
                </p>
                <p class="text-lightBlack mb-0 font-medium">
                    Our program takes place in a modern facility equipped similar to a functional dental office with several dental chairs, laboratory, and cutting-edge equipment such as digital radiology, Pano unit, CAD/CAM system with intraoral scanner and milling unit.
                </p>
            </div>

            <div class=" col-span-full mb-10 order-1 xl:col-span-6 xl:order-2 xl:mb-0">
                <div class="section-img-wrapper w-fit mx-auto">
                    <img src="{{ asset('web/images/dental-assistant-section-img.png') }}" class="traning-center-img" alt="">
                </div>
            </div>
        </div>

        <div class="grid-bottom-text mt-[1rem]">
            <span class="hd-sm italic">
                During your 12-week dental assistant training program you will have the opportunity to complete a minimum of 8 hours of externship in one of our partner locations, so you can apply the skills you have learned in a real life dental office setting.
            </span>
            <p class="text-lightBlack mt-2 mb-0 pr-10 font-medium">
                Enrollment is open until 2 days of the beginning of the next program.  The program runs consecutively for 12 weeks with exception of major holidays (Christmas, New Year, Independence Day Memorial Day, Labor Day, and Easter). If a class is scheduled during these holidays, it will move a week back or to a makeup day if possible.
            </p>
            <p class="text-lightBlack mt-2 mb-0 pr-10 font-medium">
                The cost for the program is $4100.00.  This includes, $100.00 registration fee, Instructional Fees-Tuition $3300.00 and consumable supplies (clinical/office) $700.00. <br>
                A deposit of $350 is required at the time of enrollment to secure your spot in the upcoming class.
            </p>
        </div>

        <div class="program-cards-container pb-24">
            <div class="program-card card-light bg-grey">
                <h4 class="hd-sm">Program Cost</h4>
                <ul>
                    <li>Dental Assisting Program —- $4100.00.</li>
                    <li>Expanded Function Program -$2100.00</li>
                    <li>Coronal polishing & fluoride application – $675.00</li>
                    <li>Nitrous Oxide course – $299.00</li>
                </ul>
            </div>
            <div class="program-card card-light bg-grey">
                <h4 class="hd-sm">Program Cost</h4>
                <ul>
                    <li>Proof of GED, High School Diploma, or higher academic education.</li>
                    <li>Hepatitis B vaccination is strongly recommended but not required.</li>
                    <li>For enrolling in the EFDA Program, Dental Assistant training certification is required or must be working in a dental office at this time.</li>
                    <li>Contact: <a href="mailto:dentalassistingofindy@gmail.com" class="email underline">dentalassistingofindy@gmail.com</a></li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-x-10 place-items-center">
            <div class="col-span-2 order-1 xl:col-span-1">
                <ul class="general-info flex flex-col justify-between space-y-5 mt-10 xl:mt-0 md:flex-row 2xl:justify-between">
                    <li>
                        <div class="info-icon mb-4"><img src="{{ asset('web/images/card-icons/payment-icon.png') }}" alt=""></div>
                        <div>
                            <span class="hd-sm">Payment Options</span>
                            <ul class="list-disc pl-8">
                                <li class="text-lightBlack font-medium font-inter">Cash</li>
                                <li class="text-lightBlack font-medium font-inter">Check</li>
                                <li class="text-lightBlack font-medium font-inter">Credit Card (Visa, Mastercard, Discover, American Express)</li>
                                <li class="text-lightBlack font-medium font-inter">Consumer Financing (third party)</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="info-icon mb-4"><img src="{{ asset('web/images/card-icons/mail-icon.png') }}" alt=""></div>
                        <div>
                            <span class="hd-sm">We will provide</span>
                            <ul class="list-disc pl-8">
                                <li class="text-lightBlack font-medium font-inter">Textbook Rental</li>
                                <li class="text-lightBlack font-medium font-inter">Supplies</li>
                                <li class="text-lightBlack font-medium font-inter">Equipment</li>
                                <li class="text-lightBlack font-medium font-inter">Instruments</li>
                                <li class="text-lightBlack font-medium font-inter">Dental Materials</li>
                                <li class="text-lightBlack font-medium font-inter">Certification of Completion</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-span-2 xl:col-span-1">
                <div class="section-img-wrap">
                    <img src="{{ asset('web/images/dental-assistant-feedback-img.png')}}" alt="">
                </div>
            </div>
        </div>

        <div class="dental-info-cards">
            <div class="card-light dental-info-card bg-grey">
                <h5 class="hd-sm mb-3">Class Schedule</h5>
                <p class="mb-10">
                    Lorem ipsum dolor sit amet scing elit. Ut elit tellus, luctus nec ullamcorper matt pulvinar
                    dapibus.
                </p>
                <a href="" class="uppercase font-bold text-[16px] rounded-anchor block w-fit">click here</a>
            </div>
            <div class="card-light dental-info-card bg-grey">
                <h5 class="hd-sm mb-3">Class Schedule</h5>
                <p class="mb-10">
                    Lorem ipsum dolor sit amet scing elit. Ut elit tellus, luctus nec ullamcorper matt pulvinar
                    dapibus.
                </p>
                <a href="" class="uppercase font-bold text-[16px] rounded-anchor block w-fit">click here</a>
            </div>
            <div class="card-light dental-info-card bg-grey">
                <h5 class="hd-sm mb-3">Class Schedule</h5>
                <p class="mb-10">
                    Lorem ipsum dolor sit amet scing elit. Ut elit tellus, luctus nec ullamcorper matt pulvinar
                    dapibus.
                </p>
                <a href="" class="uppercase font-bold text-[16px] rounded-anchor block w-fit">click here</a>
            </div>
        </div>
    </div>
</section>

<section class="timetable grey-gredient pt-[50px] pb-[150px]">
    <div class="container">
        <div class="grid grid-cols-12 gap-[20px]">
            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>

            <div class="timetable-card">
                <div class="card-light space-y-[30px]">
                    <h4 class="hd-sm">WEEK 1</h4>
                    <p>
                        Dental Assisting Principles
                    </p>
                    <p class="uppercase">
                        Clock Hours: 7 Lecture, 1 Lab
                    </p>

                </div>
            </div>
        </div>
</section>
@endsection