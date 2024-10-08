@extends("layouts.app")
@section("content")

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="font-bold text-6xl">All Posts </h1>
</div>
    <!-- ------------------------------------------------------------------------------- -->

             <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <div class="flex">
                <img class="object-cover" src="{{$poste->image_path}}" alt="">
            </div>
            <div class="">
                <h2 class="font-bold text-4xl text-gray-700 py-3 md:pt-0 ">{{ $poste->title}} </h2>
                <span>BY: <span class="text-gray-500 italic">}</dd>{{ Auth::user()->name }}{{ Auth::user()->id }}</span></span>
                <p class="text-l text-gray-700 py-8 leading-8">
                    {{ $poste->description}}

                </p>
                <a href="/blog/{{$poste->slug}}" class="text-gray-100 bg-gray-700 py-4 px-5 text-xl font-bold rounded-lg uppercase place-self-start" >
                    Read more
                </a>
            </div>      
        </div>


<!-- ------------------------------------------------------------------------------- -->

@endsection