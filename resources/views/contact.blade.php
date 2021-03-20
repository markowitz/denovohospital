@extends('layout.app')

@section('content')

<main class="relative">
    <div class="md:h-full h-full mt-16 md:mt-10 lg:mt-10">
      <div class="py-32">
          <div class="w-full h-full">
            <h1 class="text-xl w-screen -mt-20 md:ml-0 tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl md:py-2 md:block lg:block hidden">
              <span class="block text-white xl:inline float-right px-48">CONTACT</span>
            </h1>
            <p class="w-screen text-white md:py-10 lg:mt-4 md:block lg:block hidden">
                <span class="block text-white text-xl xl:inline float-right px-48">Home - Contact</span>
            </p>
            <h1 class="text-xl w-screen -mt-28 md:ml-0 tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl md:py-2 md:hidden lg:hidden block">
                <span class="block text-white xl:inline text-center">CONTACT</span>
              </h1>
              <p class="w-screen text-white md:py-10 lg:mt-4 md:hidden lg:hidden block py-6">
                  <span class="block text-white text-xl xl:inline text-center">Home - Contact</span>
              </p>
          </div>
      </div>
      <div class="-mt-24 bg-gray-800 bg-opacity-50 absolute w-full h-24 px-16 text-white md:block lg:block xl:block hidden">
        <div class="py-3 flex mx-32">
          <div class="text-5xl">
              <i class="fa fa-phone-square" aria-hidden="true"></i>
          </div>
          <div class="px-4">Get Emergency Services 24/7 <br>
            +234 808-5089-833, +234 913-1884-828
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
        +234 808-5089-833, +234 913-1884-828
      </div>
    </div>
  </div>
  <section class="bg-white py-10">
  <div class="h-40 bg-no-repeat bg-center-top bg-contain -mt-10" style="background-image:url(/images/about-section-bg.png);background-position: calc(100% + 10px) calc(100% - 10px);">
  </div>
  <div class="md:flex md:flex-initial md:px-14 md:space-x-10 md:mx-24 mx-4">
      <div class="bg-white rounded-lg shadow">
        <div class="w-full py-10 px-4">
            <h1 class="font-extrabold text-2xl">CONTACT INFO</h1>

            <div class="py-4 flex">
                <i class="text-2xl text-green-500 fa fa-map-marker border-2 border-green-500 px-3 py-2 rounded-full h-10 w-10 leading-6" aria-hidden="true"></i>
                <div class="ml-4 text-gray-500">
                    #3 Denovo Close Opposite Convenant Event Centre, <br>
                    Behind Mofigo Filling Station, Off Eneka- Rukpokwu, <br>
                    Road, Port Harcourt, Rivers State
                </div>
            </div>

            <div class="py-4 flex">
                <i class="text-2xl text-green-500 fa fa-phone border-2 border-green-500 px-3 py-2 rounded-full h-10 w-10 leading-6" aria-hidden="true"></i>
                <div class="ml-4 text-gray-500">
                    +234 808-5089-833 <br>
                    +234 913-1884-828
                </div>
            </div>

            <div class="py-4 flex">
                <i class="text-2xl text-green-500 fa fa-envelope border-2 border-green-500 px-2 py-2 rounded-full h-10 w-10 leading-6" aria-hidden="true"></i>
                <div class="ml-4 text-gray-500">
                    info@denovohospital.com <br>
                    admin@denovohospital.com
                </div>
            </div>
        </div>
      </div>
      <div class="bg-white rounded-lg shadow md:w-2/4 w-full mt-10 pt-6">
        <div class="w-full md:py-10 px-4">
            <h1 class="font-extrabold text-2xl">Get In Touch</h1>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST">
                  <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                      <input type="text" name="first_name" id="first_name" autocomplete="given-name" placeholder="Name" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-green-200 bg-opacity-20">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                      <input type="email" name="email" id="email" autocomplete="given-email" placeholder="Email" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-green-200 bg-opacity-20">
                    </div>

                        <div class="col-span-6 sm:col-span-3">
                        <input type="text" name="phone" id="phone" autocomplete="given-phone" placeholder="Phone" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-green-200 bg-opacity-20">
                      </div>

                      <div class="col-span-6 sm:col-span-3">
                        <input type="text" name="subject" id="subject" autocomplete="given-subject" placeholder="Subject" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-green-200 bg-opacity-20">
                      </div>
                  </div>
                  <div class="col-span-6 mt-10">
                    <textarea name="message" id="message" placeholder="Your Message" autocomplete="message" rows="10" class="mt-1 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md bg-green-200 bg-opacity-20"></textarea>
                  </div>
                  <div class="col-span-6 md:mt-6 py-4">
                  <button type="button" class="text-center w-full px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-green-500 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Send Message
                  </button>
                  </div>
                  </div>
                </form>
              </div>
        </div>
      </div>
  </div>
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
                            <i class="fa fa-phone-square" aria-hidden="true"></i> +234 808-5089-833, +234 913-1884-828
                        </div>
                      </div>
                </div>
                <img class="md:w-2/5 md:h-1/5 w-3/5 h-full md:-mt-12 mx-auto mt-6 md:ml-0 md:object-cover lg:object-cover object-contain relative" src="/images/black_nurse_1.png" alt="">
            </div>
        </div>
    </div>
</section>
@endsection