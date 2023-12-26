<div class="w-128">
    <h2 class="text-[#07074D] text-lg font-semibold mb-4">Add Project</h2>

    <!-- Livewire project form -->
    <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                Name
            </label>
            <input name="name" type="text" id="name" placeholder="Name of the project"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-5">
            <label for="year" class="mb-3 block text-base font-medium text-[#07074D]">
                Year
            </label>
            <input name="year" type="text" id="year" placeholder="Year completion"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @error('year') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="mb-5">
            <label for="description" class="mb-3 block text-base font-medium text-[#07074D]">
                Description
            </label>
            <input name="description" type="text" id="description" placeholder="Information of project"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div class="flex w-full my-16 items-center justify-center bg-grey-lighter">
            <label class="w-64 flex flex-col items-center px-4 py-6 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-500 hover:text-white">
                <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                </svg>
                <span class="mt-2 text-base leading-normal">Select a file</span>
                <input type='file' name="image" class="hidden" />
            </label>
        </div>
        

        <!-- Save Project button -->
        <button type="submit"
            class="uppercase text-white bg-blue-700 hover:bg-yellow-400 hover:text-black p-3 rounded duration-500">Save
            Project</button>
    </form>
</div>
