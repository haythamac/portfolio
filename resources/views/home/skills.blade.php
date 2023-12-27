<div class="flex flex-col justify-start m-auto w-248 mb-16 mt-64">
    <span class="font-bold text-blue-700 uppercase mb-4">Skills</span>
    <span class="font-extrabold text-3xl mb-8">Experience & Skills</span>
    <div class="flex justify-between w-1/3">
        <div x-data="{ isOpen: false }">
            <button @click="isOpen = true"
                class="uppercase text-white mb-8 bg-blue-700 hover:bg-yellow-400 hover:text-black p-3 rounded duration-500">
                Add skill</button>


            <div x-show="isOpen" @click.away="isOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-50">
                <div
                    class="fixed border py-16 px-16 bg-white rounded top-1/2 left-1/2 transform -translate-x-1/3 -translate-y-1/2 z-50">
                    <button @click="isOpen = false" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                    @livewire('add-skill-form')
                </div>
            </div>
        </div>
        <div x-data="{ isOpen: false }">
            <button @click="isOpen = true"
                class="uppercase text-white mb-8 bg-blue-700 hover:bg-yellow-400 hover:text-black p-3 rounded duration-500">
                Add Category</button>


            <div x-show="isOpen" @click.away="isOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-50">
                <div
                    class="fixed border py-16 px-16 bg-white rounded top-1/2 left-1/2 transform -translate-x-1/3 -translate-y-1/2 z-50">
                    <button @click="isOpen = false" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </button>
                    @livewire('add-category-form')
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2">
        @foreach ($categories as $category)
        <div class="mb-32 mr-8">
            <div class="font-semibold text-xl mb-16">{{ $category->name }}</div>
            <div class="grid grid-cols-2 gap-4">
                @foreach ($skills as $skill)
                    @if ($skill->category == $category->name)
                    <div class="bg-blue-200 py-4 px-8 w-48">
                        {{ $skill->name }} - {{ $skill->percent }}%
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        @endforeach
    </div>

</div>
