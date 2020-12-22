@extends('layout.app')

@section('content')

<main class="relative">
    <div class="md:h-full h-full mt-10 md:mt-10 lg:mt-10">
      <div class="py-32">
          <div class="w-full h-full">
            <h1 class="text-xl w-screen md:-mt-20 md:ml-0 tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl md:py-2 md:block lg:block hidden">
              <span class="block text-white xl:inline float-right px-48">ABOUT US</span>
            </h1>
            <p class="w-screen text-white md:py-10 lg:mt-4 md:block lg:block hidden">
                <span class="block text-white text-xl xl:inline float-right px-48">Home - About Us</span>
            </p>

            <h1 class="text-xl w-screen -mt-28 md:ml-0 tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl md:py-2 md:hidden lg:hidden block">
                <span class="block text-white xl:inline text-center">ABOUT US</span>
              </h1>
              <p class="w-screen text-white md:py-10 lg:mt-4 md:hidden lg:hidden block py-6">
                  <span class="block text-white text-xl xl:inline text-center">Home - About Us</span>
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
      <div class="px-4 text-sm">Get Emergency Services 24/7 <br>
        +234 913-1884-828
      </div>
    </div>
  </div>
<section class="pb-16 bg-white">
        <div class="pt-8 pb-4 md:pt-16 grid lg:grid-cols-2 grid-cols-1 mx-2">
            <div>
                <img src="/images/black_nurse_2.png" class="w-full h-1/2 lg:ml-24" />
                <div class="bg-cover bg-center bg-no-repeat h-96 md:h-full lg:h-4/6 lg:-mt-32 xl:-mt-96 md:-mt-20 -mt-6 lg:ml-16 align-top overlay-custom rounded-3xl relative lg:w-4/5 xl:w-3/6 md:w-full w-full" style="background-image:url(/images/IMG-20201117-WA0012.jpg);">
                    <div class="w-14 py-2 bg-red-500 text-white -inset-x-1 text-3xl text-center relative">
                      <i class="fa fa-heartbeat" aria-hidden="true"></i>
                    </div>
                      <div class="relative px-10 text-white justify-between text-base pb-16">
                        <div>
                          <h3 class="text-white pt-3">Opening Hours</h3>
                          <p class="py-1">Mon - Fri .... 8:00AM TO 7:00PM</p>
                          <p class="py-1">Saturday .... 5:00AM TO 4:00PM</p>
                          <p class="py-1">Sunday .... CLOSED</p>
                        </div>
                        <div>
                          <h3 class="text-white pt-3">Get In Touch</h3>
                          <div class="py-3 flex">
                            <div class="text-2xl">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                            </div>
                            <div class="px-4">+234 808-5089-833 <br>
                              +234 913-1884-828
                            </div>
                          </div>
                          <div class="py-3 flex">
                            <div class="text-2xl">
                              <i class="fa fa-envelope-square" aria-hidden="true"></i>
                            </div>
                            <div class="px-4">info@denovohospital.com <br>
                              admin@denovohospital.com
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
            <div class="md:w-4/6 md:ml-28 xl:ml-16 lg:ml-32 lg:text-left xl:text-justify md:text-left">
                <h2 class="uppercase text-gray-800 lg:text-2xl text-2xl font-extrabold pt-10 lg:pt-0 text-center md:text-left py-4 lg:py-0">ABOUT US</h2>
                <p class="w-full lg:text-xl xl:text-2xl md:text-base text-base text-gray-600 lg:pt-20 pb-4">Denovo Hospital is a dynamic and progressive company focused on providing
                    some of the most innovative healthcare services from around the world and in the
                    Nigeria healthcare market.
                </p>

                <p class="w-full lg:text-xl md:text-base xl:text-2xl text-base text-gray-600 mt-4">
                    As a patient care oriented organization, we pride ourselves in providing both
                    healtcare professionals and patients the highest level of quality service.
                </p>
            </div>
        </div>

        <div class="text-gray-500 md:text-justify px-2 md:px-2 lg:px-4 xl:px-10 lg:py-32 pt-6">
            <div class="bg-cover bg-center bg-no-repeat h-full md:h-full lg:h-1/2 xl:h-1/2 xl:mx-20 lg:mx-auto align-top overlay-custom relative md:w-full lg:w-full xl:w-5/6 w-full rounded-3xl" style="background-image:url(/images/IMG-20201117-WA0012.jpg);">
                <div class="lg:flex relative text-white">
                    <div class="md:px-10 px-6 md:py-32 py-2 w-full lg:text-left text-center">
                        <h1 class="md:text-3xl text-xl font-extrabold">Get <span class="text-green-500">Emergency</span> Care 24/7</h1>

                        <p class="py-4 md:text-xl text-base">We are always at your side. We are 24 hours available or you in emergency situations</p>

                        <div class="md:py-3 py-1 md:flex lg:text-left jusitfy-center">
                            <div class="md:px-4 md:text-3xl text-sm px-1">
                                <i class="fa fa-phone-square" aria-hidden="true"></i> +234 808 5089 833
                            </div>
                          </div>
                    </div>
                    <img class="lg:w-2/5 md:w-3/5 md:h-full lg:h-3/5 xl:h-1/5 w-3/5 h-full md:-mt-12 mx-auto mt-6 lg:ml-0 md:object-cover lg:object-cover object-contain relative" src="/images/black_nurse_1.png" alt="">
                </div>
            </div>
        </div>
</section>

<section class="bg-gray-100 py-10 bg-opacity-100">
    <div class="h-40 bg-no-repeat bg-center-top bg-contain -mt-10" style="background-image:url(/images/about-section-bg.png);background-position: calc(100% + 10px) calc(100% - 10px);">
    </div>
    <h1 class="md:text-4xl text-2xl font-extrabold text-center -mt-20">MEET OUR EXPERTS</h1>
    <p class="text-center md:text-xl text-base py-4 md:px-48">
        We provide excellent services for your ultimate good health. Here some of our seasoned professionals that are available to ensure great service.
    </p>
        <!-- Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
    <div class="swiper-slide">
        <img class="object-cover shadow-lg rounded-lg h-96 w-full" src="/images/physician1.png" alt="">
        <div class="text-center py-6">
            <h4 class="text-xl">Dr Jane Doe</h4>
            <p class="text-green-500">
                Head Neuro Surgeon
            </p>
        </div>
    </div>
    <div class="swiper-slide">
        <img class="object-cover shadow-lg rounded-lg h-96" src="/images/physician2.png" alt="">
        <div class="text-center py-6">
            <h4 class="text-xl">Dr John Doe</h4>
            <p class="text-green-500">
                Assistant Surgeon
            </p>
        </div>
    </div>
    <div class="swiper-slide">
        <img class="object-cover shadow-lg rounded-lg h-96" src="/images/physician3.png" alt="">
        <div class="text-center py-6">
            <h4 class="text-xl">Dr John Doe</h4>
            <p class="text-green-500">
                Assistant Surgeon
            </p>
        </div>
    </div>
    <div class="swiper-slide">
        <img class="object-cover shadow-lg rounded-lg h-96" src="/images/physician4.png" alt="">
        <div class="text-center py-6">
            <h4 class="text-xl">Dr Jane Doe</h4>
            <p class="text-green-500">
                Cardiac Surgeon
            </p>
        </div>
    </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    </div>
</section>

@endsection