<x-layout>
    <x-slot name="heading">
        Job Details
    </x-slot>

    <div class="max-w-6xl mx-auto px-6 py-12 relative z-10">

        <div class="mb-10 text-center">
            <h2 class="text-5xl font-extrabold text-slate-800 tracking-tight leading-tight">
                {{ $job->title }}
            </h2>
            <p class="text-xl text-gray-500 mt-2">
                <span class="font-medium text-blue-500">{{ $job->employer->name }}</span>
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                <p class="text-2xl font-bold text-gray-900 mb-2">
                    <span class="text-blue-500">💰</span> Salary
                </p>
                <p class="text-xl font-semibold text-gray-700">
                    ${{ $job->salary }} USD
                </p>
            </div>

            @if ($job->location)
                <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
                    <p class="text-2xl font-bold text-gray-900 mb-2">
                        <span class="text-blue-500">📍</span> Location
                    </p>
                    <p class="text-xl font-semibold text-gray-700">
                        {{ $job->location }}
                    </p>
                </div>
            @endif
        </div>

        <div class="bg-white rounded-2xl p-10 shadow-lg border border-gray-100">
            <h3 class="text-3xl font-bold text-gray-800 mb-4">Description</h3>
            <p class="text-lg text-gray-700 leading-relaxed">
                {{ $job->description ?? 'No detailed description available for this position.' }}
            </p>
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-center mt-12 space-x-6">
            <a href="/jobs"
                class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-full
                shadow-lg hover:bg-blue-700 transition transform hover:-translate-y-1">
                <span class="mr-2">←</span> Back to all Jobs
            </a>

            <a href="/jobs/{{ $job->id }}/edit"
                class="inline-flex items-center justify-center px-8 py-4 bg-indigo-600 text-white font-semibold rounded-full
                shadow-lg hover:bg-indigo-700 transition transform hover:-translate-y-1">
                ✏️ Edit Job
            </a>
        </div>
    </div>
</x-layout>
