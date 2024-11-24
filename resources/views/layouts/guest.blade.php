<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class=" text-gray-900  bg-black h-screen ">
        {{-- <div class="flex items-center w-full flex-row justify-between">
            <div class="bg-red-200 mr-[20px] h-full w-[]">
                <div class="m-20 px-16 py-20 bg-white"> 
                    {{ $slot }}
                </div>
            </div>

 
           

        </div> --}}
  
      



{{-- 
    <!-- Image on the left -->
    <div class="flex-shrink-0 w-[50%]">
        <img src="{{ asset('images/your-image.png') }}" alt="Image Description" class="h-32 w-auto">
    </div> --}}
    <div class="min-h-screen  flex">
        <!-- Left Side - Image -->
        {{-- <dotlottie-player w-2/6  bg-cover bg-center src="https://videos.pexels.com/video-files/27873881/12251488_1920_1080_30fps.mp4" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player>  --}}
        {{-- <div class="w-2/6  bg-cover bg-center border-2 border-white" ">
         <vedio src="{{ asset('images/12251488_1920_1080_30fps.mp4') }}" type="video/mp4" loop autoplay; alt=""> 
        </div> --}}
        <div class="relative h-screen w-full overflow-hidden">
            <video
              autoplay
              muted
              loop
              class="absolute top-0 left-0 w-full h-full object-cover"
             
            >
              <source src="{{ asset('images/12251488_1920_1080_30fps.mp4') }}" />
            </video>
            <div class="relative z-10 flex items-center justify-center h-full bg-black/50">
                <div class="w-3/5 flex items-center justify-center flex-col p-10  dark:bg-gray-800">
                    {{ $slot }}
                </div>
            </div>
          </div>
        <!-- Right Side - Form -->
       
      </div>
      
    </body>
</html>
