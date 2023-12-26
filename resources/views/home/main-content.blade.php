<div class="flex flex-col justify-center items-center w-full pl-64">
    @include('home.home')
    @include('home.about')
    @include('home.skills')
    @include('home.portfolio')
    @include('home.contact')

    @if (session()->has('message'))

    <div x-data="{ isOpen: true }">
        <div x-show="isOpen" @click.away="isOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-50">
            <div
                class="fixed border py-16 px-16 bg-white rounded top-1/2 left-1/2 transform -translate-x-1/3 -translate-y-1/2 z-50">
                <button @click="isOpen = false" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <span class="text-xl">{{ session()->get('message') }}</span>
                @livewire('show-popup-message')
            </div>
        </div>
    </div>
    @endif
</div>
