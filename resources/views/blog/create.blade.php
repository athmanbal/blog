@extends("layouts.app")
@section("content")

<div class="container m-auto text-center pt-15 pb-5">
    <h1 class="font-bold text-6xl">Creer un nouveau article </h1>
</div>



<div class="container sm:grid mx-auto p-5 border-b border-gray-300">
    
        <a href="/blog/store" class="text-gray-100 bg-green-700 py-2 px-2  rounded-lg uppercase place-self-start" >
            enregestrer
        </a>
</div>
    


<div class="container  sm:grid mx-auto p-5 border-b border-gray-300">
    <form 
        action="/blog" 
        method="post"
        enctype="multipart/form-data"
        
        >
        @csrf
    
        <input type="text" name="title" placeholder="Title" class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5">
        <textarea name="description" id="" cols="30" rows="10" class="w-full h-60 text-l rounded-lg shadow-lg border-b p-5 mb-5"></textarea>


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
        
        >Submit the poste</button>
    </form>

</div>

    <!-- ------------------------------------------------------------------------------- -->



<!-- ------------------------------------------------------------------------------- -->

@endsection