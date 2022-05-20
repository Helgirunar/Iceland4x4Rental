<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative py-8 sm:py-10">
  <div class="absolute inset-0 overflow-hidden">
    <img src="https://www.gocampers.is/media/2/4x4opt-1-1.jpg" alt="" class="object-cover object-center w-full h-full">
  </div>
  <div aria-hidden="true" class="absolute inset-0 bg-gray-900 bg-opacity-50"></div>
  <div class="relative flex flex-col max-w-3xl mx-4 md:mx-auto">
    <h2 class="text-3xl font-extrabold tracking-tight text-center text-white sm:text-4xl ">{{ __('middle search bar') }}</h2>
    <x-datePicker :displayTitle=false/>
  </div>
</div>
