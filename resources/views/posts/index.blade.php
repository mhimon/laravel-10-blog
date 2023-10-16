<x-page-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laravel Blog') }}
        </h2>
    </x-slot>

	<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
					<div class="flex flex-wrap w-full justify-between">
                    @if ( count( $posts ) > 0 )
						@foreach ( $posts as $post )
							<div class="relative flex w-1/3 my-6 px-2">
								<div class="flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
									<div class="relative m-0 overflow-hidden rounded-none bg-transparent bg-clip-border text-gray-700 shadow-none">
										<img
										src="{{ $post->thumbnail }}"
										alt="{{ $post->title }}"
										/>
									</div>
									<div class="p-6">
										<a href="{{ route( 'posts.show', $post->slug ) }}">
											<h4 class="block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
											{{ $post->title }}
											</h4>
										</a>
										<p class="mt-3 block font-sans text-xl font-normal leading-relaxed text-gray-700 antialiased">
										{{ substr( $post->content, 0, 100 ) }} ...
										</p>
									</div>
									<div class="flex items-center justify-between p-6">
										<div class="flex items-center -space-x-3">
										<img
											alt="natali craig"
											src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1061&amp;q=80"
											class="relative inline-block h-9 w-9 rounded-full border-2 border-white object-cover object-center hover:z-10"
											data-tooltip-target="author-1"
										/>

										</div>
										<p class="block font-sans text-base font-normal leading-relaxed text-inherit antialiased">
											{{ $post->created_at->format('M d, Y') }}
										</p>
									</div>
								</div>
							</div>
						@endforeach
					@else
						<p>No posts found.</p>
					@endif

					</div>
                </div>
            </div>
        </div>
    </div>

</x-page-layout>
