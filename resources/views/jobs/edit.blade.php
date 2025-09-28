<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <!-- Hero Section -->
    <div class="bg-gray-900 text-center rounded-2xl p-10 shadow-lg mb-10">
        <h1 class="text-3xl font-bold text-white">Edit Job Opportunity</h1>
        <p class="mt-2 text-gray-400">Update the details below and save your changes.</p>
    </div>

    <!-- Job Form Card -->
    <div class="bg-white rounded-xl shadow-md p-8 max-w-3xl mx-auto">
        <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-8">
            @csrf
            @method('PATCH')

            <!-- Job Title -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $job->title) }}"
                    class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 
                    focus:ring-indigo-500 sm:text-sm px-3 py-2"
                    placeholder="e.g. Software Engineer" required>
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input type="text" name="salary" id="salary" value="{{ old('salary', $job->salary) }}"
                    class="mt-2 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 
                    focus:ring-indigo-500 sm:text-sm px-3 py-2"
                    placeholder="$60,000 - $80,000 / year" required>
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
                    placeholder="Describe the role, responsibilities, and requirements..." required>{{ old('description', $job->description ?? '') }}</textarea>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center">
                <!-- Delete Button -->
                <button form="delete-form" class="text-red-600 font-semibold hover:text-red-800 transition">
                    Delete
                </button>

                <!-- Cancel & Update -->
                <div class="flex space-x-4">
                    <a href="/jobs/{{ $job->id }}"
                        class="inline-block rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium 
                       text-gray-700 shadow-sm hover:bg-gray-50">
                        Cancel
                    </a>
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-5 py-2 text-sm font-semibold text-white shadow-sm 
                        hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                        Update Job
                    </button>
                </div>
            </div>
        </form>

        <!-- Hidden Delete Form -->
        <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden"
            onsubmit="return confirm('Are you sure you want to delete this job? This action cannot be undone.');">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
