<x-app-layout>

       
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <body class="bg-black">
        <div class="flex h-screen bg-black">
             <!-- Sidebar -->
                      
             <div class=" items-center    h-[100vh]  md:flex flex-col     border-r ">
                <div class="flex mt-12 items-center justify-center ">
                   
                </div>
                <ul class="flex flex-col gap-6 py-4 pr-3 ">
                    <li class="">
                        <a href="{{ route('dashboard') }}" class="flex flex-row items-center h-12 ml-4 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                                <svg  class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 12.2039V13.725C22 17.6258 22 19.5763 20.8284 20.7881C19.6569 22 17.7712 22 14 22H10C6.22876 22 4.34315 22 3.17157 20.7881C2 19.5763 2 17.6258 2 13.725V12.2039C2 9.91549 2 8.77128 2.5192 7.82274C3.0384 6.87421 3.98695 6.28551 5.88403 5.10813L7.88403 3.86687C9.88939 2.62229 10.8921 2 12 2C13.1079 2 14.1106 2.62229 16.116 3.86687L18.116 5.10812C20.0131 6.28551 20.9616 6.87421 21.4808 7.82274" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M15 18H9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            </span>
                           
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('Task') }}" class="flex flex-row items-center  ml-4  h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 16.0002C21 18.8286 21 20.2429 20.1213 21.1215C19.2426 22.0002 17.8284 22.0002 15 22.0002H9C6.17157 22.0002 4.75736 22.0002 3.87868 21.1215C3 20.2429 3 18.8286 3 16.0002V13.0002M16 4.00195C18.175 4.01406 19.3529 4.11051 20.1213 4.87889C21 5.75757 21 7.17179 21 10.0002V12.0002M8 4.00195C5.82497 4.01406 4.64706 4.11051 3.87868 4.87889C3.11032 5.64725 3.01385 6.82511 3.00174 9" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M9 17.5H15" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z" stroke="#ffffff" stroke-width="1.5"></path> <path d="M8 14H9M16 14H12" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17 10.5H15M12 10.5H7" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            </span>
                            {{-- <span class="text-l font-medium">Tasks</span> --}}
                        </a>
                    </li>
                    <li class="">
                        <a  href="{{ route('Team') }}" class="flex flex-row items-center  ml-4  h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="10" cy="6" r="4" stroke="#ffffff" stroke-width="1.5"></circle> <path d="M21 10H19M19 10H17M19 10L19 8M19 10L19 12" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17.9975 18C18 17.8358 18 17.669 18 17.5C18 15.0147 14.4183 13 10 13C5.58172 13 2 15.0147 2 17.5C2 19.9853 2 22 10 22C12.231 22 13.8398 21.8433 15 21.5634" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            </span>
                            {{-- <span class="text-l font-medium">Team</span> --}}
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('Calendar') }}" class="flex flex-row items-center  ml-4  h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                                <svg  class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 16L16 16M16 16L14 16M16 16L16 14M16 16L16 18" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 4V2.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17 4V2.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                            </span>
                            {{-- <span class="text-l font-medium">Calendar</span> --}}
                        </a>
                    </li>
                  
                    <li class="   mt-[34vh]">
                        <a href="#" class="hidden   sm:flex sm:items-center sm:ms-6 flex-row items-center  ml-4   transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                             
                               <x-dropdown align="right" width="">
                                <x-slot name="trigger">
                                    <button class="inline-flex items-center   border border-transparent text-sm  font-medium rounded-md text-white dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
         
                                        <div class="">
                                            <svg class="w-6 h-6 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14 20H6C4.89543 20 4 19.1046 4 18L4 6C4 4.89543 4.89543 4 6 4H14M10 12H21M21 12L18 15M21 12L18 9" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                        </div>
                                        {{-- <div class="text-l  ml-2 font-medium"">Setting</div> --}}
 
                                    </button>
                                  
                                </x-slot>
 
                                <x-slot name="content">
                                    {{-- <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link> --}}
            
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
            
                                        <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
    
    
                            </x-dropdown>
                        </a>
                    </li>
                </ul>
            </div>
            <main class="flex-1 ">
                <!-- Header -->
                <header class="flex  pl-6 pt-6 mb-2  justify-between items-center ">
<div>             
           <h1 class="text-2xl text-white font-bold"> Hello {{ Auth::user()->name }} 👋</h1>
    <p class="text-muted-foreground text-white"> Start Your Day & Be Productive </p></div>
                    <div class="flex items-center space-x-4">
                        <Input
                        type="search"
                        placeholder="Start searching here..."
                        class="pl-8 w-[300px] rounded-2xl"
                      />
                        <x-dropdown align="right" width="">
                                   <x-slot name="trigger">
                                        <img src="{{ asset('images/Capture d’écran (146).png') }}" class="w-9 h-9 rounded-full" alt="Profile">
                                     
                                   </x-slot>
    
                                   <x-slot name="content">
                                       <x-dropdown-link :href="route('profile.edit')">
                                           {{ __('Profile') }}
                                       </x-dropdown-link>
               
                                       
                                       
                                   </x-slot>
       
       
                               </x-dropdown>
                    </div>
                </header>
                <!-- Content Grid -->
               
                            <div class="flex   border-t justify-center  flex-row  ">
                                <div class=" gap-4 w-[73vw] p-3  flex flex-col ">
                                  
                                    <div class="   ">
                                       
                                        <div class=" grid-cols-1 flex items-center justify-center md:grid-cols-2 lg:grid-cols-3 gap-6">
                                           
                                               
   
  

                  
                                            <!-- Tasks Card -->
                                            <div class="bg-black  border  rounded-xl w-[40vw] h-[36vh] p-3 shadow-md overflow-hidden">
                                                <div class="bg-secondary flex justify-between text-white ">
                                                    <h2 class="text-xl text-white pb-2 font-semibold">Today's metting</h2>
                                                    <a href="{{ route('Team') }}" class="text-blue-600 text-l  font-base "> + Add Team </a>
                                                </div>
                                                <div class=" flex justify-center items-center   flex-col">
                                                    <div class="flex gap-6 flex-row">
                                                        <div class="  border-[#02098c]  flex w-[15vw]  p-3 border-2  rounded-2xl flex-col"> 
                                                         <div class="pb-4">
                                                            <div class="flex  justify-between">
                                                                <h1 class="text-white">10:00 AM</h1>
                                                      <div>
                                                        <svg height="25px" width="30px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M81.836,113.484c35.43,0,42.523-27.531,42.523-42.546V56.414c0-15.016-7.094-42.539-42.523-42.539 c-35.422,0-42.515,27.523-42.515,42.539v14.523C39.321,85.953,46.414,113.484,81.836,113.484z"></path> <path class="st0" d="M248,184l-59.414,29.117L156,160c-9.554-15.578-21.906-27.734-39.438-27.734H89.836H51.789 C23.188,132.266,0,156.836,0,187.141v157.797h35.016V512h33.882l20.938-152.203L110.782,512h33.882V270.625v-39.75L173.336,264 L264,208L248,184z"></path> <path class="st0" d="M512,48V24h-16H360V0h-32v24H192h-16v24h16v140.078l2.618,4.266L208,185.789V48h272v240H208v-26.602l-16,9.883 V288h-16v24h16h144.25v63.078l-54.844,104.71c-7.977,0.805-14.218,7.462-14.218,15.649c0,8.734,7.078,15.813,15.812,15.813 c8.734,0,15.813-7.078,15.813-15.813c0-3.352-1.055-6.446-2.836-9l40.274-76.883V488h16v-76.531l39.492,75.39 c-1.602,2.477-2.554,5.414-2.554,8.578c0,8.734,7.078,15.813,15.812,15.813c8.734,0,15.813-7.078,15.813-15.813 c0-8.367-6.516-15.149-14.742-15.703l-53.82-102.742V312H496h16v-24h-16V48H512z"></path> </g> </g></svg></div>
                                                        </div>
                                                        
                                                       
                                                        <p class="text-sm text-gray-400 flex items-center justify-center ">present the project and gather feedback.</p>
                        
                                                         </div>
                                                            <div class=" border-t pb-2 pt-4">
                                                                <div class="flex justify-between">
                                                                <h1 class="text-white">12:00 AM</h1>

                                                            <svg fill="#ffffff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M76.8,443.733c-23.563,0-42.667,19.104-42.667,42.667v17.067c0,4.713,3.82,8.533,8.533,8.533h68.267 c4.713,0,8.533-3.82,8.533-8.533V486.4C119.467,462.837,100.363,443.733,76.8,443.733z M102.4,494.933H51.2V486.4 c0-14.137,11.463-25.6,25.6-25.6s25.6,11.463,25.6,25.6V494.933z"></path> <path d="M76.8,426.667c18.853,0,34.133-15.281,34.133-34.133c0-18.853-15.281-34.133-34.133-34.133s-34.133,15.281-34.133,34.133 C42.667,411.386,57.947,426.667,76.8,426.667z M76.8,375.467c9.427,0,17.067,7.64,17.067,17.067 c0,9.427-7.64,17.067-17.067,17.067s-17.067-7.64-17.067-17.067C59.733,383.106,67.373,375.467,76.8,375.467z"></path> <path d="M256,443.733c-23.563,0-42.667,19.104-42.667,42.667v17.067c0,4.713,3.82,8.533,8.533,8.533h68.267 c4.713,0,8.533-3.82,8.533-8.533V486.4C298.667,462.837,279.563,443.733,256,443.733z M281.6,494.933h-51.2V486.4 c0-14.137,11.463-25.6,25.6-25.6c14.137,0,25.6,11.463,25.6,25.6V494.933z"></path> <path d="M221.867,392.533c0,18.853,15.281,34.133,34.133,34.133s34.133-15.281,34.133-34.133 c0-18.853-15.281-34.133-34.133-34.133S221.867,373.681,221.867,392.533z M273.067,392.533c0,9.427-7.64,17.067-17.067,17.067 c-9.427,0-17.067-7.64-17.067-17.067c0-9.427,7.64-17.067,17.067-17.067C265.427,375.467,273.067,383.106,273.067,392.533z"></path> <path d="M435.2,443.733c-23.563,0-42.667,19.104-42.667,42.667v17.067c0,4.713,3.82,8.533,8.533,8.533h68.267 c4.713,0,8.533-3.82,8.533-8.533V486.4C477.867,462.837,458.763,443.733,435.2,443.733z M460.8,494.933h-51.2V486.4 c0-14.137,11.463-25.6,25.6-25.6c14.137,0,25.6,11.463,25.6,25.6V494.933z"></path> <path d="M401.067,392.533c0,18.853,15.281,34.133,34.133,34.133c18.853,0,34.133-15.281,34.133-34.133 c0-18.853-15.281-34.133-34.133-34.133C416.347,358.4,401.067,373.681,401.067,392.533z M452.267,392.533 c0,9.427-7.64,17.067-17.067,17.067s-17.067-7.64-17.067-17.067c0-9.427,7.64-17.067,17.067-17.067 S452.267,383.106,452.267,392.533z"></path> <path d="M76.8,341.333c4.713,0,8.533-3.821,8.533-8.533v-25.6h162.133v25.6c0,4.713,3.82,8.533,8.533,8.533 c4.713,0,8.533-3.821,8.533-8.533v-25.6h162.133v25.6c0,4.713,3.82,8.533,8.533,8.533s8.533-3.821,8.533-8.533v-34.133 c0-4.713-3.82-8.533-8.533-8.533H264.533v-25.6h25.6c3.489,0,6.627-2.124,7.923-5.364l17.006-42.516c0,0,0,0,0,0l0.06-0.15 c0.018-0.046,0.028-0.092,0.045-0.137c0.094-0.246,0.177-0.497,0.248-0.754c0.032-0.115,0.062-0.231,0.089-0.346 c0.042-0.182,0.076-0.366,0.107-0.552c0.026-0.157,0.055-0.314,0.072-0.471c0.01-0.09,0.011-0.182,0.018-0.273 c0.02-0.257,0.036-0.514,0.032-0.768v-45.65c0-0.411-0.031-0.811-0.085-1.202c20.896-17.216,34.219-43.292,34.219-72.481 C349.867,42.024,307.842,0,256,0c-51.842,0-93.867,42.024-93.867,93.867c0,29.189,13.323,55.265,34.219,72.481 c-0.054,0.391-0.085,0.792-0.085,1.202v45.65c-0.004,0.255,0.012,0.511,0.032,0.768c0.007,0.091,0.008,0.183,0.018,0.273 c0.017,0.157,0.046,0.313,0.072,0.471c0.03,0.186,0.064,0.37,0.107,0.552c0.027,0.116,0.057,0.231,0.089,0.346 c0.071,0.257,0.154,0.508,0.248,0.754c0.017,0.046,0.027,0.092,0.045,0.137l0.06,0.15c0,0,0,0,0,0l17.006,42.516 c1.296,3.24,4.434,5.364,7.923,5.364h25.6v25.6H76.8c-4.713,0-8.533,3.82-8.533,8.533V332.8 C68.267,337.513,72.087,341.333,76.8,341.333z M179.2,93.867c0-42.417,34.383-76.8,76.8-76.8s76.8,34.383,76.8,76.8 c0,39.531-29.868,72.07-68.267,76.317V128h8.533c4.713,0,8.533-3.82,8.533-8.533s-3.82-8.533-8.533-8.533h-8.533V93.867h8.533 c4.713,0,8.533-3.821,8.533-8.533s-3.82-8.533-8.533-8.533h-8.533V59.733c0-4.713-3.82-8.533-8.533-8.533 c-4.713,0-8.533,3.82-8.533,8.533V76.8h-8.533c-4.713,0-8.533,3.82-8.533,8.533s3.821,8.533,8.533,8.533h8.533v17.067h-8.533 c-4.713,0-8.533,3.82-8.533,8.533s3.821,8.533,8.533,8.533h8.533v42.184C209.068,165.937,179.2,133.398,179.2,93.867z M256,187.733c0.313,0,0.624-0.009,0.936-0.012c14.345-0.106,28.387-2.634,41.731-7.398v24.475h-85.333v-24.475 c13.344,4.764,27.385,7.292,41.731,7.398C255.376,187.725,255.687,187.733,256,187.733z M217.404,221.867h77.192l-10.24,25.6 h-56.712L217.404,221.867z"></path> </g> </g> </g> </g></svg>
                                                        </div>
                                                             <p class="text-sm text-gray-400 flex items-center justify-center ">Metting with UI and UX teams.</p>
                                                            </div>
                                                   
                                                
                                                        </div>
                                                        
                                                    <div class=" border-2  border-[#02098c] flex w-[15vw]   rounded-2xl p-3 flex-col">
                                                       <div class=" border-b  pb-8">
                                                        <div class="flex  justify-between">
                                          
                                                            <h1 class="text-white">14:00 AM</h1>

                                                         <div>
                                                            <svg height="25px" width="30px" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 400 400.00001" id="svg2" version="1.1" inkscape:version="0.91 r13725" sodipodi:docname="project.svg" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs4"></defs> <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#ffffff" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="1.4" inkscape:cx="90.721604" inkscape:cy="166.49755" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="false" units="px" showguides="true" inkscape:guide-bbox="true" inkscape:window-width="1920" inkscape:window-height="1056" inkscape:window-x="0" inkscape:window-y="24" inkscape:window-maximized="1"> <sodipodi:guide position="200.71429,121.42857" orientation="1,0" id="guide23298"></sodipodi:guide> </sodipodi:namedview> <metadata id="metadata7"> <rdf:rdf> <cc:work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title></dc:title> </cc:work> </rdf:rdf> </metadata> <g inkscape:label="Capa 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-652.36216)"> <path style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:25;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" d="m 237.4297,701.86214 0,40 -186,0 0,49.6914 -51.4297,0 0,211.30866 400,0 0,-300.00006 0,-1 -137.5703,0 z m 25,25 112.5703,0 0,251 -50,0 0,-185.42 -0.1621,0 0,-0.8886 -248.4082,0 0,-24.6914 186,0.9453 z" id="folder" inkscape:connector-curvature="0" sodipodi:nodetypes="cccccccccccccccccccccc"> <title id="title23866">folder</title> </path> </g> </g></svg>
                                                        </div>
                                                        
                                                    </div>
                                                    <p class="text-sm text-gray-400 pt-1">Onboardinf of the project.</p>
                                                       </div>
                                                        

                                                        <div class="  pt-4">
                                                            {{-- <a href="{{ route('Team') }}" class=" ">
                                                                <svg class="w-9 h-9 flex items-center justify-center ml-[6vw] mb-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                                            </a>
                                                         <p class="text-sm text-gray-400 flex items-center justify-center ">
                                                            Metting with UI and UX teams.</p> --}}
                                                        </div>
                                                  
                                                    </div>
                                                </div>



                                                <div >
                                                    <div >
                                                        <div >
                                                           
                                                                 
                                                               
                                                                   <div>
                                                                   
                                                                </div>
                                                        </div>
                                                        
                                                       
                                                       
</div>
                                          
                                            </div>

                                                   
                                                </div>
                                            </div>
                                
                                            <!-- Create Team Card -->
                                            <div class="bg-[#101010] border-2  rounded-xl w-[40vw] h-[36vh]  p-3  shadow-md overflow-hidden">
                                               
                                                <div class="bg-secondary flex justify-between text-white ">
                                                    <h2 class="text-xl text-white pb-2 font-semibold">Personal Task</h2>
                                                    <a href="{{ route('Task') }}" class="text-blue-600 text-l font-base "> + Add Task </a>
                                                </div>
                                                <div class="p-2 gap-2   border-t flex flex-col">
                                                     <div>

                                                        <h1 class="border rounded-full flex items-center justify-center p-1 mt-1 w-[8vw]   bg-gradient-to-br from-[#040004] via-[#020cb9] to-[#010004]  text-white "> Presentation </h1>
                                                     </div>


                                                    
                                                    <div class=" flex flex-row  text-white    rounded-2xl p-1 mb-10 ">
 
                                                        <div class="flex  flex-col ">
                                               
                                                         
                                                         <p class="text-[#858585] text-sm"> Task Management App</p>
                                                      
                                                        <h1 class="text-center pt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit ipsam saepe voluptate fuga, quam veritatis fugiat tempora maiores? Quis voluptates commodi similique reprehenderit sequi debitis? </h1>
                                                       
                                                        </div>
                                                       
                                                        {{-- <div class=" "><svg fill="#fbba37" height="20px" width="20px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" stroke="#fbba37" stroke-width="0.64"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M29.3,12.7c-0.1-0.4-0.5-0.7-1-0.7h-8.7L17,3.7c-0.1-0.4-0.5-0.7-1-0.7s-0.8,0.3-1,0.7L12.4,12H3.7c-0.4,0-0.8,0.3-1,0.7 c-0.1,0.4,0,0.9,0.4,1.1l7,5.1l-2.7,8.3c-0.1,0.4,0,0.9,0.4,1.1c0.4,0.3,0.8,0.3,1.2,0l7-5.1l7,5.1c0.2,0.1,0.4,0.2,0.6,0.2 s0.4-0.1,0.6-0.2c0.4-0.3,0.5-0.7,0.4-1.1l-2.7-8.3l7-5.1C29.2,13.6,29.4,13.1,29.3,12.7z"></path> </g></svg></div> --}}
                                                       </div>
                                                       

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="  text-white ">
                                        <!-- Calendar Header -->
                                        <form class="hidden" method="post" class="" action="{{ route('calendar.store') }}">
                                            @csrf
                                            <input name="start" id="start" type="datetime-local">
                                            <input name="end" id="end" type="datetime-local">
                                            <button id="submitEvent">submit</button>
                                        </form>   
                                        <div class="">
                                            <form class="hidden" id="updateForm" method="post" action="">
                                                @csrf @method('PUT')
                                                <input id="updatedStart" name="start" type="hidden">
                                                <input id="updatedEnd" name="end" type="hidden">
                                                <button id="submitUpdate"></button>
                                            </form>
                                        </div>
                                        <div class=" h-[45vh]   " id="calendar"></div>
                                        <script>
                                            document.addEventListener('DOMContentLoaded', async function() {
                                                let response = await axios.get("/calendar/create")
                                                let events = response.data.events
                                
                                                let nowDate = new Date()
                                                let day = nowDate.getDate()
                                                let month = nowDate.getMonth() + 1
                                                let hours = nowDate.getHours()
                                                let minutes = nowDate.getMinutes()
                                                let minTimeAllowed =
                                                    `${nowDate.getFullYear()}-${month < 10 ? "0"+month : month}-${day < 10 ? "0"+day : day}T${hours < 10 ? "0"+hours : hours}:${minutes < 10 ? "0"+minutes : minutes}:00`
                                                start.min = minTimeAllowed;
                                
                                
                                                var myCalendar = document.getElementById('calendar');
                                
                                
                                
                                                var calendar = new FullCalendar.Calendar(myCalendar, {
                                
                                                    headerToolbar: {
                                                        left: '',
                                                        center: '',
                                                        right: ''
                                                    },
                                
                                
                                                    views: {
                                                        listDay: { // Customize the name for listDay
                                                            buttonText: 'Day Events',
                                
                                                        },
                                                        listWeek: { // Customize the name for listWeek
                                                            buttonText: 'Week Events'
                                                        },
                                                        listMonth: { // Customize the name for listMonth
                                                            buttonText: 'Month Events'
                                                        },
                                                        timeGridWeek: {
                                                            buttonText: 'Week', // Customize the button text
                                                        },
                                                        timeGridDay: {
                                                            buttonText: "Day",
                                                        },
                                                        dayGridMonth: {
                                                            buttonText: "Month",
                                                        },
                                
                                                    },
                                
                                
                                                    initialView: "timeGridWeek", // initial view  =   l view li kayban  mni kan7ol l  calendar
                                                    slotMinTime: "09:00:00", // min  time  appear in the calendar
                                                    slotMaxTime: "19:00:00", // max  time  appear in the calendar
                                                    nowIndicator: true, //  indicator  li kaybyen  l wa9t daba   fin  fl calendar
                                                    selectable: true, //   kankhali l user  i9ad  i selectioner  wast l calendar
                                                    selectMirror: true, //  overlay   that show  the selected area  ( details  ... )
                                                    selectOverlap: false, //  nkhali ktar mn event f  nfs  l wa9t  = e.g:   5 nas i reserviw nfs lblasa  f nfs l wa9t
                                                    weekends: true, // n7ayed  l weekends    ola nkhalihom 
                                                    editable: true,
                                                    droppable: true,
                                
                                
                                                    // events  hya  property dyal full calendar
                                                    //  kat9bel array dyal objects  khass  i kono jayin 3la chkl  object fih  start  o end  7it hya li kayfahloha
                                                    events: events,
                                
                                                    eventDrop: (info) => {
                                                        updateEvent(info)
                                
                                                    },
                                                    eventResize: (info) => {
                                
                                                        updateEvent(info)
                                                    },
                                
                                                    eventClick: (info) => {
                                
                                                        let eventId = info.event._def.publicId
                                
                                                        if (validateOwner(info)) {
                                                            deleteEventForm.action = `/calendar/delete/${eventId}`
                                                            deleteEventBtn.click()
                                                        }
                                
                                                    },
                                
                                                    selectAllow: (info) => {
                                
                                                        return info.start >= nowDate;
                                                    },
                                
                                                    select: (info) => {
                                                        console.log(info);
                                
                                
                                                        if (info.end.getDate() - info.start.getDate() > 0 && !info.allDay) {
                                                            return
                                                        }
                                
                                                        if (info.allDay) {
                                                            start.value = info.startStr + " 09:00:00"
                                                            end.value = info.startStr + " 19:00:00"
                                
                                                        } else {
                                                            start.value = info.startStr.slice(0, info.startStr.length - 6)
                                                            end.value = info.endStr.slice(0, info.endStr.length - 6)
                                                        }
                                
                                                        submitEvent.click()
                                                    },
                                
                                                });
                                
                                                calendar.render();
                                
                                                function updateEvent(info) {
                                
                                                    let eventInfo = info.event._def
                                                    let eventTime = info.event._instance.range
                                
                                                    if (eventTime.start > nowDate && validateOwner(info)) {
                                                        function formattedDate(time) {
                                                            let date = new Date(time);
                                                            return date.toISOString().slice(0, 19);
                                                        }
                                
                                                        updatedStart.value = formattedDate(eventTime.start)
                                                        updatedEnd.value = formattedDate(eventTime.end)
                                
                                
                                
                                                        updateForm.action = `/calendar/update/${eventInfo.publicId}`
                                
                                                        submitUpdate.click()
                                
                                                    } else {
                                                        window.location.reload()
                                                    }
                                                };
                                
                                                function validateOwner(info) {
                                                    let owner = info.event._def.extendedProps.owner
                                                    let authUser = `{{ Auth::user()->id }}`
                                
                                                    return owner == authUser
                                                }
                                
                                
                                            })
                                        </script>
                                      </div>
                                </div> 
                               
                                <div class=" border-l w-[20vw] h-[87vh] flex    ">
                                    <!-- Chat Details -->
                                    
                                    <div class="bg-black text-white w-80  p-4 flex flex-col">
                                        <!-- Activity Section -->
                                        <div class="space-y-4">
                                          <h2 class="text-lg font-semibold">Activity</h2>
                                         
                                          <div class="flex items-center justify-between">
                                            <div class="mb-4">
                                                <div class="text-3xl font-bold text-white ">87%</div>
                                                <div class="text-sm text-gray-600">Weekly progress</div>
                                            </div>
                                          
                                          </div>
                                          <div class="flex border-b pb-11 space-x-1">
                                            <div class="w-8 h-20 bg-gray-400 rounded-lg text-white " title="Monday 92%">
                                                <div class="text-[11px] flex items-center justify-center ">Mon</div>
                                        <div class="text-[11px] flex items-center justify-center ">92%</div>
                                        </div>
                                            <div class="w-8 h-12 bg-red-500 rounded-lg" title="Tuesday 41%">
                                                <div class="text-[11px] flex items-center justify-center ">Tues</div>
                                                <div class="text-[11px] flex items-center justify-center ">41%</div>
                                            </div>
                                            <div class="w-8 h-16 bg-yellow-400 rounded-lg" title="Wednesday 78%">
                                                <div class="text-[11px] flex items-center justify-center ">Wed</div>
                                                <div class="text-[11px] flex items-center justify-center ">78%</div>
                                            </div>
                                            <div class="w-8 h-4 bg-gray-700 rounded-lg" title="Thursday 0%">       <div class="text-[11px] flex items-center justify-center ">Thurs</div></div>
                                            <div class="w-8 h-4 bg-gray-700 rounded-lg" title="Friday 0%">       <div class="text-[11px] flex items-center justify-center ">Frid</div></div>
                                          </div>
                                        </div>
                                      
                                        
                                      
                                        <!-- Reminders Section -->
                                        <div class="space-y-4  ">
                                          <h2 class="text-lg pt-6  font-semibold flex justify-between items-center">
                                            Reminders
                                           
                                          </h2>
                                          <div class="space-y-2 pt-4 ">
                                            <!-- Reminder Item -->
                                            
                                            <div class="bg-[#02098c]/30 border hover:bg-[#02098c] border-[#02098c] p-3 rounded-lg flex items-center justify-between">
                                              <span class="text-sm">
                                                <strong>09:30 AM</strong> <br> Check test results
                                              </span>
                                              <span class="text-green-400 text-xs">Low</span>
                                            </div>
                                            <div class="bg-[#02098c]/30 hover:bg-[#02098c] border-[#02098c] border  p-3 rounded-lg flex items-center justify-between">
                                              <span class="text-sm">
                                                <strong>10:00 AM</strong> <br> Client Presentation
                                              </span>
                                              <span class="text-red-400 text-xs">High</span>
                                            </div>
                                            <div class="bg-[#02098c]/30 hover:bg-[#02098c]  border-[#02098c] border p-3 rounded-lg flex items-center justify-between">
                                              <span class="text-sm">
                                                <strong>04:15 PM</strong> <br> Add new subtask
                                              </span>
                                              <span class="text-red-400 text-xs">High</span>
                                            </div>
                                          </div>
                                         
                                        </div>
                                      </div>
                                      
                                </div>
                                
                          
                            
                        </div>
                        </div>
                    </div>
                </div> 
            </main>
        </div>
    </body>
   
</x-app-layout>
