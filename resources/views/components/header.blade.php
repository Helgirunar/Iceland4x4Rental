<header class="relative">
    <div class="pt-6 bg-gray-900">
    <nav class="relative flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6" aria-label="Global">
        <div class="flex items-center flex-1">
            <div class="flex items-center justify-between md:w-auto">
                <a href="#" class="text-base font-medium text-white hover:text-gray-300">
                    <img class="w-auto h-8 sm:h-10" src="https://www.iceland4x4rental.com/wp-content/uploads/sites/2/2018/08/logo.png" alt="">
                </a>
            </div>
            <div class="ml-10">
                <a href="#" class="text-base font-medium text-white hover:text-gray-300">{{ __('header') }}</a>
            </div>
        </div>
        <div>
            <div class="flex flex-row justify-between">
                <div x-data="{open: false}">
                    <div class="flex px-2 space-x-2 font-semibold bg-gray-100 rounded-lg cursor-pointer" x-on:click="open = !open" @click.away="open = false">
                        <h1 class="mt-1 select-none">
                            {{$language->type}}
                        </h1>
                        <img src="{{url('/flags/4x3/'. $language->short .'.svg')}}" class="w-6 h-8">
                    </div>
                    <div x-show="open" class="absolute z-20 flex flex-col space-y-2 bg-white rounded-lg shadow-lg right-6 " >
                        <a href="/en"  class="flex px-2 space-x-2 font-semibold rounded-lg cursor-pointer hover:bg-gray-200" x-on:click="open = !open" @click.away="open = false">
                            <h1 class="mt-1">
                                English
                            </h1>
                            <img src="{{url('/flags/4x3/gb.svg')}}" class="w-6 h-8">
                        </a>
                        <a href="/es"  class="flex px-2 space-x-2 font-semibold rounded-lg cursor-pointer hover:bg-gray-200" x-on:click="open = !open" @click.away="open = false">
                            <h1 class="mt-1">
                                Spanish
                            </h1>
                            <img src="{{url('/flags/4x3/es.svg')}}" class="w-6 h-8">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </div>
</header>
