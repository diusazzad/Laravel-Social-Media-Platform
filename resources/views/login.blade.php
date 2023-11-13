@extends('layouts.app')

@section('content')
<div class="flex flex-col items-center justify-center px-4 py-12 bg-gray-100 md:flex-row sm:px-6 lg:px-8">
    <div class="md:w-1/2">
        <img class="object-cover w-full h-48 rounded-lg shadow-lg md:w-96"
            src="https://images.unsplash.com/photo-1509822929063-6b6cfc9b42f2?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Login Image">
    </div>
    <div class="md:w-1/2 md:ml-8">
        <div class="mb-4 text-center">
            <h2 class="text-2xl font-bold text-gray-800">Login</h2>
            <p class="text-gray-500">Or login with social media</p>
        </div>
        <div class="flex justify-center mb-4 space-x-4">
            <a href="#" class="px-4 py-2 font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700">
                <i class="mr-2 fab fa-facebook-f"></i>Facebook
            </a>
            <a href="#" class="px-4 py-2 font-bold text-white bg-red-600 rounded-full hover:bg-red-700">
                <i class="mr-2 fab fa-google"></i>Google
            </a>
            <a href="#" class="px-4 py-2 font-bold text-white bg-blue-400 rounded-full hover:bg-blue-500">
                <i class="mr-2 fab fa-twitter"></i>Twitter
            </a>
        </div>
        <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded-lg shadow-lg">
            <div class="mb-4">
                <label class="block mb-2 font-bold text-gray-700" for="username">
                    Username
                </label>
                <input
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="Username">
            </div>
            <div class="mb-6">
                <label class="block mb-2 font-bold text-gray-700" for="password">
                    Password
                </label>
                <input
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                    id="password" type="password" placeholder="******************">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline"
                    type="button">
                    Sign In
                </button>
                <a class="inline-block text-sm font-bold text-blue-500 align-baseline hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </div>
        </form>
    </div>
</div>


@endsection
