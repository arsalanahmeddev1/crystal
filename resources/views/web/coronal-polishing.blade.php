@extends('web/layouts.app')
@section('title', 'Dental Assistant')

@section('content')
<section class="dental-assistant-banner inner-banner mini-banner">
    <div class="container">
        <h1 class="">Coronal Polishing $ Fluoride Application</h1>
    </div>
</section>

<section class="training-sec program-outline-sec py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-12">
            <div class="col-span-full pr-7 order-2 xl:col-span-6 xl:order-1">
                <h4 class="">Coronal Polishing & Fluoride Application Course
                </h4>
                <p class="text-lightBlack mb-0 font-medium">
                    Our program has been developed for 2 consecutive weeks. Our program is jammed packed with information, didactic and lab portions. Our program is two Fridays a month, from 9:30am-12:30pm.
                </p>
                <p class="text-lightBlack mb-0 font-medium">
                    We require a minimum of 6 students to conduct the <br> program with a maximum of 15 students in each class. Students are required to wear clinicalattire (scrubs), these are your responsibility. We will provide gloves, safety glasses, masks and all <br> disposable items and supplies along with instruments and equipment for training.
                </p>
                <p class="text-lightBlack mb-0 font-medium">
                    Course cost $675.00 <br> ($337.50 at time of enrollment-- non refundable) <br> ($337.50 due 2 (two) weeks prior to course start date)
                </p>
                <a href="" class="btn-primary btn capitalize bg-grey block w-fit mt-20">Class Schedule-CLICK HERE</a>
            </div>

            <div class=" col-span-full mb-10 order-1 xl:col-span-6 xl:order-2 xl:mb-0">
                <div class="section-img-wrapper w-fit mx-auto">
                    <img src="{{ asset('web/images/coronal-polishing-section-img.png') }}" class="traning-center-img" alt="">
                </div>
            </div>
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

        <div class="appointment-form-wrapper">
            <h4 class="w-fit max-w-[50rem] mx-auto">
                Coronal Polishing & Fluoride Application Form
            </h4>
            <form id="appointment-form lightBlack font-semibold">
                <div class="grid grid-cols-2 gap-4">
                    <div class="col-span-2 sm:col-span-1">
                        <input type="text" id="full-name" placeholder="Your Full Name">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <input type="text" id="address" placeholder="Address">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <input type="text" id="city" placeholder="City">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <input type="text" id="zip" placeholder="Zip">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <input type="text" id="birthday" placeholder="Birthday">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <input type="email" id="email" placeholder="Email">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <input type="tel" id="phone-no" placeholder="Phone No">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <select id="program-days">
                            <option value="">Select Program Days</option>
                            <!-- Add options here -->
                        </select>
                    </div>
                    <div class="col-span-2">
                        <select id="education-level">
                            <option value="">Select Education Level</option>
                            <!-- Add options here -->
                        </select>
                    </div>
                </div>
                <a href="" class="btn-primary btn capitalize bg-grey block w-fit mt-10 mx-auto">Requests info</a>
            </form>
        </div>
    </div>
</section>
@endsection