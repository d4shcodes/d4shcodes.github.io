<?php

$checkIcon = '<svg class="flex-shrink-0 w-5 h-5 text-green-500" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
            </svg>';

$pricing_arr = [['Standard', '29', ''], ['Professional', '49', 'shadow-xl'], ['Exclusive', '79', '']];

$plans_arr = ['1 Domain License', 'Full Celebration Library', '120+ Coded Blocks', 'Design Files Included', 'Premium Support'];

?>

<section id="pricing" class="py-10 bg-green-50 sm:py-16 lg:py-24">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto text-center">
            <h1 class="text-4xl sm:text-6xl font-bold text-gray-800 dark:text-neutral-200">
                Pricing & Plans
            </h1>
            <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
                ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
        </div>

        <div class="grid max-w-md grid-cols-1 gap-6 mx-auto mt-8 text-center lg:max-w-full lg:mt-16 lg:grid-cols-3">

            @foreach ($pricing_arr as $details)
                <div class="overflow-hidden bg-white border-2 border-gray-100 rounded-md {{ $details[2] }}">
                    <div class="p-8 xl:px-12">
                        <h3 class="text-base font-semibold text-primary_color uppercase">{{ $details[0] }}</h3>
                        <p class="text-5xl font-bold text-black mt-7">${{ $details[1] }}</p>
                        <p class="mt-3 text-base text-gray-600">One-time payment</p>

                        <ul class="inline-flex flex-col items-start space-y-5 text-left mt-9">

                            @foreach ($plans_arr as $plan_details)
                                <li class="inline-flex items-center space-x-2">
                                    {!! $checkIcon !!}
                                    <span class="text-base font-medium text-gray-900">{{ $plan_details }} </span>
                                </li>
                            @endforeach

                        </ul>

                        <a href="#pricing" title=""
                            class="inline-flex items-center justify-center px-10 py-4 mt-10 text-base font-semibold text-white transition-all duration-200 bg-green-500 rounded-md hover:bg-green-700 focus:bg-green-700"
                            role="button"> Get full access </a>
                        <p class="mt-4 text-sm text-gray-500">14 Days Moneyback Guarantee</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
