<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  const colors = require('tailwindcss/colors')

  module.exports = {
    // ...
    theme: {
      extend: {
        colors: {
          sky: colors.sky,
          teal: colors.teal,
          rose: colors.rose,
        },
      },
    },
  }
  ```
-->
<div class="relative py-16 bg-gray-50 sm:py-24 lg:py-32 ">
    <div class="max-w-md px-4 mx-auto text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
        <p class="mt-2 mb-6 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{ __('Extra title') }}</p>
        <p class="mt-2 mb-6 tracking-tight text-gray-400 text-1xl sm:text-2xl">{{ __('Extra description') }}</p>
        <div class="overflow-hidden bg-white rounded-lg shadow-sm sm:grid sm:grid-cols-2 sm:gap-px">

            <div class="relative p-6 bg-white rounded-tl-lg rounded-tr-lg ">
                <div class="mt-8">
                    <div class="flex flex-row text-center">
                        <img src="https://www.iceland4x4rental.com/wp-content/uploads/sites/2/2018/07/gps.jpg" />
                            <h3 class="self-center ml-6 text-2xl font-bold">
                            {{ __('gps name') }}
                        </h3>
                    </div>
                <p class="mt-2 text-sm text-gray-500">{{ __('gps description') }}</p>
                </div>
            </div>

            <div class="relative p-6 bg-white sm:rounded-tr-lg group focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div class="mt-8">
                    <div class="flex flex-row text-center">
                        <img src="https://www.iceland4x4rental.com/wp-content/uploads/sites/2/2018/07/wifi.jpg" />
                        <h3 class="self-center ml-6 text-2xl font-bold">
                            {{ __('wifi name') }}
                        </h3>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">{{ __('wifi description') }}</p>
                </div>
            </div>

            <div class="relative p-6 bg-white rounded-tl-lg rounded-tr-lg ">
                <div class="mt-8">
                    <div class="flex flex-row text-center">
                        <img src="https://www.iceland4x4rental.com/wp-content/uploads/sites/2/2018/07/camping-gear-1.jpg" />
                            <h3 class="self-center ml-6 text-2xl font-bold">
                            {{ __('camping name') }}
                        </h3>
                    </div>
                <p class="mt-2 text-sm text-gray-500">{{ __('camping description') }}</p>
                </div>
            </div>

            <div class="relative p-6 bg-white sm:rounded-tr-lg group focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div class="mt-8">
                    <div class="flex flex-row text-center">
                        <img src="https://www.iceland4x4rental.com/wp-content/uploads/sites/2/2018/07/child-seat.jpg" />
                        <h3 class="self-center ml-6 text-2xl font-bold">
                            {{ __('child seat name') }}
                        </h3>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">{{ __('child seat description') }}</p>
                </div>
            </div>

            <div class="relative p-6 bg-white rounded-tl-lg rounded-tr-lg ">
                <div class="mt-8">
                    <div class="flex flex-row text-center">
                        <img src="https://www.iceland4x4rental.com/wp-content/uploads/sites/2/2018/07/roof-box.jpg" />
                            <h3 class="self-center ml-6 text-2xl font-bold">
                            {{ __('roof boxes name') }}
                        </h3>
                    </div>
                <p class="mt-2 text-sm text-gray-500">{{ __('roof boxes description') }}</p>
                </div>
            </div>

            <div class="relative p-6 bg-white sm:rounded-tr-lg group focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
                <div class="mt-8">
                    <div class="flex flex-row text-center">
                        <img src="https://www.iceland4x4rental.com/wp-content/uploads/sites/2/2018/07/extra-driver.jpg" />
                        <h3 class="self-center ml-6 text-2xl font-bold">
                            {{ __('extra driver name') }}
                        </h3>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">{{ __('extra driver description') }}</p>
                </div>
            </div>

        </div>
    </div>
</div>
