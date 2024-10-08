@extends("layouts.app")
@section("content")

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="font-bold text-6xl">update un nouveau article </h1>
</div>


@if (count($errors) > 0)
    <div class="bg-red-800 text-center py-4 lg:px-4">
    <div class="p-2 bg-red-400 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
        <span class="flex rounded-full bg-red-900 uppercase px-2 py-1 text-xs font-bold mr-3">alert</span>
        <span class="font-semibold mr-2 text-left flex-auto">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        
        </span>
        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
    </div>
    </div>

@endif


<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
    
        <a href="/blog/store" class="text-gray-100 bg-green-700 py-2 px-2  rounded-lg uppercase place-self-start" >
            enregestrer
        </a>
</div>
    


<div class="container  sm:grid mx-auto p-5 border-b border-gray-300">
    <form 
        action="/blog/{{$poste->slug}}" 
        method="post"
        enctype="multipart/form-data"
        
        >
        @csrf
        @method('PUT')
    
        <input 
            type="text" 
            name="title" 
            placeholder="Title"
            value="{{$poste->title}}" 
            class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5" >
        <textarea 
            name="description" 
            id="" cols="30" 
            rows="10" 
          
            class="w-full h-60 text-l rounded-lg shadow-lg border-b p-5 mb-5">{{$poste->description}}</textarea>


        <div class="py-15">
            <label class="
                                bg-gray-200 hover:bg-gray-700 
                                text-gray-700 hover:text-gray-200
                                transition duraion-300
                                corsor-pointe
                                p-5 rounded-lg
                                font-bold uppercase
             ">
                <span>select an imzge to uplaod</span>
            
                 <input type="file" name="image_path"  class="hidden">
            </label>
        </div>
        
        <button type="submit"
                class="bg-green-700 hover:bg-green-400
                       text-gray-200 hover:text-gray-700
                       transition duraion-300
                                corsor-pointe
                                p-5 rounded-lg
                                font-bold uppercase mb-2"
        
        > update</button>
    </form>

</div>

    <!-- ------------------------------------------------------------------------------- -->



<!-- ------------------------------------------------------------------------------- -->

@endsection