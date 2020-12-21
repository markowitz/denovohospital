@extends('layout.app')

@section('content')
<main class="relative">
  <div class="md:h-full h-4/5 mt-8 md:mt-10 lg:mt-10">
    <div class="flex md:space-x-32 lg:space-x-72 xl:space-x-48 2xl:space-x-96 space-x-10 ml-24">
      <img class="md:w-4/6 lg:w-4/6 sm:w-1/3 w-full md:h-full lg:h-full sm:h-4/6 h-full -ml-48 object-cover absolute md:-ml-40 lg:-ml-48" src="/images/black_nurse_3.png" alt="">
      <img class="md:w-2/5 md:h-full lg:h-5/6 w-3/5 h-3/6 md:mt-10 md:object-cover lg:object-cover object-cover" src="/images/black_nurse_1.png" alt="">
        <div class="md:w-full w-full">
          <h1 class="md:text-xl lg:text-3xl xl:text-4xl lg:w-screen md:w-80 md:mt-20 md:-ml-72 lg:mt-40 lg:-ml-40 2xl:-ml-96 tracking-tight font-extrabold text-gray-900 md:py-2 md:block lg:block hidden">
            <span class="text-green-300">Medical</span> <span class="text-white">Services</span><br>
            <span class="text-white">That You Can </span> <span class="text-green-300">Trust </span>
          </h1>
          <p class="md:px-10 text-white md:text-xl lg:text-2xl text-base md:block lg:block hidden md:py-1 md:-ml-40 lg:-ml-40 2xl:-ml-96 lg:px-0 lg:text-2xl lg:mt-4 md:w-80">
            We offer state of the art facilities with morden equipments
          </p>
        </div>
    </div>
    <div class="-mt-52 bg-gray-800 bg-opacity-50 absolute w-full h-48 px-16 text-white block md:hidden lg:hidden">
      <h1 class="text-2xl tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl text-center">
        <span class="text-green-300">Medical</span> <span class="text-white">Services</span><br>
        <span class="text-white">That You Can </span> <span class="text-green-300">Trust </span>
      </h1>
      <p class="md:px-10 px-2 text-white md:text-2xl text-base py-2 text-center">
        We offer state of the art facilities with morden equipments
      </p>
    </div>
    <div class="-mt-24 bg-gray-800 bg-opacity-50 absolute w-full h-24 px-16 text-white md:block lg:block sm:block xl:block hidden">
      <div class="py-3 flex px-24">
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
<section class="bg-white">
  <div class="md:w-full lg:w-full 2xl:w-4/6 w-full mx-auto">
  <div class="md:flex lg:flex flex-initial md:content-between md:px-20 lg:px-32 py-10 px-4 md:space-x-10 lg:px-24">
      <div class="border-4 h-52 md:h-64 w-full md:w-full lg:w-full border-green-300 mt-2 rounded-lg">
        <div class="w-14 py-2 bg-green-300 text-white -inset-x-1 text-3xl text-center">
          <i class="fa fa-hospital-o" aria-hidden="true"></i>
        </div>
        <div class="md:px-3 px-1 py-4">
        <h3 class="text-green-500 text-base md:text-base text-center">EMERGENCY MEDICAL SERVICES</h3>
        <p class="md:py-4 py-1 text-gray-500 text-sm md:text-sm md:text-left text-center">
          Our ambulances are available for quicker responses to various
          emergencies
        </p>
        </div>
      </div>
      <div class="border-4 h-52 md:h-64 md:w-full w-full border-pink-300 mt-2 rounded-lg">
        <div class="w-14 py-2 bg-pink-300 text-white -inset-x-1 text-3xl text-center">
          <i class="fa fa-heartbeat" aria-hidden="true"></i>
        </div>
        <div class="md:px-3 px-1 py-2">
        <h3 class="text-pink-400 text-base md:text-base text-center">HEART & MEDICAL TREATMENT</h3>
        <p class="md:py-2 py-1 text-gray-500 text-sm md:text-sm md:text-left text-center">
          With state of the art facilities, Denovohospital stands out in efficient delivery
          emergencies
        </p>
        </div>
      </div>
      <div class="border-4 h-52 md:h-64 md:w-full w-full border-green-300 mt-2 rounded-lg">
        <div class="w-14 py-2 bg-green-300 text-white -inset-x-1 text-3xl text-center">
          <i class="fa fa-medkit" aria-hidden="true"></i>
        </div>
        <div class="md:px-3 px-1 py-2">
        <h3 class="text-green-500 text-base md:text-base text-center">FIRST AID SERVICES</h3>
        <p class="md:py-4 py-1 text-gray-500 text-sm md:text-sm md:text-left text-center">
          We are open 24/7 for all medical processes and
          treatments
        </p>
        </div>
      </div>
  </div>
  </div>

  <div class="py-4 text-gray-600 hidden md:block lg:block">
    <div class="justify-center flex">
      <img src="/images/black_nurse_2.png" class="w-96 h-96 inline-block" />
      <div class="inline-block align-center md:w-full lg:w-2/6 py-16 px-8">
        <h2 class="uppercase text-center text-gray-800">Welcome to <b>Denovo Hospital</b></h2>
        <h3 class="text-center text-gray-800">YOUR COMPLETE MEDICAL SOLUTION</h3>
        <p class="py-4">As a patient care organisation, we pride ourselves in providing both healthcare professionals and patients the highest level of quality service</p>
      </div>
    </div>
      <div class="bg-cover bg-center bg-no-repeat h-32 md:h-64 align-top overlay-custom rounded-3xl relative md:w-4/5 lg:w-2/3 md:-mt-16 lg:-mt-6 mx-auto" style="background-image:url(/images/IMG-20201117-WA0012.jpg);">
        <div class="w-14 py-2 bg-red-500 text-white -inset-x-1 text-3xl text-center relative">
          <i class="fa fa-heartbeat" aria-hidden="true"></i>
        </div>
          <div class="flex relative px-10 text-white justify-between">
            <div>
              <h3 class="text-white">Opening Hours</h3>
              <p class="py-3">Mon - Fri .... 8:00AM TO 7:00PM</p>
              <p class="py-3">Saturday .... 5:00AM TO 4:00PM</p>
              <p class="py-3">Sunday .... CLOSED</p>
            </div>
            <div>
              <h3 class="text-white">Get In Touch</h3>
              <div class="py-3 flex">
                <div class="text-5xl">
                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                </div>
                <div class="px-4">+234 808-5089-833 <br>
                  +234 913-1884-828
                </div>
              </div>
              <div class="py-3 flex">
                <div class="text-5xl">
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
  </div>

  <div class="py-4 text-gray-600 block md:hidden lg:hidden">
    <div class="">
      <img src="/images/black_nurse_2.png" class="w-96 h-96 mx-auto" />
      <div class="text-center mx-auto py-8">
        <h2 class="uppercase text-center text-gray-800">Welcome to <b>Denovo Hospital</b></h2>
        <h3 class="text-center text-gray-800">YOUR COMPLETE MEDICAL SOLUTION</h3>
        <p class="py-4">As a patient care organisation, we pride ourselves in providing both healthcare professionals and patients the highest level of quality service</p>
      </div>
    </div>
      <div class="bg-cover bg-center bg-no-repeat h-72 md:h-64 align-top overlay relative w-full" style="background-image:url(/images/IMG-20201117-WA0012.jpg);">
        <div class="w-14 py-2 bg-red-500 text-white -inset-x-1 text-3xl text-center relative">
          <i class="fa fa-heartbeat" aria-hidden="true"></i>
        </div>
          <div class="relative px-10 text-white justify-between text-base">
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
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-12">
      <h1 class="text-center text-4xl font-extrabold">What we Do</h1>
      <div class="md:flex justify-between">
        <div class="md:mt-24">
          <div class="py-6 flex space-x-2">
            <img src="/images/e-health.png" class="w-8 h-8" />
            <p>e-Health</p>
          </div>
          <div class="py-6 flex space-x-2">
            <img src="/images/pediatric.png" class="w-8 h-8" />
            <p>Pediatric Services</p>
          </div>
          <div class="py-6 flex space-x-2">
            <img src="/images/fertility.png" class="w-8 h-8" />
            <p>Fertility & Assisted Reproduction</p>
          </div>
          <div class="py-6 flex space-x-2">
            <img src="/images/diagnosis.png" class="w-8 h-8" />
            <p>Advance Diagnosis</p>
          </div>
        </div>
        <div class="hidden md:block lg:block">
          <img src="/images/black_nurse_3.png" class="md:w-full md:ml-4 lg:w-96 md:h-5/6 lg:h-full object-cover" />
        </div>
        <div class="md:mt-24 text-right">
          <div class="py-6 flex space-x-2 lg:ml-48 md:-ml-4">
            <img src="/images/ambulance.png" class="w-8 h-8 block md:hidden lg:hidden" />
            <p>Surgery</p>
            <img src="/images/ambulance.png" class="w-8 h-8 hidden md:block lg:block" />
          </div>
          <div class="py-6 flex space-x-2 lg:ml-44 md:-ml-6">
            <img src="/images/maternity.png" class="w-8 h-8 block md:hidden lg:hidden" />
            <p>Maternity</p>
            <img src="/images/maternity.png"  class="w-8 h-8 hidden md:block lg:block" />
          </div>
          <div class="py-6 flex space-x-2 lg:ml-16 md:-ml-14">
            <img src="/images/lab.png" class="w-8 h-8 block md:hidden lg:hidden" />
            <p>Computerized Laboratory</p>
            <img src="/images/lab.png" class="w-8 h-8 hidden md:block lg:block" />
          </div>
          <div class="py-6 flex space-x-2 lg:ml-20 md:-ml-10">
            <img src="/images/patient.png" class="w-8 h-8 block md:hidden lg:hidden" />
            <p>In/Out Patient Services</p>
            <img src="/images/patient.png" class="w-8 h-8 hidden md:block lg:block" />
          </div>
          <div class="py-6 flex space-x-2">
            <img src="/images/consultation.png"  class="w-8 h-8 block md:hidden lg:hidden" />
            <p>General & Specialized Consultation</p>
            <img src="/images/consultation.png" class="w-8 h-8 hidden md:block lg:block" />
          </div>
        </div>
        <div>
      </div>
  </div>
</section>
@endsection