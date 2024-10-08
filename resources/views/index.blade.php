@extends('layouts.app')


@section('content')

<!----  HERO  -----> 
<div class="hero-bg-image flex flex-col justify-center items-center  ">
    <h1 class="text-gray-100 uppercase text-5xl pb-10  font-bold text-center">welcome to my blog</h1>
    <a href="/" class="text-gray-700 bg-gray-100 py-4 px-5 text-xl font-bold rounded-lg uppercase">contact me</a>
</div>



<div class="container sm:grid grid-cols-2 gap-20 mx-auto py-15">
    <div class="mx-2"> 
        <img  class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
    </div>

<div class="flex flex-col items-left justify-center m-10 sm:0">
    <h2 class="font-bold text-4xl text-gray-700 uppercase">how to be expert in 2023</h2>
    <p class="font-bold text-xl text-gray-600 pt-2">With ower formation you be expert backend dev in 2023</p>
    <p class="text-sm text-gray-500 py-4 leading-5">with ower formation you be expert backend dev in 2023with ower formation you be expert backend dev in 2023with ower formation you be expert backend dev in 2023with ower formation you be expert backend dev in 2023with ower formation you be expert backend dev in 2023</p>
    <a class="text-gray-100 bg-gray-700 py-4 px-5 text-xl font-bold rounded-lg uppercase place-self-start" href="/">
        Read more
    </a>
</div>
</div>



<!--  ----blog categories----      -->

<div class="text-gray-100 bg-gray-700 p-10 text-center">

    <h2>
        blog categories        
    </h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4">
         <div class="font-bold text-2xl py-2">first ones</div>
         <div class="font-bold text-2xl py-2">first ones</div>
         <div class="font-bold text-2xl py-2">first ones</div>
         <div class="font-bold text-2xl py-2">first ones</div>

    </div>
</div>

<div class="container mx-auto py-15 text-center ">
<h2 class="font-bold py-10 text-5xl">xxxxx</h2>
<P class="text-gray-600 leading-5 px-10 ">

    PHP: Hypertext Preprocessor52, plus connu sous son sigle PHP (sigle auto-référentiel), est un langage de programmation libre53, principalement utilisé pour produire des pages Web dynamiques via un serveur web52, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.

</P>
</div>
<div class="bg-blue-600 container sm:grid grid-cols-2 w-4/5  mx-auto inline-block">
    <div class="bg-yellow-700  text-gray-100 py-5 px-2">
        <div class="block m-5  px-0  w-4/5" gap-2>
            <ul class="md:flex text-xs gap-2 bg-yellow-600">
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-2 hover:text-yellow-100 hover:bg-yellow-500 transiton duration-300 ">PHP</li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-2 hover:text-yellow-100 hover:bg-yellow-500 transiton duration-300 ">PHP</li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-2 hover:text-yellow-100 hover:bg-yellow-500 transiton duration-300 ">PHP</li>
                <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-2 hover:text-yellow-100 hover:bg-yellow-500 transiton duration-300 ">PHP</li>
            </ul>

        </div>
        <P class="text-gray-100 leading-5 px-5   my-5  ">

            PHP: Hypertext Preprocessor52, plus connu sous son sigle PHP (sigle auto-référentiel), est un langage de programmation libre53, principalement utilisé pour produire des pages Web dynamiques via un serveur web52, mais pouvant également fonctionner comme n'importe quel langage interprété de façon locale. PHP est un langage impératif orienté objet.
        
        </P>
        <a class="text-gray-100 bg-transparent hover:bg-orange-400 mx-5 py-2 px-2 mb-2 text-l font-bold rounded-lg uppercase border-2 inline-block" href="/">
            Read more
        </a>
    </div>
    <div class="flex">
        <img class="object-cover" src="https://picsum.photos/id/242/960/620" alt="">
    </div>
</div>




<!-- --------------------------------------------------------------   -->




<!-- --------------------------------------------------------------- -->









@endsection