<x-page-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $post->title }}
        </h2>
    </x-slot>

	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-8">
					<div class="relative m-0 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none mb-6">
						<img
						src="{{ $post->thumbnail }}"
						alt="{{ $post->title }}"
						class="relative w-full h-96 rounded-xl object-cover object-center shadow-md"
						/>
					</div>
					<h1 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased"> {{ $post->title }} </h1>

					<p class="mt-3 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
						{{ $post->content }}
					</p>
				</div>

            </div>
        </div>
    </div>

</x-page-layout>
