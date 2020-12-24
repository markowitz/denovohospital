@extends('layout.app')

@section('content')

<main class="relative">
    <div class="md:h-full h-full mt-16 md:mt-10 lg:mt-10">
      <div class="py-32">
          <div class="w-full h-full">
            <h1 class="text-xl w-screen -mt-20 md:ml-0 tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl md:py-2 md:block lg:block sm:hidden hidden">
              <span class="block text-white xl:inline float-right px-48">SERVICES</span>
            </h1>
            <p class="w-screen text-white md:py-10 lg:mt-4 md:block lg:block hidden">
                <span class="block text-white text-xl xl:inline float-right px-48">Home - Services</span>
            </p>

            <h1 class="text-xl w-screen -mt-28 md:ml-0 tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl md:py-2 md:hidden lg:hidden block">
                <span class="block text-white xl:inline text-center">SERVICES</span>
              </h1>
              <p class="w-screen text-white md:py-10 lg:mt-4 md:hidden lg:hidden block py-6">
                  <span class="block text-white text-xl xl:inline text-center">Home - Services</span>
              </p>
          </div>
      </div>
      <div class="-mt-24 bg-gray-800 bg-opacity-50 absolute w-full h-24 px-16 text-white md:block lg:block sm:block xl:block hidden">
        <div class="py-3 flex mx-32">
          <div class="text-5xl">
              <i class="fa fa-phone-square" aria-hidden="true"></i>
          </div>
          <div class="px-4">Get Emergency Services 24/7 <br>
            +234 913-1884-828
          </div>
        </div>
      </div>
    </div>
  </main>
  <div class="bg-gray-800 bg-opacity-50 w-full h-16 px-8 text-white md:hidden lg:hidden block">
    <div class="py-3 flex">
      <div class="text-3xl">
          <i class="fa fa-phone-square" aria-hidden="true"></i>
      </div>
      <div class="sm:px-4 px-2 text-sm">Get Emergency Services 24/7 <br>
        +234 913-1884-828
      </div>
    </div>
  </div>
  <section class="bg-white py-10">
  <div class="h-40 bg-no-repeat bg-center-top bg-contain -mt-10" style="background-image:url(/images/about-section-bg.png);background-position: calc(100% + 10px) calc(100% - 10px);">
  </div>
  <h1 class="md:text-4xl text-2xl font-extrabold text-center">SERVICES WE OFFER</h1>
  <p class="text-center md:text-xl text-base px-2 py-4 md:px-48">
      We provide excellent services for your ultimate good health. Here some of the services included for better understanding that we are always at your side.
  </p>

  <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 md:px-48 sm:px-24 xs:px-20 px-14 py-12">
    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="flex-1 flex flex-col p-14">
        e-Health
      </div>
    </li>

    <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-14">
          Surgery
        </div>
      </li>

      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-14">
          Pediatric Services
        </div>
      </li>

      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
        <div class="flex-1 flex flex-col p-14">
            Fertility & Assisted Reproduction
        </div>
      </li>

      <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-14">
            Computerized Laboratory
          </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-14">
            Advance Diagnosis
          </div>
        </li>

        <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
            <div class="flex-1 flex flex-col p-14">
                General & Specialized Consultation
            </div>
          </li>

          <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
              <div class="flex-1 flex flex-col p-14">
                Maternity
              </div>
            </li>

            <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
              <div class="flex-1 flex flex-col p-14">
                In/Out Patient Services
              </div>
            </li>
  </ul>
</section>
<section class="pb-16 bg-green-100 bg-opacity-100">
    <div class="text-gray-500 md:text-justify px-2 md:px-10 md:py-32 pt-6">
        <div class="bg-cover bg-center bg-no-repeat h-full md:h-1/2 md:mx-20 align-top overlay-custom relative md:w-5/6 w-full rounded-3xl" style="background-image:url(/images/IMG-20201117-WA0012.jpg);">
            <div class="md:flex relative text-white">
                <div class="md:px-10 px-6 md:py-32 py-2 w-full md:text-left text-center">
                    <h1 class="md:text-3xl text-xl font-extrabold">Get <span class="text-green-500">Emergency</span> Care 24/7</h1>

                    <p class="py-4 md:text-xl text-base">We are always at your side. We are 24 hours available or you in emergency situations</p>

                    <div class="md:py-3 py-1 md:flex md:text-left jusitfy-center">
                        <div class="md:px-4 md:text-3xl text-sm px-1">
                            <i class="fa fa-phone-square" aria-hidden="true"></i> +234 808 5089 833
                        </div>
                      </div>
                </div>
                <img class="md:w-2/5 md:h-1/5 w-3/5 h-full md:-mt-12 mx-auto mt-6 md:ml-0 md:object-cover lg:object-cover object-contain relative" src="/images/black_nurse_1.png" alt="">
            </div>
        </div>
    </div>
</section>
@endsection