@extends("layouts.app")
@section("content")

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="font-bold text-6xl">All Posts </h1>
</div>

@if (Auth::check())
    

<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
    
        <a href="/blog/create" class="text-gray-100 bg-green-700 py-2 px-2  rounded-lg uppercase place-self-start" >
            Creer un nouveau article
        </a>
</div>
    
@endif


    <!-- ------------------------------------------------------------------------------- -->
@foreach ($postes as $poste)
     
        <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <div class="flex">
                <img class="object-cover" src="/images/{{$poste->image_path}}" alt="">
            </div>
            <div class="">
                <h2 class="font-bold text-4xl text-gray-700 py-3 md:pt-0 ">{{ $poste->title}} </h2>
                <span class="uppercase font-bold">{{$poste->categorie->slug  }} -BY: <span class="text-gray-500 italic">{{ $poste->user->name    }}</span></span>
                <span>on <span class="text-gray-500 italic">{{date('d-m-Y',strtotime($poste->updated_at))    }}</span></span>
                <p class="text-l text-gray-700 py-8 leading-8">
                    {{ $poste->description}}

                </p>
                <a href="/blog/{{$poste->slug}}" class="text-gray-100 bg-gray-700 py-4 px-5 text-xl font-bold rounded-lg uppercase place-self-start" >
                    Read more
                </a>
            </div>      
        </div>

@endforeach
<!-- ------------------------------------------------------------------------------- -->

@endsection