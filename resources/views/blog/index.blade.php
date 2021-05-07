@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Blog Posts
        </h1>
    </div>
</div>

<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <img src="https://cdn.pixabay.com/photo/2020/04/08/16/32/keyboard-5017973_960_720.jpg" width="500" alt="">
    </div>
    <div>
        <h2 class="text-gray-700 font-bold text-5xl pb-4">
            Learn how to write Laravel code
        </h2>

        <span class="text-gray-500">
            By <span class="font-bold italic text-gray-800">DevCademy</span> , 1 day ago
        </span>

        <p class="text-l text-gray-700 pt-8 pb-10 leading-8 font-light">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolor voluptas id quasi neque dicta omnis hic adipisci officia odio at totam, ut, dolorum voluptatum, quidem est eveniet earum quaerat?
        </p>

        <a href="" class="uppercase bg-blue-500 text-gray-100 text-l font-extrabold py-4 px-8 rounded-3xl">
            KEEP READING
        </a>
    </div>

</div>

@endsection