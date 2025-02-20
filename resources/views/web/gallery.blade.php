@extends('web/layouts.app')
@section('title', 'Dental Assistant')

@section('content')
<section class="dental-assistant-banner inner-banner mini-banner">
    <div class="container">
        <h1 class="">Gallery</h1>
    </div>
</section>

<section class="training-sec program-outline-sec py-[80px] lg:py-[120px]">
    <div class="container">
        <div class="grid grid-cols-3 gap-x-7 gap-y-5 xl:gap-y-10">
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/gallery/gallery-img-01.png') }}" alt="">
            </div>
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/gallery/gallery-img-02.png') }}" alt="">
            </div>
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/gallery/gallery-img-03.png') }}" alt="">
            </div>
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/gallery/gallery-img-04.png') }}" alt="">
            </div>
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/gallery/gallery-img-05.png') }}" alt="">
            </div>
            <div class="col-span-3 sm:col-span-2 xl:col-span-1">
                <img src="{{ asset('web/images/gallery/gallery-img-06.png') }}" alt="">
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
    </div>
</section>
@endsection