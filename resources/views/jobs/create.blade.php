<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <!-- Hero Section -->
    <div class="bg-gray-900 text-center rounded-2xl p-10 shadow-lg mb-10">
        <h1 class="text-3xl font-bold text-white">Create a New Opportunity</h1>
        <p class="mt-2 text-gray-400">Fill out the details below to post your job and connect with talent.</p>
    </div>

    <!-- Job Form Card -->
    <div class="bg-white rounded-xl shadow-md p-8 max-w-3xl mx-auto">
        <form method="POST" action="/jobs" class="space-y-8">
            @csrf

            <!-- Job Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <input type="text" name="title" id="title" value="{{ old('title') }}"
                    class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 
                    focus:ring-indigo-500 sm:text-sm px-3 py-2"
                    placeholder="e.g. Software Engineer" required>

                <!-- Error for Title -->
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input type="text" name="salary" id="salary" value="{{ old('salary') }}"
                    class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 
                    focus:ring-indigo-500 sm:text-sm px-3 py-2"
                    placeholder="$60,000 - $80,000 / year" required>

                <!-- Error for Salary -->
                @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700">Job Description</label>
                <textarea name="description" id="description" rows="4"
                    class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 
                    focus:ring-indigo-500 sm:text-sm px-3 py-2"
                    placeholder="Describe the role, responsibilities, and requirements..." required>{{ old('description') }}</textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end space-x-4">
                <a href="/jobs"
                    class="inline-block rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium 
                   text-gray-700 shadow-sm hover:bg-gray-50">
                    Cancel
                </a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm 
                    hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                    Save Job
                </button>
            </div>
        </form>
    </div>
</x-layout>
