<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js'></script>
    <title>Document</title>

    <script type="text/javascript">
        window.openModal = function(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
        }

        window.closeModal = function(modalId) {
            document.getElementById(modalId).classList.add('hidden');
        }

        document.onkeydown = function(event) {
            event = event || window.event;
            if (event.keyCode === 27) {
                document.getElementById('modelConfirm').classList.add('hidden');
            }
        };
    </script>
</head>
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
                {{-- <li class="">
                    <a href="" class="flex flex-row items-center  ml-4  h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                           <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.0867 21.3877L13.7321 21.7697L13.0867 21.3877ZM13.6288 20.4718L12.9833 20.0898L13.6288 20.4718ZM10.3712 20.4718L9.72579 20.8539H9.72579L10.3712 20.4718ZM10.9133 21.3877L11.5587 21.0057L10.9133 21.3877ZM1.25 10.5C1.25 10.9142 1.58579 11.25 2 11.25C2.41421 11.25 2.75 10.9142 2.75 10.5H1.25ZM3.07351 15.6264C2.915 15.2437 2.47627 15.062 2.09359 15.2205C1.71091 15.379 1.52918 15.8177 1.68769 16.2004L3.07351 15.6264ZM7.78958 18.9915L7.77666 19.7413L7.78958 18.9915ZM5.08658 18.6194L4.79957 19.3123H4.79957L5.08658 18.6194ZM21.6194 15.9134L22.3123 16.2004V16.2004L21.6194 15.9134ZM16.2104 18.9915L16.1975 18.2416L16.2104 18.9915ZM18.9134 18.6194L19.2004 19.3123H19.2004L18.9134 18.6194ZM19.6125 2.7368L19.2206 3.37628L19.6125 2.7368ZM21.2632 4.38751L21.9027 3.99563V3.99563L21.2632 4.38751ZM4.38751 2.7368L3.99563 2.09732V2.09732L4.38751 2.7368ZM2.7368 4.38751L2.09732 3.99563H2.09732L2.7368 4.38751ZM9.40279 19.2098L9.77986 18.5615L9.77986 18.5615L9.40279 19.2098ZM13.7321 21.7697L14.2742 20.8539L12.9833 20.0898L12.4412 21.0057L13.7321 21.7697ZM9.72579 20.8539L10.2679 21.7697L11.5587 21.0057L11.0166 20.0898L9.72579 20.8539ZM12.4412 21.0057C12.2485 21.3313 11.7515 21.3313 11.5587 21.0057L10.2679 21.7697C11.0415 23.0767 12.9585 23.0767 13.7321 21.7697L12.4412 21.0057ZM10.5 2.75H13.5V1.25H10.5V2.75ZM21.25 10.5V11.5H22.75V10.5H21.25ZM7.8025 18.2416C6.54706 18.2199 5.88923 18.1401 5.37359 17.9265L4.79957 19.3123C5.60454 19.6457 6.52138 19.7197 7.77666 19.7413L7.8025 18.2416ZM1.68769 16.2004C2.27128 17.6093 3.39066 18.7287 4.79957 19.3123L5.3736 17.9265C4.33223 17.4951 3.50486 16.6678 3.07351 15.6264L1.68769 16.2004ZM21.25 11.5C21.25 12.6751 21.2496 13.5189 21.2042 14.1847C21.1592 14.8438 21.0726 15.2736 20.9265 15.6264L22.3123 16.2004C22.5468 15.6344 22.6505 15.0223 22.7007 14.2868C22.7504 13.5581 22.75 12.6546 22.75 11.5H21.25ZM16.2233 19.7413C17.4786 19.7197 18.3955 19.6457 19.2004 19.3123L18.6264 17.9265C18.1108 18.1401 17.4529 18.2199 16.1975 18.2416L16.2233 19.7413ZM20.9265 15.6264C20.4951 16.6678 19.6678 17.4951 18.6264 17.9265L19.2004 19.3123C20.6093 18.7287 21.7287 17.6093 22.3123 16.2004L20.9265 15.6264ZM13.5 2.75C15.1512 2.75 16.337 2.75079 17.2619 2.83873C18.1757 2.92561 18.7571 3.09223 19.2206 3.37628L20.0044 2.09732C19.2655 1.64457 18.4274 1.44279 17.4039 1.34547C16.3915 1.24921 15.1222 1.25 13.5 1.25V2.75ZM22.75 10.5C22.75 8.87781 22.7508 7.6085 22.6545 6.59611C22.5572 5.57256 22.3554 4.73445 21.9027 3.99563L20.6237 4.77938C20.9078 5.24291 21.0744 5.82434 21.1613 6.73809C21.2492 7.663 21.25 8.84876 21.25 10.5H22.75ZM19.2206 3.37628C19.7925 3.72672 20.2733 4.20752 20.6237 4.77938L21.9027 3.99563C21.4286 3.22194 20.7781 2.57144 20.0044 2.09732L19.2206 3.37628ZM10.5 1.25C8.87781 1.25 7.6085 1.24921 6.59611 1.34547C5.57256 1.44279 4.73445 1.64457 3.99563 2.09732L4.77938 3.37628C5.24291 3.09223 5.82434 2.92561 6.73809 2.83873C7.663 2.75079 8.84876 2.75 10.5 2.75V1.25ZM2.75 10.5C2.75 8.84876 2.75079 7.663 2.83873 6.73809C2.92561 5.82434 3.09223 5.24291 3.37628 4.77938L2.09732 3.99563C1.64457 4.73445 1.44279 5.57256 1.34547 6.59611C1.24921 7.6085 1.25 8.87781 1.25 10.5H2.75ZM3.99563 2.09732C3.22194 2.57144 2.57144 3.22194 2.09732 3.99563L3.37628 4.77938C3.72672 4.20752 4.20752 3.72672 4.77938 3.37628L3.99563 2.09732ZM11.0166 20.0898C10.8136 19.7468 10.6354 19.4441 10.4621 19.2063C10.2795 18.9559 10.0702 18.7304 9.77986 18.5615L9.02572 19.8582C9.07313 19.8857 9.13772 19.936 9.24985 20.0898C9.37122 20.2564 9.50835 20.4865 9.72579 20.8539L11.0166 20.0898ZM7.77666 19.7413C8.21575 19.7489 8.49387 19.7545 8.70588 19.7779C8.90399 19.7999 8.98078 19.832 9.02572 19.8582L9.77986 18.5615C9.4871 18.3912 9.18246 18.3215 8.87097 18.287C8.57339 18.2541 8.21375 18.2487 7.8025 18.2416L7.77666 19.7413ZM14.2742 20.8539C14.4916 20.4865 14.6287 20.2564 14.7501 20.0898C14.8622 19.936 14.9268 19.8857 14.9742 19.8582L14.2201 18.5615C13.9298 18.7304 13.7204 18.9559 13.5379 19.2063C13.3646 19.4441 13.1864 19.7468 12.9833 20.0898L14.2742 20.8539ZM16.1975 18.2416C15.7862 18.2487 15.4266 18.2541 15.129 18.287C14.8175 18.3215 14.5129 18.3912 14.2201 18.5615L14.9742 19.8582C15.0192 19.832 15.096 19.7999 15.2941 19.7779C15.5061 19.7545 15.7842 19.7489 16.2233 19.7413L16.1975 18.2416Z" fill="#ffffff"></path> <path d="M8 11H8.009M11.991 11H12M15.991 11H16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </span>
                    </a>
                </li> --}}

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
        <main class="flex-1 p-6">
            <!-- Header -->
            <header class="flex justify-between items-center mb-8">
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

                <!-- Button create Team -->
    <button onclick="toggleModal('modalConfirm', true)"
    class="border-2 border-[#02098c]     text-white px-3 py-2 rounded-2xl font-bold   text-sm hover:bg-gray-600 transition">
    + Create Team
</button>
<!-- Modal -->
<div id="modalConfirm" class="fixed hidden z-50 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-60"
    aria-hidden="true" role="dialog">
    <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-8 relative">
        <!-- Close Button -->
        <button
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 focus:ring-2 focus:ring-gray-400 focus:outline-none"
            aria-label="Close Modal" onclick="toggleModal('modalConfirm', false)">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Modal Heading -->
        <h2 class="text-2xl font-bold text-center text-[#446fcc] mb-6">Create a New Team</h2>

        <!-- Form for Creating a Team -->
        <form action="" method="POST">
            @csrf

            <!-- Team Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-[#446fcc] mb-1">Team Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]"
                    placeholder="Enter team name" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Team Description -->


            <!-- Submit Button -->
            <div class="flex justify-end space-x-4">
                <button type="button" onclick="toggleModal('modalConfirm', false)"
                    class="text-gray-900 bg-gray-200 hover:bg-gray-300 px-5 py-2 rounded-lg shadow transition">
                    Cancel
                </button>
                <button type="submit"
                    class="px-5 py-2 bg-[#446fcc] text-white font-bold rounded-lg shadow hover:bg-[#617deb] transition">
                    Create Team
                </button>
            </div>
        </form>
    </div>
</div>
<script>
    function toggleModal(modalId, show) {
        const modal = document.getElementById(modalId);
        if (show) {
            modal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
            modal.setAttribute('aria-hidden', 'false');
        } else {
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
            modal.setAttribute('aria-hidden', 'true');
        }
    }

    // Close modal on ESC key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            const modal = document.querySelector('.fixed:not(.hidden)');
            if (modal) toggleModal(modal.id, false);
        }
    });
</script>


<section class="flex flex-wrap pt-6 gap-4">
    @foreach ($teams as $team)
    <div class="bg-black border border-gray-200 rounded-lg shadow-lg p-6">
        {{-- Team Header --}}
        <div class="p-2">
            <div class="flex items-start gap-x-5 justify-between">
                <div class="flex-1">
                    <div class="flex flex-col">
                        <div class="flex"> 
                            <h3 class="text-2xl font-semibold text-white">{{ $team->name }}</h3>
                        </div>
                        <div class="flex items-center gap-2 text-gray-600">
                            <svg class="w-4 h-4 text-amber-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v4.5m0 0l2-2m-2 2l-2-2M4.5 12a7.5 7.5 0 1115 0 7.5 7.5 0 01-15 0z"></path></svg>
                            <span class="text-[10px]"> Lead by: {{ $team->owner->name }}</span>
                        </div>
                    </div>
                </div>
                <div class="flex -space-x-3">
                    <img class="w-10 h-10 rounded-full border-white" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop" alt="Team member" />
                    <img class="w-10 h-10 rounded-full border-white" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&h=100&fit=crop" alt="Team member" />
                    <img class="w-10 h-10 rounded-full border-white" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop" alt="Team member" />
                    <div class="w-10 h-10 rounded-full border-white bg-violet-100 flex items-center justify-center">
                        <span class="text-sm font-medium text-violet-600">+2</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Tasks Section --}}
        <div class="mt-4">
      
               
                <div class="flex flex-row  p-1 gap-2 text-center justify-center ml-[18vw] ">
                  
                    <button onclick="openModal('modaleinvite{{ $team->id }}')" class=" text-white">
                        <svg class="w-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 18L17 18M17 18L14 18M17 18V15M17 18V21M11 21H4C4 17.134 7.13401 14 11 14C11.695 14 12.3663 14.1013 13 14.2899M15 7C15 9.20914 13.2091 11 11 11C8.79086 11 7 9.20914 7 7C7 4.79086 8.79086 3 11 3C13.2091 3 15 4.79086 15 7Z" stroke="#ffffff" stroke-width="0.9120000000000001" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </button>
                   
                   
                 
                    <button onclick="openModal('modaltask{{ $team->id }}')" class="text-white ">
                        <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#ffffff" stroke-width="0.8879999999999999" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#ffffff" stroke-width="0.8879999999999999" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </button> 
                    <form action="{{ route('Team.destroy', $team->id) }}" method="POST" class="text-white">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="">
                            <svg class="w-7 mt-1 "  hover:text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6M14 10V17M10 10V17" stroke="#fffafa" stroke-width="0.8160000000000001" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </button>
                    </form>
                    </button> 

                </div>
            {{-- <div class="flex justify-end mb-4">
                <div class="relative group">
                    <button class="p-2 hover:bg-white/10 rounded-lg transition-colors">
                        <svg class="w-5 h-5 text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M10 6a2 2 0 110-4 2 2 0 010 4zm0 4a2 2 0 110-4 2 2 0 010 4zm0 4a2 2 0 110-4 2 2 0 010 4z"></path>
                        </svg>
                    </button>
                    <div class="hidden group-hover:block absolute right-0 mt-2 w-48 bg-slate-800 rounded-xl border border-white/10 shadow-xl z-10">
                       
                        <button onclick="openModal('modaleinvite{{ $team->id }}')" class="w-full pl-3 pt-3 font-base text-white rounded-lg transition-all duration-300 ease-in-out flex items-center shadow-lg transform hover:scale-105">
                            Invite
                        </button>
                        <form action="{{ route('Team.destroy', $team->id) }}" method="POST" class="w-full">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full p-3 text-left text-red-600 hover:bg-white/10">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <button onclick="openModal('modaltask{{ $team->id }}')" class="w-full pl-3 pt-3 font-base text-white rounded-lg transition-all duration-300 ease-in-out flex items-center shadow-lg transform hover:scale-105">
                Add Task
            </button> --}}
            {{-- Task Cards --}}
            <div class="space-y-2">
                {{-- <h2 class="text-lg font-bold text-white">{{ $team->name }}</h2> --}}
                <ul>
                    @foreach ($team->tasks as $task)
                            <div class="p-4 rounded-xl bg-[#02098c]/30 hover:bg-[#02098c] hover:border-[#02098c] hover:bg-black border-[#02098c] border">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="font-medium text-white">{{ $task->name }}</span>
                                    <span class="px-2 py-1 text-xs text-white border-[#02098c] border bg-gradient-to-br from-black via-[#02098c] to-black rounded-full">
                                        {{ $task->status ?? 'Pending' }}
                                    </span>
                                </div>
                                <p class="text-sm text-gray-400">{{ $task->description ?? 'No description provided.' }}</p>
                            </div>
                    @endforeach
                    </ul>
            </div>
            
        </div>

        {{-- Task Modal --}}
        <div id="modaltask{{ $team->id }}" class="fixed hidden z-50 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-60" aria-hidden="true" role="dialog">
            <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-8 relative">
                <button class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 focus:ring-2 focus:ring-gray-400 focus:outline-none" aria-label="Close Modal" onclick="toggleModal('modaltask{{ $team->id }}', false)">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>

                <h2 class="text-2xl font-bold text-center text-[#446fcc] mb-6">Create a New Task</h2>

                <form action="{{ route('Task.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-[#446fcc] mb-1">Task Name</label>
                        <input type="text" name="name" id="name" class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]" placeholder="Enter task name" required value="{{ old('name') }}">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <input type="text" name="team_id" id="team_id" class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]"   value={{ $team->id }}>
                       
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-[#446fcc] mb-1">Description</label>
                        <textarea name="description" id="description" rows="4" class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]" placeholder="Enter task description">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="start" class="block text-sm font-medium text-gray-400 mb-1">Date Start</label>
                            <input type="datetime-local" id="start" name="start" min="{{ date('Y-m-d\TH:i') }}" class="w-full px-4 py-3 border border-gray-600 bg-gray-900 text-gray-200 rounded-md shadow-sm focus:ring-blue-400 focus:border-blue-400" required>
                            @error('start')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="end" class="block text-sm font-medium text-gray-400 mb-1">Date End</label>
                            <input type="datetime-local" id="end" name="end" min="{{ date('Y-m-d\TH:i') }}" class="w-full px-4 py-3 border border-gray-600 bg-gray-900 text-gray-200 rounded-md shadow-sm focus:ring-blue-400 focus:border-blue-400" required>
                            @error('end')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="priority" class="block text-sm font-medium text-[#446fcc] mb-1">Priority</label>
                        <select name="priority" id="priority" class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]">
                            <option value="High" {{ old('priority') == 'High' ? 'selected' : '' }}>High</option>
                            <option value="Medium" {{ old('priority') == 'Medium' ? 'selected' : '' }}>Medium</option>
                            <option value="Low" {{ old('priority') == 'Low' ? 'selected' : '' }}>Low</option>
                        </select>
                        @error('priority')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-end space-x-4 mt-6">
                        <input type="hidden" name="team_id" value="{{ $team->id }}">
                        <button type="button" onclick="toggleModal('modaltask{{ $team->id }}', false)" class="text-gray-900 bg-gray-200 hover:bg-gray-300 px-5 py-2 rounded-lg shadow transition">
                            Cancel
                        </button>
                        <button type="submit" class="px-5 py-2 bg-[#446fcc] text-white font-bold rounded-lg shadow hover:bg-[#617deb] transition">
                            Create Task
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        {{-- Invite Modal --}}
        <div id="modaleinvite{{ $team->id }}" class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 flex justify-center items-center">
            <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
                <button onclick="closeModal('modaleinvite{{ $team->id }}')" type="button" class="absolute top-3 right-3 text-gray-400 hover:bg-red-200 hover:text-red-600 rounded-full p-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <h2 class="text-xl font-semibold text-[#446fcc] text-center mb-6">Invite Members</h2>

                <form action="" method="post" class="space-y-5">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                        <div class="relative mt-1">
                            <input id="email" name="email" type="email" required class="block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc] placeholder-gray-400" placeholder="Enter member's email">
                        </div>
                    </div>

                    <div class="flex justify-end gap-4 mt-6">
                        <button type="button" onclick="closeModal('modaleinvite{{ $team->id }}')" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition">
                            Cancel
                        </button>
                        <button type="submit" class="px-4 py-2 bg-[#446fcc] text-white rounded-md hover:bg-[#3658a7] transition">
                            Send Invite
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</section>




           
                     
                    </div>
                </div>
            </div> 
        </main>
    </div>
</body>

</html>