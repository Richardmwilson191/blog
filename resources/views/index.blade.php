@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a href="/blog" class=""text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold>
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div  class="sm:grid grid-cols-2 gap-20 w-25 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2020/04/08/16/32/keyboard-5017973_960_720.jpg" width="400" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to learn web development?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto similique vitae sunt impedit corporis autem tenetur optio maiores nulla commodi odio excepturi, facilis perspiciatis. Quisquam voluptatum cumque repellendus velit commodi?
            </p>
            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto similique vitae sunt impedit corporis autem tenetur optio maiores nulla commodi odio excepturi, facilis perspiciatis. Quisquam voluptatum cumque repellendus velit commodi?
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>

    </div>
    
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-xl pb-5">
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-2xl py-1">
            Backend Developement
        </span>
        <span class="font-extrabold block text-2xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-2xl py-1">
            Mobile Developement
        </span>
        <span class="font-extrabold block text-2xl py-1">
            Software Design
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-2xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo et quas possimus placeat suscipit veniam, pariatur voluptatem nostrum ipsum ab odio exercitationem sit beatae porro, culpa libero tempora expedita quaerat!
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-blue-600 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-l font-extrabold">
                    {{ $post->title }}
                </span>

                <h3 class="text-l font-bold py-10 text-gray-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, omnis? Aspernatur, adipisci! Quos, deserunt consectetur nemo iure reiciendis provident, quam, libero natus ex autem inventore ipsam deleniti maxime perspiciatis architecto.
                </h3>

                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 
                    text-gray-100 text-xs font-extrabold py-3 px-5 rounded-2xl">
                    Find Out More
                </a>
            </div>
        </div>

        <div>
            <img src="https://cdn.pixabay.com/photo/2020/04/08/16/32/keyboard-5017973_960_720.jpg" width="500" alt="">
        </div>

    </div>

@endsection