<div class="flex flex-col justify-start m-auto w-248 mb-64 mt-8">
    <span class="font-bold text-blue-700 uppercase mb-4">Portfolio</span>
    <span class="font-extrabold text-3xl mb-16">Projects</span>
    <div class="grid grid-cols-2">
        @foreach ($projects as $project)
        <div class="cursor-pointer relative group max-w-md mb-16 overflow-hidden bg-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-transform duration-300 transform hover:scale-105">
            <!-- Background Image -->
            <div class="bg-cover bg-center h-48 transition-transform duration-300 transform hover:scale-110" style="background-image: url('/project-images/{{ $project->image }}')"></div>
        
            <!-- Overlay Content -->
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                <div class="p-4">
                    <h2 class="text-white text-lg font-semibold">{{ $project->name }}</h2>
                    <p class="text-gray-300">{{ $project->year }}</p>
                    <p class="text-gray-300">{{ $project->description }}</p>
                </div>
            </div>
        </div>
        @endforeach

        <div x-data="{ isOpen: false }">
            <div @click="isOpen = true" class="cursor-pointer relative group max-w-md h-48 mb-16 overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-transform duration-300 transform hover:scale-105">
                <!-- Background Image -->
                <div class="bg-contain bg-no-repeat bg-center h-16 translate-y-full transition-transform duration-300 transform hover:scale-110" style="background-image: url('/images/plus2.png')"></div>
                
                <!-- Overlay Content -->
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-end transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                    <div class="p-4">
                        <h2 class="text-white text-lg font-semibold">Add Project</h2>
                    </div>
                </div>
            </div>
        

            <div x-show="isOpen" @click.away="isOpen = false" class="fixed inset-0 bg-black bg-opacity-50 z-50">
                <div class="fixed border py-16 px-16 bg-white rounded top-1/2 left-1/2 transform -translate-x-1/3 -translate-y-1/2 z-50">
                    <button @click="isOpen = false" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                    @livewire('add-project-form')
                </div>
            </div>
        </div>  

    </div>
    
</div>