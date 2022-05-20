<!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="text-center bg-gray-50">
  <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:px-8 lg:py-24">
    <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
      <div class="space-y-5 sm:space-y-4">
        <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">{{ __('reasons title') }}</h2>
        <p class="mt-2 mb-10 tracking-tight text-gray-400 text-1xl sm:text-2xl">{{ __('reasons title extra') }}</p>
      </div>
      <div class="lg:col-span-2">
        <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 sm:space-y-0 lg:gap-x-8">
          <li>
            <div class="space-y-4">
                <span class="left-0 w-1/5 mx-auto border border-white shadow-lg" style="height:120px; width:120px; border-radius:50%; display:block; background-image: url('/images/reasons/free-cancellation.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                </span>
              <div class="space-y-1 text-lg font-medium leading-6">
                <h3>{{ __('reasons free cancellation title') }}</h3>
              </div>
              <div class="text-lg">
                <p class="text-gray-500">{{ __('reasons free cancellation description') }}</p>
              </div>
            </div>
          </li>

          <li>
            <div class="space-y-4">
                <span class="left-0 w-1/5 mx-auto border border-white shadow-lg" style="height:120px; width:120px; border-radius:50%; display:block; background-image: url('/images/reasons/free-amendments.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                </span>
              <div class="space-y-1 text-lg font-medium leading-6">
                <h3>{{ __('reasons free amendment title') }}</h3>
              </div>
              <div class="text-lg">
                <p class="text-gray-500">{{ __('reasons free amendment description') }}</p>
              </div>
            </div>
          </li>

          <li>
            <div class="space-y-4">
                <span class="left-0 w-1/5 mx-auto border border-white shadow-lg" style="height:120px; width:120px; border-radius:50%; display:block; background-image: url('/images/reasons/instant-confirmation.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                </span>
              <div class="space-y-1 text-lg font-medium leading-6">
                <h3>{{ __('reasons instant confirmation title') }}</h3>
              </div>
              <div class="text-lg">
                <p class="text-gray-500">{{ __('reasons instant confirmation description') }}</p>
              </div>
            </div>
          </li>

          <li>
            <div class="space-y-4">
                <span class="left-0 w-1/5 mx-auto border border-white shadow-lg" style="height:120px; width:120px; border-radius:50%; display:block; background-image: url('/images/reasons/cdw-included.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                </span>
              <div class="space-y-1 text-lg font-medium leading-6">
                <h3>{{ __('reasons cdw included title') }}</h3>
              </div>
              <div class="text-lg">
                <p class="text-gray-500">{{ __('reasons cdw included description') }}</p>
              </div>
            </div>
          </li>

          <li>
            <div class="space-y-4">
                <span class="left-0 w-1/5 mx-auto border border-white shadow-lg" style="height:120px; width:120px; border-radius:50%; display:block; background-image: url('/images/reasons/breakdown-assistance.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                </span>
                <div class="space-y-1 text-lg font-medium leading-6">
                    <h3>{{ __('reasons 24 hour breakdown assistance title') }}</h3>
                </div>
                <div class="text-lg">
                    <p class="text-gray-500">{{ __('reasons 24 hour breakdown assistance description') }}</p>
                </div>
            </div>
          </li>

          <li>
            <div class="space-y-4">
                <span class="left-0 w-1/5 mx-auto border border-white shadow-lg" style="height:120px; width:120px; border-radius:50%; display:block; background-image: url('/images/reasons/unlimited-mileage.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                </span>
                <div class="space-y-1 text-lg font-medium leading-6">
                    <h3>{{ __('reasons unlimited mileage title') }}</h3>
                </div>
                <div class="text-lg">
                    <p class="text-gray-500">{{ __('reasons unlimited mileage description') }}</p>
                </div>
            </div>
          </li>

          <li>
            <div class="space-y-4">
                <span class="left-0 w-1/5 mx-auto border border-white shadow-lg" style="height:120px; width:120px; border-radius:50%; display:block; background-image: url('/images/reasons/transmission.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                </span>
                <div class="space-y-1 text-lg font-medium leading-6">
                    <h3>{{ __('reasons manual and automatic title') }}</h3>
                </div>
                <div class="text-lg">
                    <p class="text-gray-500">{{ __('reasons manual and automatic description') }}</p>
                </div>
            </div>
          </li>

          <li>
            <div class="space-y-4">
                <span class="left-0 w-1/5 mx-auto border border-white shadow-lg" style="height:120px; width:120px; border-radius:50%; display:block; background-image: url('/images/reasons/fast-secure-booking.jpg'); background-repeat:no-repeat; background-size: cover; background-position: center">
                </span>
                <div class="space-y-1 text-lg font-medium leading-6">
                    <h3>{{ __('reasons fast and secure online booking title') }}</h3>
                </div>
                <div class="text-lg">
                    <p class="text-gray-500">{{ __('reasons fast and secure online booking description') }}</p>
                </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </div>
</div>
