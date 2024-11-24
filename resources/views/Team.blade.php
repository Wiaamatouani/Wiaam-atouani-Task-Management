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

                <li class="  mt-72">
                    <a href="#" class="hidden   sm:flex sm:items-center sm:ms-6 flex-row items-center  ml-4   transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                           <x-dropdown align="right" width="">
                               <x-slot name="trigger">
                                   <button class="inline-flex items-center   border border-transparent text-sm  font-medium rounded-md text-white dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
        
                                       <div class="">
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="3" stroke="#ffffff" stroke-width="1.5"></circle> <path d="M3.66122 10.6392C4.13377 10.9361 4.43782 11.4419 4.43782 11.9999C4.43781 12.558 4.13376 13.0638 3.66122 13.3607C3.33966 13.5627 3.13248 13.7242 2.98508 13.9163C2.66217 14.3372 2.51966 14.869 2.5889 15.3949C2.64082 15.7893 2.87379 16.1928 3.33973 16.9999C3.80568 17.8069 4.03865 18.2104 4.35426 18.4526C4.77508 18.7755 5.30694 18.918 5.83284 18.8488C6.07287 18.8172 6.31628 18.7185 6.65196 18.5411C7.14544 18.2803 7.73558 18.2699 8.21895 18.549C8.70227 18.8281 8.98827 19.3443 9.00912 19.902C9.02332 20.2815 9.05958 20.5417 9.15224 20.7654C9.35523 21.2554 9.74458 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8478 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.9021C15.0117 19.3443 15.2977 18.8281 15.7811 18.549C16.2644 18.27 16.8545 18.2804 17.3479 18.5412C17.6837 18.7186 17.9271 18.8173 18.1671 18.8489C18.693 18.9182 19.2249 18.7756 19.6457 18.4527C19.9613 18.2106 20.1943 17.807 20.6603 17C20.8677 16.6407 21.029 16.3614 21.1486 16.1272M20.3387 13.3608C19.8662 13.0639 19.5622 12.5581 19.5621 12.0001C19.5621 11.442 19.8662 10.9361 20.3387 10.6392C20.6603 10.4372 20.8674 10.2757 21.0148 10.0836C21.3377 9.66278 21.4802 9.13092 21.411 8.60502C21.3591 8.2106 21.1261 7.80708 20.6601 7.00005C20.1942 6.19301 19.9612 5.7895 19.6456 5.54732C19.2248 5.22441 18.6929 5.0819 18.167 5.15113C17.927 5.18274 17.6836 5.2814 17.3479 5.45883C16.8544 5.71964 16.2643 5.73004 15.781 5.45096C15.2977 5.1719 15.0117 4.6557 14.9909 4.09803C14.9767 3.71852 14.9404 3.45835 14.8478 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74458 2.35523 9.35523 2.74458 9.15224 3.23463C9.05958 3.45833 9.02332 3.71848 9.00912 4.09794C8.98826 4.65566 8.70225 5.17191 8.21891 5.45096C7.73557 5.73002 7.14548 5.71959 6.65205 5.4588C6.31633 5.28136 6.0729 5.18269 5.83285 5.15108C5.30695 5.08185 4.77509 5.22436 4.35427 5.54727C4.03866 5.78945 3.80569 6.19297 3.33974 7C3.13231 7.35929 2.97105 7.63859 2.85138 7.87273" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                       </div>
                                       {{-- <div class="text-l  ml-2 font-medium"">Setting</div> --}}

                                   </button>
                                 
                               </x-slot>

                               <x-slot name="content">
                                   <x-dropdown-link :href="route('profile.edit')">
                                       {{ __('Profile') }}
                                   </x-dropdown-link>
           
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
       <h1 class="text-2xl text-white font-bold">Start Your Day</h1>
<p class="text-muted-foreground text-white">& Be Productive 👋</p></div>
                <div class="flex items-center space-x-4">
                    <Input
                    type="search"
                    placeholder="Start searching here..."
                    class="pl-8 w-[300px] rounded-2xl"
                  />
                    <img src="https://via.placeholder.com/32" class="w-9 h-9 rounded-full" alt="Profile">
                </div>
            </header>
            <!-- Content Grid -->

                <!-- Button create Team -->
    <button onclick="toggleModal('modalConfirm', true)"
    class="bg-black font-bold border  text-white px-3 py-2 rounded-md text-sm hover:bg-gray-600 transition">
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


<section class="grid grid-cols-1 pt-6  md:grid-cols-2 lg:grid-cols-3 gap-6">
    <!-- Teams Overview -->


    @foreach ($teams as $team)
        <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <div  > 
                    <h3 class="text-lg font-semibold text-gray-800">{{ $team->name }}</h3>
                    <span class="text-[10px] font-medium text-gray-500">
                        owner: {{ $team->owner->name }}
                    </span>
                    <form action="{{ route('Team.destroy', $team->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class=" text-red-600" >
                            Delete
                        </button>
                    </form>
                
                </div>
                
                <div class="flex flex-row gap-3">
                    <button onclick="openModal('modaleinvite{{ $team->id }}')"
                        class=" font-semibold bg-black rounded-lg divide-gray-700 transition-all duration-300 ease-in-out flex items-center shadow-lg transform hover:scale-105">
                        <svg width="35px" height="35px" viewBox="0 0 24.00 24.00" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="10" cy="6" r="4" stroke="#ffffff" stroke-width="0.8160000000000001"></circle> <path d="M21 10H19M19 10H17M19 10L19 8M19 10L19 12" stroke="#ffffff" stroke-width="0.8160000000000001" stroke-linecap="round"></path> <path d="M17.9975 18C18 17.8358 18 17.669 18 17.5C18 15.0147 14.4183 13 10 13C5.58172 13 2 15.0147 2 17.5C2 19.9853 2 22 10 22C12.231 22 13.8398 21.8433 15 21.5634" stroke="#ffffff" stroke-width="0.8160000000000001" stroke-linecap="round"></path> </g></svg>
                    </button>
                    <!-- Modal invite -->
                    <div id="modaleinvite{{ $team->id }}"
                        class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 flex justify-center items-center">
                        <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6 relative">
                            <!-- Close Button -->
                            <button onclick="closeModal('modaleinvite{{ $team->id }}')" type="button"
                                class="absolute top-3 right-3 text-gray-400 hover:bg-red-200 hover:text-red-600 rounded-full p-2">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
        
                            <!-- Modal Header -->
                            <h2 class="text-xl font-semibold text-[#446fcc] text-center mb-6">Invite Members</h2>
        
                            <!-- Modal Content -->
                            <form action="" method="post" class="space-y-5">
                                @csrf
                                <!-- Email Input -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                        Address</label>
                                    <div class="relative mt-1">
                                        <input id="email" name="email" type="email" required
                                            class="block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc] placeholder-gray-400"
                                            placeholder="Enter member's email">
                                    </div>
                                </div>
        
                                <!-- Action Buttons -->
                                <div class="flex justify-end gap-4 mt-6">
                                    <button type="button" onclick="closeModal('modaleinvite{{ $team->id }}')"
                                        class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition">
                                        Cancel
                                    </button>
                                    <button type="submit"
                                        class="px-4 py-2 bg-[#446fcc] text-white rounded-md hover:bg-[#3658a7] transition">
                                        Send Invite
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--     Create Task -->
<button onclick="openModal('modaltask{{ $team->id }}')"
    class="border border-black bg-black font-semibold text-white rounded-lg transition-all duration-300 ease-in-out flex items-center shadow-lg transform hover:scale-105">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
        stroke-width="1.5" stroke="currentColor"  width="35px" height="35px">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 12h16M12 4v16" />
    </svg>
  
</button>

<div id="modaltask{{ $team->id }}"
    class="fixed hidden z-50 inset-0 flex items-center justify-center bg-gray-900 bg-opacity-60"
    aria-hidden="true" role="dialog">
    <div class="bg-white rounded-lg shadow-lg max-w-lg w-full p-8 relative">
        <!-- Close Button -->
        <button
            class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 focus:ring-2 focus:ring-gray-400 focus:outline-none"
            aria-label="Close Modal"
            onclick="toggleModal('modaltask{{ $team->id }}', false)">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <!-- Modal Heading -->
        <h2 class="text-2xl font-bold text-center text-[#446fcc] mb-6">Create a New Task</h2>

        <!-- Form for Creating a Task -->
        <form action="{{ route('Task.store') }}" method="POST">
            @csrf

            <!-- Task Name -->
            <div class="mb-4">
                <label for="name"
                    class="block text-sm font-medium text-[#446fcc] mb-1">Task Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]"
                    placeholder="Enter task name" required value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-4">
                <label for="description"
                    class="block text-sm font-medium text-[#446fcc] mb-1">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]"
                    placeholder="Enter task description">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
           
            <div class="mb-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Date Start -->
                <div>
                    <label for="start"
                        class="block text-sm font-medium text-gray-400 mb-1">Date Start</label>
                    <input type="datetime-local" id="start" name="start"
                        min="{{ date('Y-m-d\TH:i') }}"
                        class="w-full px-4 py-3 border border-gray-600 bg-gray-900 text-gray-200 rounded-md shadow-sm focus:ring-blue-400 focus:border-blue-400"
                        required>
                    @error('start')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Date End -->
                <div>
                    <label for="end"
                        class="block text-sm font-medium text-gray-400 mb-1">Date End</label>
                    <input type="datetime-local" id="end" name="end"
                        min="{{ date('Y-m-d\TH:i') }}"
                        class="w-full px-4 py-3 border border-gray-600 bg-gray-900 text-gray-200 rounded-md shadow-sm focus:ring-blue-400 focus:border-blue-400"
                        required>
                    @error('end')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Priority -->
            <div class="mb-4">
                <label for="priority"
                    class="block text-sm font-medium text-[#446fcc] mb-1">Priority</label>
                <select name="priority" id="priority"
                    class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]">
                    <option value="High" {{ old('priority') == 'High' ? 'selected' : '' }}>
                        High</option>
                    <option value="Medium"
                        {{ old('priority') == 'Medium' ? 'selected' : '' }}>Medium</option>
                    <option value="Low" {{ old('priority') == 'Low' ? 'selected' : '' }}>
                        Low</option>
                </select>
                @error('priority')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- <!-- Assign To -->
            <div class="mb-4">
                <label for="assigned_to"
                    class="block text-sm font-medium text-[#446fcc] mb-1">Assign to</label>
                <select name="assigned_to" id="assigned_to"
                    class="w-full px-4 py-3 border border-[#446fcc] rounded-md shadow-sm focus:ring-[#446fcc] focus:border-[#446fcc]">
                    <option value="">-- None --</option>
                    @foreach ($team->members as $member)
                        <h1>{{ $member }}</h1>
                        <option value="{{ $member->id }}">{{ $member->name }}</option>
                    @endforeach
                </select>
            </div> --}}

            <!-- create task -->
            <div class="flex justify-end space-x-4 mt-6">
                <input type="hidden" name="team_id" value="{{ $team->id }}">
                <button type="button"
                    onclick="toggleModal('modaltask{{ $team->id }}', false)"
                    class="text-gray-900 bg-gray-200 hover:bg-gray-300 px-5 py-2 rounded-lg shadow transition">
                    Cancel
                </button>
                <button type="submit"
                    class="px-5 py-2 bg-[#446fcc] text-white font-bold rounded-lg shadow hover:bg-[#617deb] transition">
                    Create Task
                </button>
            </div>
        </form>
    </div>
</div>
 </div>
</div>

           

<div class="flex items-center p-12 bg-white/10 border-2 border-[#db74a5] rounded-3xl shadow-md">
    <div class="container  mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @if (isset($tasks) && $tasks->count())
                @foreach ($team->$tasks as $task)
                    <!-- Task Card -->
                    <div class="bg-yellow-400 dark:bg-gray-600 p-6 rounded-lg shadow-lg text-gray-800 dark:text-gray-100 flex flex-col justify-between">
                         <!-- Task Name -->
                         <h3 class="text-lg font-semibold mb-4">{{ $task->id }}: {{ $task->name }}</h3>
                      
                    
                          </div>
                    </div>
                @endforeach
            @else
                <p class="text-gray-500 col-span-4 text-center">No tasks available.</p>
            @endif
        </div>
    </div>
</div>        
            
              

            <!-- Team Members -->
            {{-- <div class="flex items-center mb-4">
                <div class="flex -space-x-2">
                    @foreach ($team->members as $member)
                        <img src="{{ asset('storage/images/' . $member->image) }}" alt="{{ $member->name }}"
                            title="{{ $member->name }}"
                            class="w-8 h-8 rounded-full border-2 border-white" />
                    @endforeach
                </div>
                <span class="text-sm text-gray-500 ml-2">
                    +{{ $team->members->count() }} members
                </span>
            </div> --}}
            <div class="mt-8">
                <!-- Team Members Section -->
                <div class="flex items-center gap-2 mb-4">
                    <!-- Avatar -->
                    <div class="h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center overflow-hidden">
                        <img src="/placeholder.svg" alt="Placeholder" class="h-full w-full object-cover" />
                    </div>
                    <!-- Team Info -->
                    <div>
                        <p class="text-sm font-medium">Team Members</p>
                        <p class="text-xs text-gray-500">10+ members</p>
                    </div>
                </div>
            
                <!-- Team Avatars -->
                <div class="flex -space-x-2">
                    <!-- Dynamically generated avatars -->
                    <div class="h-8 w-8 rounded-full bg-gray-300 border-2 border-white flex items-center justify-center overflow-hidden">
                        <img src="/placeholder.svg?0" alt="User 0" class="h-full w-full object-cover" />
                    </div>
                    <div class="h-8 w-8 rounded-full bg-gray-300 border-2 border-white flex items-center justify-center overflow-hidden">
                        <img src="/placeholder.svg?1" alt="User 1" class="h-full w-full object-cover" />
                    </div>
                    <div class="h-8 w-8 rounded-full bg-gray-300 border-2 border-white flex items-center justify-center overflow-hidden">
                        <img src="/placeholder.svg?2" alt="User 2" class="h-full w-full object-cover" />
                    </div>
                    
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