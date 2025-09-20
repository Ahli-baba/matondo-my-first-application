<x-layout>
    <x-slot name="heading">
        Opportunities
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 py-12 space-y-16">
        <div class="relative w-full text-center py-20 bg-slate-900 text-white rounded-3xl shadow-2xl">
            <div class="p-8">
                <h2 class="text-6xl font-extrabold mb-4 tracking-tight">Opportunities</h2>
                <p class="text-xl leading-relaxed max-w-2xl mx-auto mb-6">
                    Discover meaningful roles where your passion meets purpose. Join <span
                        class="font-semibold text-purple-400">InnovateX</span> and shape the future of technology.
                </p>
                <p class="text-gray-400 max-w-3xl mx-auto">
                    Whether you’re building groundbreaking software, developing AI solutions, or leading a team of
                    engineers — your journey starts here.
                </p>
            </div>
        </div>

        <div class="w-full space-y-6">
            @forelse ($jobs as $job)
                <a href="/jobs/{{ $job->id }}"
                    class="block p-8 bg-white/50 backdrop-blur-lg rounded-3xl shadow-xl hover:shadow-2xl hover:scale-[1.01] transform transition duration-300 border border-gray-100">
                    <div class="flex justify-between items-center mb-2">
                        <h3 class="text-2xl font-bold text-gray-800">{{ $job->title }}</h3>
                        <span class="font-semibold text-emerald-600 text-lg">{{ $job->salary }}</span>
                    </div>
                    <div class="text-sm text-gray-500 font-medium">{{ $job->employer->name ?? 'InnovateX' }}
                    </div>
                </a>
            @empty
                <div class="text-center p-12 bg-gray-50 rounded-xl">
                    <p class="text-gray-500 text-lg">No job openings at this time. Please check back later!</p>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>
