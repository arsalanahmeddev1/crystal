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
            <div class="grid grid-cols-12 place-items-center">
                <div class="col-span-full pr-7 order-2 xl:col-span-6 xl:order-1">
                    <span class="hd-sm flex justify-center lg:justify-start">Dental Assistant Program Outline</span>
                    <h4 class="!text-[28px]">Become a Dental Assistant!
                    </h4>
                    <h5 class="text-[18px] font-bold">Hands-On Training for a Rewarding Career in Dentistry</h5>
                    <p class="text-lightBlack mb-0">
                        Are you ready to start a career in dental assisting? Our 12-week Dental Assistant Program is
                        designed to provide you with the knowledge, skills, and real-world experience you need to
                        confidently step into the dental field.
                    </p>
                    <p class="text-lightBlack">
                        This program is fast-paced, hands-on, and career-focused, ensuring that by the time you graduate,
                        you’ll be job-ready and fully equipped with the necessary skills to work in a professional dental
                        setting.
                    </p>
                </div>


                <div class=" col-span-full mb-10 order-1 xl:col-span-6 xl:order-2 xl:mb-0">
                    <div class="section-img-wrapper w-fit mx-auto mb-[30px]">
                        <img src="{{ asset('web/images/dental-assistant-section-img.png') }}" class="traning-center-img"
                            alt="">
                    </div>
                </div>

            </div>
            <div class="max-w-[650px]">
                <h2 class="font-bold text-[30px] font-inter ">What to Expect in Our 12-Week Program
                </h2>
                <p class="text-[16px] mb-[10px]">
                    Our curriculum is designed to combine classroom learning, hands-on lab training, and real-world
                    experience through our on-site externship program.
                </p>
                <ul class="program-list">
                    <li class=""><b>Didactic Lab Training</b><span> – Learn both the theory and hands-on application
                            of dental
                            assisting.</span></li>
                    <li class=""><b>On-Site Observation</b><span> – Spend a day in a real dental office and experience
                            the
                            workflow.</span></li>
                    <li class=""><b>Professional Environment</b><span> – Train in a modern facility equipped with the
                            latest dental
                            technology, including:</span>
                        <ul class="program-list">
                            <li class=""><b>Digital Radiology Pano Units</b></li>
                            <li class=""><b>CAD/CAM System with Intraoral Scanner
                                    Milling Unit</b></li>
                            <li class=""><b>Fully Functional Dental Chairs Lab
                                    Equipment</b></li>
                        </ul>
                    </li>
                </ul>
                <h2 class="font-bold text-[30px] font-inter mb-[10px]">Professionalism & Attire
                </h2>
                <p>
                    Students are required to maintain a <b>professional demeanor</b> throughout the program. This includes:
                </p>
                <ul class="check-list">
                    <li>Wearing <b>clinical attire (scrubs)</b> during training
                    </li>
                    <li>Having <b>long hair pulled back</b> for hygiene and safety
                    </li>
                    <li>
                        Wearing <b>clean, closed-toe shoes</b>
                    </li>
                    <li>Using provided <b>gloves, masks, safety goggles, and all disposable supplies</b></li>
                </ul>
                <h2 class="font-bold text-[30px] font-inter my-[10px]">Externship

                </h2>
                <p>
                    Students are required to maintain a <b>professional demeanor</b> throughout the program. This includes:
                </p>
                <ul class="check-list">
                    <li>Wearing <b>clinical attire (scrubs)</b> during training
                    </li>
                    <li>Having <b>long hair pulled back</b> for hygiene and safety
                    </li>
                    <li>
                        Wearing <b>clean, closed-toe shoes</b>
                    </li>
                    <li>Using provided <b>gloves, masks, safety goggles, and all disposable supplies</b></li>
                </ul>
                <h2 class="font-bold text-[30px] font-inter my-[10px]">Flexible Enrollment

                </h2>
                <p class="text-[16px]">
                    Enrollment remains open until <b>two days before the next program start date</b>. The program runs
                    <b>continuously for 12 weeks</b>, except for major <br> holidays (Christmas, New Year, Independence Day,
                    Memorial Day, Labor Day, Easter). If a class falls on a holiday, it will be rescheduled accordingly.
                </p>
            </div>

            {{-- <div class="grid-bottom-text mt-[1rem]">
                <span class="hd-sm italic">
                    During your 12-week dental assistant training program you will have the opportunity to complete a
                    minimum of 8 hours of externship in one of our partner locations, so you can apply the skills you have
                    learned in a real life dental office setting.
                </span>
                <p class="text-lightBlack mt-2 mb-0 pr-10">
                    Enrollment is open until 2 days of the beginning of the next program.  The program runs consecutively
                    for 12 weeks with exception of major holidays (Christmas, New Year, Independence Day Memorial Day, Labor
                    Day, and Easter). If a class is scheduled during these holidays, it will move a week back or to a makeup
                    day if possible.
                </p>
                <p class="text-lightBlack mt-2 mb-0 pr-10">
                    The cost for the program is $4100.00.  This includes, $100.00 registration fee, Instructional
                    Fees-Tuition $3300.00 and consumable supplies (clinical/office) $700.00. <br>
                    A deposit of $350 is required at the time of enrollment to secure your spot in the upcoming class.
                </p>
            </div> --}}

            <div class="program-cards-container pb-24">
                <div class="program-card card-light bg-grey">
                    <h4 class="hd-sm">Program Cost & Payment Options
                    </h4>
                    <p class="text-lightBlack font-kod">
                        We believe in making education <b>affordable and accessible</b>, <br> which is why we offer
                        <b>flexible payment options</b> to fit your budget.
                    </p>
                    <h5 class="text-[28px] my-[20px] font-bold">Program Tuition Breakdown
                    </h5>
                    <ul class="check-list">
                        <li><span>Dental Assisting Program:</span> $4,100.00
                        </li>
                    </ul>
                    <ul class="program-list">
                        <li>$100.00 <span>Registration Fee</span></li>
                        <li>$3,300.00 <span>Instructional Fees & Tuition</span></li>
                        <li>$700.00 <span>Supplies & Clinical Materials</span></li>
                    </ul>
                    <ul class="check-list mb-[20px]">
                        <li class=""><span>Expanded Function Dental Assistant (EFDA) Program:</span> $2,100.00
                        </li>
                        <li class=""><span>Coronal Polishing & Fluoride Application Course:</span> $675.00</li>
                        <li class=""><span>Nitrous Oxide Course:</span> $299.00</li>
                    </ul>
                    <p class="font-kod"><span class="font-bold">Deposit Required:</span> $350 at the time of enrollment to
                        secure your spot.</p>
                </div>
                <div class="program-card card-light bg-grey">
                    <h4 class="hd-sm">Admissions Requirements</h4>
                    <ul class="check-list mb-[20px]">
                        <li class=""><span>Proof of GED, High School Diploma, or Higher Academic Education</span>
                        </li>
                        <li class=""><span>Hepatitis B Vaccination</span> (Recommended but not required)</li>
                        <li class=""><span>Nitrous Oxide Course:</span> $299.00</li>
                    </ul>
                    <p class="font-kod mb-[20px]">
                        For students enrolling in the <span class="font-bold">EFDA Program</span>, proof of <span
                            class="font-bold">dental assistant certification OR current employment in a dental office</span>
                        is required.
                    </p>
                    <span class="font-bold"> Contact Us for Enrollment: <a href="mailto:dentalassistingofindy@gmail.com"
                            class="text-[#c36] font-normal">dentalassistingofindy@gmail.com</a>
                    </span>

                </div>
            </div>

            @include('web/partials.payment-options-sec')
            @include('web/partials.dental-info')

            
        </div>
    </section>
    @include('web/partials.timetable')
@endsection
