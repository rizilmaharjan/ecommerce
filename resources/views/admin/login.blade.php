<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel Shop :: Administration</title>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white w-1/4 rounded-sm shadow-lg ">
            @include('admin.message')
            <div class="h-1 bg-blue-600"></div>
            <h1 class="text-2xl text-center p-3 text-gray-600">Administrative Panel</h1>
            <hr class="w-full" >
            <p class="text-center text-gray-600/80 font-semibold my-3">Sign in to start your session</p>
            {{-- login form --}}
            <form action="{{ route('admin.authenticate') }}" method="post" class="p-4">
                @csrf
                <input type="email" value="{{ old('email') }}" placeholder="Email" name="email" class="border-2 p-1 w-full">
                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                    
                @enderror
                <p></p>
                <input type="password" name="password" placeholder="Password" class="border-2 p-1 w-full mt-3">
                @error('password')
                    <p class="text-red-500">{{ $message }}</p>
                    
                @enderror
                <button class="bg-blue-600 text-white font-semibold rounded-md w-1/4 py-2 mt-3">Login</button>
                <p class="text-blue-600 mt-3 text-sm">I forget my password</p>
            </form>

        </div>
    </div>
</body>
</html>