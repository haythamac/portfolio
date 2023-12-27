<div class="w-128">
    <h2 class="text-[#07074D] text-lg font-semibold mb-4">Add Category</h2>

    <!-- Livewire skill form -->
    <form action="{{ route('skill.category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                Name
            </label>
            <input name="name" type="text" id="name" placeholder="Name of the skill"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Add skill button -->
        <button type="submit"
            class="uppercase text-white bg-blue-700 hover:bg-yellow-400 hover:text-black p-3 mt-4 rounded duration-500">Add
            Category</button>
    </form>
</div>
