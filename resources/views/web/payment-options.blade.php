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
            <div class="col-span-full order-2 xl:col-span-6 xl:order-1">
                <h4 class="lg:pr-40">dental assisting program TUITION PAYMENT OPTIONS
                </h4>
                <p class="text-lightBlack mb-0 font-medium">
                    Dental Assisting School of Indianapolis offers affordable Dental Assistant training and can even split your fees into affordable payments! Select the payment plan that is best for you.
                </p>
                <ul class="list-disc ml-5">
                    <li>
                        <p class="text-lightBlack mb-0 font-medium">
                            Full Payment of $4000.00
                        </p>
                    </li>
                    <li>
                        <p class="text-lightBlack mb-0 font-medium">
                            Paid one week prior to class start date.
                        </p>
                    </li>
                </ul>

                <h5 class="sub-heading my-5">
                    OPTION 2 -12 MONTHLY PAYMENTS WITH 0% INTEREST & NO CREDIT CHECK REQUIRED!!!
                </h5>
                <ul class="list-disc ml-5">
                    <li>
                        <p class="text-lightBlack mb-0 font-medium">
                            12 monthly payments with 0% interest & no credit check,  with a deposit of $250.00 at time of enrollment to secure your seat in the program. A payment of  $350.00 is due TWO weeks prior to class start date. 
                        </p>
                    </li>
                    <li>
                        <p class="text-lightBlack mb-0 font-medium">
                            Your monthly payments will be $284.00 and automatic withdrawal on the 19th of every month.
                        </p>
                    </li>
                </ul>

                <h5 class="sub-heading my-5">
                    OPTION 3 – Customizable to your needs payment plan
                </h5>
                <p class="text-lightBlack mb-0 font-medium">
                    Options 1 & 2 not for you? Contact us and we can discuss alternative options
                </p>

            </div>

            <div class=" col-span-full mb-10 order-1 xl:col-span-6 xl:order-2 xl:mb-0">
                <div class="section-img-wrapper w-fit mx-auto">
                    <img src="{{ asset('web/images/dental-assistant-section-img.png') }}" class="traning-center-img" alt="">
                </div>
            </div>
        </div>



        <div class="program-cards-container">
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

        <div class="dental-info-cards">
            <div class="card-light payment-card bg-grey">
                <h5 class="hd-sm mb-3">EFDA Program tuition payment options</h5>
                <ul class="list-disc ml-5">
                    <li>
                        <p>
                            Full Payment of $2100.00
                        </p>
                    </li>
                    <li>
                        <p>
                            Paid one week prior to class start date.
                        </p>
                    </li>
                </ul>
            </div>

            <div class="card-light payment-card bg-grey">
                <h5 class="hd-sm mb-3">
                    OPTION 2 – 3 MONTHLY PAYMENTS
                    WITH 0% INTEREST & NO CREDIT
                    CHECK REQUIRED!!!</h5>
                <ul class="list-disc ml-5">
                    <li>
                        <p>
                            3 monthly payments with 0% interest & no credit, with a deposit of $250.00 at time of enrollment to secure your seat in the program. A payment of $350.00 is due TWO weeks prior to class start date.
                        </p>
                    </li>
                    <li>
                        <p>
                            Automatic withdrawal $500.00 on the 19th of every month.  
                        </p>
                    </li>
                </ul>
            </div>

            <div class="card-light payment-card bg-grey">
                <h5 class="hd-sm mb-3">OPTION 3 – Customizable to your
                    needs payment plan</h5>
                <p>
                    Options 1 & 2 not for you? Contact us and we can discuss alternative options.
                </p>
                <p>
                    Still not sure or need special financial assistance? Contact us and we can discuss alternative options. </p>
            </div>
        </div>
    </div>
</section>


@endsection