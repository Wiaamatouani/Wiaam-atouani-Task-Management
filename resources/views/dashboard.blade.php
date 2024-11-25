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
                    {{-- <li class="">
                        <a href="" class="flex flex-row items-center  ml-4  h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                               <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M13.0867 21.3877L13.7321 21.7697L13.0867 21.3877ZM13.6288 20.4718L12.9833 20.0898L13.6288 20.4718ZM10.3712 20.4718L9.72579 20.8539H9.72579L10.3712 20.4718ZM10.9133 21.3877L11.5587 21.0057L10.9133 21.3877ZM1.25 10.5C1.25 10.9142 1.58579 11.25 2 11.25C2.41421 11.25 2.75 10.9142 2.75 10.5H1.25ZM3.07351 15.6264C2.915 15.2437 2.47627 15.062 2.09359 15.2205C1.71091 15.379 1.52918 15.8177 1.68769 16.2004L3.07351 15.6264ZM7.78958 18.9915L7.77666 19.7413L7.78958 18.9915ZM5.08658 18.6194L4.79957 19.3123H4.79957L5.08658 18.6194ZM21.6194 15.9134L22.3123 16.2004V16.2004L21.6194 15.9134ZM16.2104 18.9915L16.1975 18.2416L16.2104 18.9915ZM18.9134 18.6194L19.2004 19.3123H19.2004L18.9134 18.6194ZM19.6125 2.7368L19.2206 3.37628L19.6125 2.7368ZM21.2632 4.38751L21.9027 3.99563V3.99563L21.2632 4.38751ZM4.38751 2.7368L3.99563 2.09732V2.09732L4.38751 2.7368ZM2.7368 4.38751L2.09732 3.99563H2.09732L2.7368 4.38751ZM9.40279 19.2098L9.77986 18.5615L9.77986 18.5615L9.40279 19.2098ZM13.7321 21.7697L14.2742 20.8539L12.9833 20.0898L12.4412 21.0057L13.7321 21.7697ZM9.72579 20.8539L10.2679 21.7697L11.5587 21.0057L11.0166 20.0898L9.72579 20.8539ZM12.4412 21.0057C12.2485 21.3313 11.7515 21.3313 11.5587 21.0057L10.2679 21.7697C11.0415 23.0767 12.9585 23.0767 13.7321 21.7697L12.4412 21.0057ZM10.5 2.75H13.5V1.25H10.5V2.75ZM21.25 10.5V11.5H22.75V10.5H21.25ZM7.8025 18.2416C6.54706 18.2199 5.88923 18.1401 5.37359 17.9265L4.79957 19.3123C5.60454 19.6457 6.52138 19.7197 7.77666 19.7413L7.8025 18.2416ZM1.68769 16.2004C2.27128 17.6093 3.39066 18.7287 4.79957 19.3123L5.3736 17.9265C4.33223 17.4951 3.50486 16.6678 3.07351 15.6264L1.68769 16.2004ZM21.25 11.5C21.25 12.6751 21.2496 13.5189 21.2042 14.1847C21.1592 14.8438 21.0726 15.2736 20.9265 15.6264L22.3123 16.2004C22.5468 15.6344 22.6505 15.0223 22.7007 14.2868C22.7504 13.5581 22.75 12.6546 22.75 11.5H21.25ZM16.2233 19.7413C17.4786 19.7197 18.3955 19.6457 19.2004 19.3123L18.6264 17.9265C18.1108 18.1401 17.4529 18.2199 16.1975 18.2416L16.2233 19.7413ZM20.9265 15.6264C20.4951 16.6678 19.6678 17.4951 18.6264 17.9265L19.2004 19.3123C20.6093 18.7287 21.7287 17.6093 22.3123 16.2004L20.9265 15.6264ZM13.5 2.75C15.1512 2.75 16.337 2.75079 17.2619 2.83873C18.1757 2.92561 18.7571 3.09223 19.2206 3.37628L20.0044 2.09732C19.2655 1.64457 18.4274 1.44279 17.4039 1.34547C16.3915 1.24921 15.1222 1.25 13.5 1.25V2.75ZM22.75 10.5C22.75 8.87781 22.7508 7.6085 22.6545 6.59611C22.5572 5.57256 22.3554 4.73445 21.9027 3.99563L20.6237 4.77938C20.9078 5.24291 21.0744 5.82434 21.1613 6.73809C21.2492 7.663 21.25 8.84876 21.25 10.5H22.75ZM19.2206 3.37628C19.7925 3.72672 20.2733 4.20752 20.6237 4.77938L21.9027 3.99563C21.4286 3.22194 20.7781 2.57144 20.0044 2.09732L19.2206 3.37628ZM10.5 1.25C8.87781 1.25 7.6085 1.24921 6.59611 1.34547C5.57256 1.44279 4.73445 1.64457 3.99563 2.09732L4.77938 3.37628C5.24291 3.09223 5.82434 2.92561 6.73809 2.83873C7.663 2.75079 8.84876 2.75 10.5 2.75V1.25ZM2.75 10.5C2.75 8.84876 2.75079 7.663 2.83873 6.73809C2.92561 5.82434 3.09223 5.24291 3.37628 4.77938L2.09732 3.99563C1.64457 4.73445 1.44279 5.57256 1.34547 6.59611C1.24921 7.6085 1.25 8.87781 1.25 10.5H2.75ZM3.99563 2.09732C3.22194 2.57144 2.57144 3.22194 2.09732 3.99563L3.37628 4.77938C3.72672 4.20752 4.20752 3.72672 4.77938 3.37628L3.99563 2.09732ZM11.0166 20.0898C10.8136 19.7468 10.6354 19.4441 10.4621 19.2063C10.2795 18.9559 10.0702 18.7304 9.77986 18.5615L9.02572 19.8582C9.07313 19.8857 9.13772 19.936 9.24985 20.0898C9.37122 20.2564 9.50835 20.4865 9.72579 20.8539L11.0166 20.0898ZM7.77666 19.7413C8.21575 19.7489 8.49387 19.7545 8.70588 19.7779C8.90399 19.7999 8.98078 19.832 9.02572 19.8582L9.77986 18.5615C9.4871 18.3912 9.18246 18.3215 8.87097 18.287C8.57339 18.2541 8.21375 18.2487 7.8025 18.2416L7.77666 19.7413ZM14.2742 20.8539C14.4916 20.4865 14.6287 20.2564 14.7501 20.0898C14.8622 19.936 14.9268 19.8857 14.9742 19.8582L14.2201 18.5615C13.9298 18.7304 13.7204 18.9559 13.5379 19.2063C13.3646 19.4441 13.1864 19.7468 12.9833 20.0898L14.2742 20.8539ZM16.1975 18.2416C15.7862 18.2487 15.4266 18.2541 15.129 18.287C14.8175 18.3215 14.5129 18.3912 14.2201 18.5615L14.9742 19.8582C15.0192 19.832 15.096 19.7999 15.2941 19.7779C15.5061 19.7545 15.7842 19.7489 16.2233 19.7413L16.1975 18.2416Z" fill="#ffffff"></path> <path d="M8 11H8.009M11.991 11H12M15.991 11H16" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>
                        </a>
                    </li> --}}
    
                    <li class="  mt-70">
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
                                           
                                                 <!-- Time Tracker Card -->
    {{-- <div class="bg-black border   rounded-xl w-[20vw] h-[35vh] p-2   shadow-lg justify-center flex flex-col items-center">
        <!-- Pause Button -->
        <div class="flex mb-2 flex-col items-center justify-center">
            <h1 class="  font-base text-stone-50"> One Click and start your Deadline</h1>
            <p class="text-[#f6d85f] text-[10px]">Task Management App</p>
        </div>
        
        
    
        <!-- Pause/Start Button -->
        <button
            id="toggleBtn"
            onclick="toggleTimer()"
            class="w-32 h-32  border-[#02098c] border-2 bg-[#02098c]/50 text-white rounded-full flex items-center justify-center focus:outline-none shadow-md"
        >
            <!-- Default SVG Icon (Pause) -->
           
            <svg id="pauseIcon" class="w-11" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M2 6C2 4.11438 2 3.17157 2.58579 2.58579C3.17157 2 4.11438 2 6 2C7.88562 2 8.82843 2 9.41421 2.58579C10 3.17157 10 4.11438 10 6V18C10 19.8856 10 20.8284 9.41421 21.4142C8.82843 22 7.88562 22 6 22C4.11438 22 3.17157 22 2.58579 21.4142C2 20.8284 2 19.8856 2 18V6Z" fill="#ffffff"></path> <path d="M14 6C14 4.11438 14 3.17157 14.5858 2.58579C15.1716 2 16.1144 2 18 2C19.8856 2 20.8284 2 21.4142 2.58579C22 3.17157 22 4.11438 22 6V18C22 19.8856 22 20.8284 21.4142 21.4142C20.8284 22 19.8856 22 18 22C16.1144 22 15.1716 22 14.5858 21.4142C14 20.8284 14 19.8856 14 18V6Z" fill="#ffffff"></path> </g></svg>
            <!-- Start Icon (hidden initially) -->
            
            <svg id="startIcon" fill="#ffffff"  class="w-11" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17.804 17.804" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g id="c93_stop"> <path d="M2.44,0.043c0.14-0.071,0.304-0.051,0.425,0.044l10.777,8.502c0.094,0.074,0.152,0.191,0.152,0.312 c0,0.118-0.059,0.24-0.152,0.314L2.864,17.718c-0.072,0.056-0.162,0.086-0.25,0.086l-0.175-0.04 c-0.137-0.065-0.223-0.206-0.223-0.362V0.403C2.216,0.249,2.302,0.106,2.44,0.043z"></path> <path d="M12.616,0.034h2.656c0.175,0,0.316,0.181,0.316,0.399v16.935c0,0.222-0.142,0.403-0.316,0.403h-2.656 c-0.174,0-0.316-0.182-0.316-0.403V0.434C12.3,0.215,12.443,0.034,12.616,0.034z"></path> </g> <g id="Capa_1_11_"> </g> </g> </g></svg>
        </button>
        <!-- Time Info -->
        <div class="flex justify-between  w-full">
            <!-- Today's Time -->
            <div class="text-center border rounded-xl justify-center flex flex-col pl-4 pr-4 p-1 bg-white ">
                <p class="text-xs text-gray-400">Today</p>
                <p id="todayTime" class="text-sm font-semibold">00:00:00</p>
            </div>

            <!-- Limits -->
            <div class=" text-center border rounded-xl justify-center flex flex-col pl-4 pr-4 p-1 bg-white">
                <p class="text-xs text-gray-400">Limits</p>
                <p class="text-sm font-semibold">06:00:00</p>
            </div>
        </div>
        
    </div> --}}

    <script>
        // JavaScript Logic for Timer
        let isPaused = true;
        let todaySeconds = 0;
        let timer;

        function toggleTimer() {
           
            const pauseIcon = document.getElementById('pauseIcon');
            const startIcon = document.getElementById('startIcon');

            if (isPaused) {
                // Switch to Pause mode
                pauseIcon.classList.remove('hidden');
                startIcon.classList.add('hidden');
                
                startTimer();
            } else {
                // Switch to Start mode
                pauseIcon.classList.add('hidden');
                startIcon.classList.remove('hidden');
                
                stopTimer();
            }
            isPaused = !isPaused;
        }

        function startTimer() {
            timer = setInterval(() => {
                todaySeconds++;
                document.getElementById('todayTime').textContent = formatTime(todaySeconds);
            }, 1000);
        }

        function stopTimer() {
            clearInterval(timer);
        }

        function formatTime(seconds) {
            const hrs = Math.floor(seconds / 3600);
            const mins = Math.floor((seconds % 3600) / 60);
            const secs = seconds % 60;
            return [hrs, mins, secs]
                .map(unit => String(unit).padStart(2, '0'))
                .join(':');
        }
    </script>
{{-- 
    <script>
        // JavaScript Logic for Timer
        let isPaused = true;
        let todaySeconds = 0;
        let timer;

        function toggleTimer() {
            const toggleBtn = document.getElementById('toggleBtn');
            if (isPaused) {
                toggleBtn.textContent = 'Start'; // Change button text to "Pause"
                toggleBtn.classList.remove('bg-green-500');
                toggleBtn.classList.add('bg-red-500');
                startTimer();
            } else {
                toggleBtn.textContent = 'Pause'; // Change button text to "Start"
                toggleBtn.classList.remove('bg-red-500');
                toggleBtn.classList.add('bg-green-500');
                stopTimer();
            }
            isPaused = !isPaused;
        }

        function startTimer() {
            timer = setInterval(() => {
                todaySeconds++;
                document.getElementById('todayTime').textContent = formatTime(todaySeconds);
            }, 1000);
        }

        function stopTimer() {
            clearInterval(timer);
        }

        function formatTime(seconds) {
            const hrs = Math.floor(seconds / 3600);
            const mins = Math.floor((seconds % 3600) / 60);
            const secs = seconds % 60;
            return [hrs, mins, secs]
                .map(unit => String(unit).padStart(2, '0'))
                .join(':');
        }
    </script> --}}

{{--     
    <script>
        // JavaScript Logic for Timer
        let isPaused = true;
        let todaySeconds = 0;
        let timer;

        function toggleTimer() {
            const pauseBtn = document.getElementById('pauseBtn');
            if (isPaused) {
                pauseBtn.textContent = '||'; // Change to pause symbol
                startTimer();
            } else {
                pauseBtn.textContent = '▶'; // Change to play symbol
                stopTimer();
            }
            isPaused = !isPaused;
        }

        function startTimer() {
            timer = setInterval(() => {
                todaySeconds++;
                document.getElementById('todayTime').textContent = formatTime(todaySeconds);
            }, 1000);
        }

        function stopTimer() {
            clearInterval(timer);
        }

        function formatTime(seconds) {
            const hrs = Math.floor(seconds / 3600);
            const mins = Math.floor((seconds % 3600) / 60);
            const secs = seconds % 60;
            return [hrs, mins, secs]
                .map(unit => String(unit).padStart(2, '0'))
                .join(':');
        }
    </script> --}}                    
                                            <!-- Tasks Card -->
                                            <div class="bg-black  border  rounded-xl w-[40vw] h-[36vh] p-3 shadow-md overflow-hidden">
                                                <div class="bg-secondary flex justify-between text-white ">
                                                    <h2 class="text-xl text-white pb-2 font-semibold">Today's metting</h2>
                                                    <a href="{{ route('Task') }}" class="text-blue-600 text-l font-base ">View all</a>
                                                </div>
                                                <div class=" flex justify-center items-center gap-2  flex-col">
                                                    <div class="flex gap-2 flex-row">
                                                        <div class="bg-[#02098c]/30 border-2  border-[#02098c]  flex w-[15vw] p-3 border  rounded-2xl flex-col"> 
                                                            <div class="flex justify-between">
                                                               
                                                                     
                                                                    <h1 class="text-white">10:00 AM</h1>
                                                                
                                                          <div>
                                                            <svg height="25px" width="30px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#ffffff;} </style> <g> <path class="st0" d="M81.836,113.484c35.43,0,42.523-27.531,42.523-42.546V56.414c0-15.016-7.094-42.539-42.523-42.539 c-35.422,0-42.515,27.523-42.515,42.539v14.523C39.321,85.953,46.414,113.484,81.836,113.484z"></path> <path class="st0" d="M248,184l-59.414,29.117L156,160c-9.554-15.578-21.906-27.734-39.438-27.734H89.836H51.789 C23.188,132.266,0,156.836,0,187.141v157.797h35.016V512h33.882l20.938-152.203L110.782,512h33.882V270.625v-39.75L173.336,264 L264,208L248,184z"></path> <path class="st0" d="M512,48V24h-16H360V0h-32v24H192h-16v24h16v140.078l2.618,4.266L208,185.789V48h272v240H208v-26.602l-16,9.883 V288h-16v24h16h144.25v63.078l-54.844,104.71c-7.977,0.805-14.218,7.462-14.218,15.649c0,8.734,7.078,15.813,15.812,15.813 c8.734,0,15.813-7.078,15.813-15.813c0-3.352-1.055-6.446-2.836-9l40.274-76.883V488h16v-76.531l39.492,75.39 c-1.602,2.477-2.554,5.414-2.554,8.578c0,8.734,7.078,15.813,15.812,15.813c8.734,0,15.813-7.078,15.813-15.813 c0-8.367-6.516-15.149-14.742-15.703l-53.82-102.742V312H496h16v-24h-16V48H512z"></path> </g> </g></svg></div>
                                                            </div>
                                                            
                                                           
                                                            <p class="text-sm text-gray-400 flex items-center justify-center ">present the project and gather feedback.</p>

                                                        </div>
                                                    <div class="bg-[#02098c]/30 border-2  border-[#02098c] flex w-[15vw]   rounded-2xl p-3 flex-col">
                                                        <div class="flex justify-between">
                                          
                                                                <h1 class="text-white">12:00 AM</h1>

                                                             <div><svg fill="#ffffff" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M76.8,443.733c-23.563,0-42.667,19.104-42.667,42.667v17.067c0,4.713,3.82,8.533,8.533,8.533h68.267 c4.713,0,8.533-3.82,8.533-8.533V486.4C119.467,462.837,100.363,443.733,76.8,443.733z M102.4,494.933H51.2V486.4 c0-14.137,11.463-25.6,25.6-25.6s25.6,11.463,25.6,25.6V494.933z"></path> <path d="M76.8,426.667c18.853,0,34.133-15.281,34.133-34.133c0-18.853-15.281-34.133-34.133-34.133s-34.133,15.281-34.133,34.133 C42.667,411.386,57.947,426.667,76.8,426.667z M76.8,375.467c9.427,0,17.067,7.64,17.067,17.067 c0,9.427-7.64,17.067-17.067,17.067s-17.067-7.64-17.067-17.067C59.733,383.106,67.373,375.467,76.8,375.467z"></path> <path d="M256,443.733c-23.563,0-42.667,19.104-42.667,42.667v17.067c0,4.713,3.82,8.533,8.533,8.533h68.267 c4.713,0,8.533-3.82,8.533-8.533V486.4C298.667,462.837,279.563,443.733,256,443.733z M281.6,494.933h-51.2V486.4 c0-14.137,11.463-25.6,25.6-25.6c14.137,0,25.6,11.463,25.6,25.6V494.933z"></path> <path d="M221.867,392.533c0,18.853,15.281,34.133,34.133,34.133s34.133-15.281,34.133-34.133 c0-18.853-15.281-34.133-34.133-34.133S221.867,373.681,221.867,392.533z M273.067,392.533c0,9.427-7.64,17.067-17.067,17.067 c-9.427,0-17.067-7.64-17.067-17.067c0-9.427,7.64-17.067,17.067-17.067C265.427,375.467,273.067,383.106,273.067,392.533z"></path> <path d="M435.2,443.733c-23.563,0-42.667,19.104-42.667,42.667v17.067c0,4.713,3.82,8.533,8.533,8.533h68.267 c4.713,0,8.533-3.82,8.533-8.533V486.4C477.867,462.837,458.763,443.733,435.2,443.733z M460.8,494.933h-51.2V486.4 c0-14.137,11.463-25.6,25.6-25.6c14.137,0,25.6,11.463,25.6,25.6V494.933z"></path> <path d="M401.067,392.533c0,18.853,15.281,34.133,34.133,34.133c18.853,0,34.133-15.281,34.133-34.133 c0-18.853-15.281-34.133-34.133-34.133C416.347,358.4,401.067,373.681,401.067,392.533z M452.267,392.533 c0,9.427-7.64,17.067-17.067,17.067s-17.067-7.64-17.067-17.067c0-9.427,7.64-17.067,17.067-17.067 S452.267,383.106,452.267,392.533z"></path> <path d="M76.8,341.333c4.713,0,8.533-3.821,8.533-8.533v-25.6h162.133v25.6c0,4.713,3.82,8.533,8.533,8.533 c4.713,0,8.533-3.821,8.533-8.533v-25.6h162.133v25.6c0,4.713,3.82,8.533,8.533,8.533s8.533-3.821,8.533-8.533v-34.133 c0-4.713-3.82-8.533-8.533-8.533H264.533v-25.6h25.6c3.489,0,6.627-2.124,7.923-5.364l17.006-42.516c0,0,0,0,0,0l0.06-0.15 c0.018-0.046,0.028-0.092,0.045-0.137c0.094-0.246,0.177-0.497,0.248-0.754c0.032-0.115,0.062-0.231,0.089-0.346 c0.042-0.182,0.076-0.366,0.107-0.552c0.026-0.157,0.055-0.314,0.072-0.471c0.01-0.09,0.011-0.182,0.018-0.273 c0.02-0.257,0.036-0.514,0.032-0.768v-45.65c0-0.411-0.031-0.811-0.085-1.202c20.896-17.216,34.219-43.292,34.219-72.481 C349.867,42.024,307.842,0,256,0c-51.842,0-93.867,42.024-93.867,93.867c0,29.189,13.323,55.265,34.219,72.481 c-0.054,0.391-0.085,0.792-0.085,1.202v45.65c-0.004,0.255,0.012,0.511,0.032,0.768c0.007,0.091,0.008,0.183,0.018,0.273 c0.017,0.157,0.046,0.313,0.072,0.471c0.03,0.186,0.064,0.37,0.107,0.552c0.027,0.116,0.057,0.231,0.089,0.346 c0.071,0.257,0.154,0.508,0.248,0.754c0.017,0.046,0.027,0.092,0.045,0.137l0.06,0.15c0,0,0,0,0,0l17.006,42.516 c1.296,3.24,4.434,5.364,7.923,5.364h25.6v25.6H76.8c-4.713,0-8.533,3.82-8.533,8.533V332.8 C68.267,337.513,72.087,341.333,76.8,341.333z M179.2,93.867c0-42.417,34.383-76.8,76.8-76.8s76.8,34.383,76.8,76.8 c0,39.531-29.868,72.07-68.267,76.317V128h8.533c4.713,0,8.533-3.82,8.533-8.533s-3.82-8.533-8.533-8.533h-8.533V93.867h8.533 c4.713,0,8.533-3.821,8.533-8.533s-3.82-8.533-8.533-8.533h-8.533V59.733c0-4.713-3.82-8.533-8.533-8.533 c-4.713,0-8.533,3.82-8.533,8.533V76.8h-8.533c-4.713,0-8.533,3.82-8.533,8.533s3.821,8.533,8.533,8.533h8.533v17.067h-8.533 c-4.713,0-8.533,3.82-8.533,8.533s3.821,8.533,8.533,8.533h8.533v42.184C209.068,165.937,179.2,133.398,179.2,93.867z M256,187.733c0.313,0,0.624-0.009,0.936-0.012c14.345-0.106,28.387-2.634,41.731-7.398v24.475h-85.333v-24.475 c13.344,4.764,27.385,7.292,41.731,7.398C255.376,187.725,255.687,187.733,256,187.733z M217.404,221.867h77.192l-10.24,25.6 h-56.712L217.404,221.867z"></path> </g> </g> </g> </g></svg></div>
                                                        </div>
                                                        <p class="text-sm text-gray-400 flex items-center justify-center ">Metting with UI and UX teams.</p></div>
                                                </div>

                                                <div class="flex gap-2 flex-row ">
                                                    <div class="bg-[#02098c]/30 border-2   border-[#02098c] w-[15vw] flex rounded-2xl p-3 flex-col">
                                                        <div class="flex justify-between">
                                                           
                                                                 
                                                                <h1 class="text-white">14:00 <span class="text-[15px]"  > PM</span>
                                                                    
                                                                   </h1>
                                                                                                                     <div><svg height="25px" width="30px" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" viewBox="0 0 400 400.00001" id="svg2" version="1.1" inkscape:version="0.91 r13725" sodipodi:docname="project.svg" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs id="defs4"></defs> <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#ffffff" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="1.4" inkscape:cx="90.721604" inkscape:cy="166.49755" inkscape:document-units="px" inkscape:current-layer="layer1" showgrid="false" units="px" showguides="true" inkscape:guide-bbox="true" inkscape:window-width="1920" inkscape:window-height="1056" inkscape:window-x="0" inkscape:window-y="24" inkscape:window-maximized="1"> <sodipodi:guide position="200.71429,121.42857" orientation="1,0" id="guide23298"></sodipodi:guide> </sodipodi:namedview> <metadata id="metadata7"> <rdf:rdf> <cc:work rdf:about=""> <dc:format>image/svg+xml</dc:format> <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"></dc:type> <dc:title></dc:title> </cc:work> </rdf:rdf> </metadata> <g inkscape:label="Capa 1" inkscape:groupmode="layer" id="layer1" transform="translate(0,-652.36216)"> <path style="opacity:1;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:25;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1" d="m 237.4297,701.86214 0,40 -186,0 0,49.6914 -51.4297,0 0,211.30866 400,0 0,-300.00006 0,-1 -137.5703,0 z m 25,25 112.5703,0 0,251 -50,0 0,-185.42 -0.1621,0 0,-0.8886 -248.4082,0 0,-24.6914 186,0.9453 z" id="folder" inkscape:connector-curvature="0" sodipodi:nodetypes="cccccccccccccccccccccc"> <title id="title23866">folder</title> </path> </g> </g></svg></div>
                                                        </div>
                                                        
                                                       
                                                        <p class="text-sm text-gray-400 flex items-center justify-center ">Onboardinf of the project.</p>
</div>
                                                <div class="bg-[#02098c]/30 border hover:border-white hover:bg-[#02098c] pb-5 border-[#02098c] rounded-2xl p-2 justify-center items-center  w-[15vw] flex flex-col">
                                                   <a href="{{ route('Team') }}" class="w-9 h-9  ">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 12L12 12M12 12L9 12M12 12L12 9M12 12L12 15" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                                </a>
                                                   <p class="text-sm text-gray-400">Create Team Metting</p>
</div>
                                            </div>

                                                   
                                                </div>
                                            </div>
                                
                                            <!-- Create Team Card -->
                                            <div class="bg-black border  rounded-xl w-[40vw] h-[36vh]  p-3  shadow-md overflow-hidden">
                                               
                                                <div class="bg-secondary flex justify-between text-white ">
                                                    <h2 class="text-xl text-white pb-2 font-semibold">Today's Task</h2>
                                                    <a href="{{ route('Task') }}" class="text-blue-600 text-l font-base "> + Add Task </a>
                                                </div>
                                                <div class="p-2 gap-2 flex flex-col">

                                                    <div class="w-10vw flex flex-row pl-5  gap-3 items-center  text-white  bg-[#1e1e1e] rounded-2xl p-1 ">
 
                                                        <div class="flex flex-col ">
                                                         <h1>Creating the landing ... </h1>
                                                         <p class="text-[#858585] text-sm"> Task Management App</p>
                                                        </div>
                                                        <div class=" ml-[17vw]"><svg fill="#fbba37" height="20px" width="20px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve" stroke="#fbba37" stroke-width="0.64"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M29.3,12.7c-0.1-0.4-0.5-0.7-1-0.7h-8.7L17,3.7c-0.1-0.4-0.5-0.7-1-0.7s-0.8,0.3-1,0.7L12.4,12H3.7c-0.4,0-0.8,0.3-1,0.7 c-0.1,0.4,0,0.9,0.4,1.1l7,5.1l-2.7,8.3c-0.1,0.4,0,0.9,0.4,1.1c0.4,0.3,0.8,0.3,1.2,0l7-5.1l7,5.1c0.2,0.1,0.4,0.2,0.6,0.2 s0.4-0.1,0.6-0.2c0.4-0.3,0.5-0.7,0.4-1.1l-2.7-8.3l7-5.1C29.2,13.6,29.4,13.1,29.3,12.7z"></path> </g></svg></div>
                                                       </div>

                                                       <div class="w-10vw flex flex-row pl-5  gap-3 items-center  text-white bg-[#1e1e1e] rounded-2xl p-1 ">
 
                                                        <div class="flex flex-col ">
                                                         <h1>Color Palette Select   ... </h1>
                                                         <p class="text-[#858585] text-sm"> Task Management App</p>
                                                        </div>
                                                        
                                                       </div>

                                                       <div class="w-10vw flex flex-row pl-5  gap-3 items-center bg-[#1e1e1e] text-white  rounded-2xl p-1 ">
 
                                                        <div class="flex flex-col ">
                                                         <h1>Competitive & Functi  ... </h1>
                                                         <p class="text-[#858585] text-sm"> Task Management App</p>
                                                        </div>
                                                       
                                                       </div>

                                                </div>
                                            </div>
                                        </div>
                                        
                                  
                                    </div>





{{-- 
                                    <div class=" bg-black text-white p-4">
                                        <!-- Calendar Header -->
                                        <div class="flex justify-between items-center mb-6">
                                          <h1 class="text-2xl font-semibold">Projects</h1>
                                         
                                           
                                          
                                        </div>
                                      
                                        <!-- Calendar Grid -->
                                        <div class="grid grid-cols-5 gap-4">
                                          <!-- Day Column -->
                                          <div class="space-y-4">
                                            <div class="text-center text-gray-400">Mon 18</div>
                                            <div class="bg-black  border-2 rounded-lg p-4">
                                              <div class="text-gray-400">Done</div>
                                              <h2 class="font-semibold">Design Brief Review</h2>
                                              <p class="text-sm text-gray-400">Review project goals and objectives</p>
                                              <div class="flex items-center gap-2 mt-2">
                                                <div class="flex -space-x-2">
                                                  <img src="{{ asset('images/m6.png') }}" class="w-6 h-6 rounded-full border-2 border-black" alt="Team Member" />
                                                  <img src="{{ asset('images/m8.png') }}" class="w-6 h-6 rounded-full border-2 border-black" alt="Team Member" />
                                                  <img src="{{ asset('images/m7.png') }}" class="w-6 h-6 rounded-full border-2 border-black" alt="Team Member" />
                                                </div>
                                                <div class="text-sm text-gray-500">01h 53m</div>
                                              </div>
                                            </div>
                                            
                                          </div>
                                      
                                          <!-- Repeat for Other Columns -->
                                          <div class="space-y-4">
                                            <div class="text-center text-gray-400">Tue 19</div>
                                            <div class="bg-black pb-6  border-2 rounded-lg p-4">
                                              <div class="text-gray-400">Done</div>
                                              <h2 class="font-semibold">Typography & Layout Design</h2>
                                              <p class="text-sm text-gray-400">Help with choosing fonts and layout elements</p>
                                            </div>
                                          </div>
                                      
                                          <div class="space-y-4">
                                            <div class="text-center text-gray-400">Wed 20</div>
                                            <div class="bg-black  border-2 rounded-lg p-4">
                                              <div class="text-yellow-500">Medium</div>
                                              <h2 class="font-semibold">Color Palette Selection</h2>
                                              <p class="text-sm text-gray-400">Create a harmonious color scheme</p>
                                              <div class="flex items-center gap-2 mt-2">
                                                <div class="flex -space-x-2">
                                                  <img src="{{ asset('images/m1.png') }}" class="w-6 h-6 rounded-full  " alt="Team Member" />
                                                  <img src="{{ asset('images/m2.png') }}" class="w-6 h-6 rounded-full  " alt="Team Member" />
                                                </div>
                                                <div class="text-sm text-gray-500">01h 24m</div>
                                              </div>
                                            </div>
                                          </div>
                                      
                                          <div class="space-y-4">
                                            <div class="text-center text-gray-400">Thu 21</div>
                                            <div class="bg-black  border-2 rounded-lg p-4">
                                              <div class="text-red-500">High</div>
                                              <h2 class="font-semibold">User Interface Design</h2>
                                              <p class="text-sm text-gray-400">Create an appealing and visually engaging interface</p>
                                              <div class="flex items-center gap-2 mt-2">
                                                <div class="flex -space-x-2">
                                                  <img src="{{ asset('images/m9.png') }}" class="w-6 h-6 rounded-full border-2 border-black" alt="Team Member" />
                                                  <img src="{{ asset('images/m5.png') }}" class="w-6 h-6 rounded-full border-2 border-black" alt="Team Member" />
                                                </div>
                                                <div class="text-sm text-gray-500"></div>
                                              </div>
                                            </div>
                                          </div>
                                      
                                          <div class="space-y-4">
                                            <div class="text-center   bg-black rounded text-gray-400">Fri 22</div>
                                            <div class=" border-2 bg-black hover:bg-black border-white rounded-lg p-4">
                                              <div class="text-green-500">Low</div>
                                              <h2 class="font-semibold">Conduct User Testing</h2>
                                              <p class="text-sm text-gray-400">Present the project and gather feedback</p>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      



                                    {{-- <div class="border-2 rounded-2xl ">
                                        <div class="">
                                            
                                                <form class="hidden" method="post" class="" action="{{ route('calendar.store') }}">
                                                    @csrf
                                                    <input name="start" id="start" type="datetime-local">
                                                    <input name="end" id="end" type="datetime-local">
                                                    <button  id="submitEvent">submit</button>
                                                </form>
                                        
                                                <div class="">
                                                    <form class="hidden" id="updateForm" method="post" action="">
                                                        @csrf @method('PUT')
                                                        <input id="updatedStart" name="start" type="hidden">
                                                        <input id="updatedEnd" name="end" type="hidden">
                                                        <button id="submitUpdate"></button>
                                                    </form>
                                                </div>
                                        
                                                <div class="h-[21vw]  rounded-2xl border-none p-3" id="calendar"></div>
                                        
                                        
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
                                                                left: 'prev,next,dayGridMonth,timeGridWeek,timeGridDay',
                                                                center: 'title',
                                                                right: 'listMonth,listWeek,listDay'
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
                                </div> --}}
                                </div> 
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                               
                                <div class=" border-l w-[20vw] h-[87vh] flex    ">
                                    <!-- Chat Details -->
                                    {{-- <div class="">
                                        <div class="flex  justify-between items-center mb-6">
                                            <h2 class="text-lg text-white font-semibold pl-2">Chat details</h2>
                                            <button class="text-gray-400 hover:text-white pr-4">×</button>
                                        </div>
            
                                        <div class="bg-black p-4 rounded-2xl">
            
                                            <div class="space-y-4  ">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="https://via.placeholder.com/32" class="w-8 h-8 rounded-full mr-3" alt="User">
                                                        <span class="font-medium text-white">Yeya niko</span>
                                                    </div>
                                                    <div class="flex items-center space-x-2">
                                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                                        <button>
                                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space-y-4 pt-6 ">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="https://via.placeholder.com/32" class="w-8 h-8 rounded-full mr-3" alt="User">
                                                        <span class="font-medium text-white">Yeya niko</span>
                                                    </div>
                                                    <div class="flex items-center space-x-2">
                                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                                        <button>
                                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space-y-4  pt-6 ">
                                                <div class="flex bg-white rounded-2xl p-2 items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="https://via.placeholder.com/32" class="w-8 h-8 rounded-full mr-3" alt="User">
                                                        <span class="font-medium ">Yeya niko</span>
                                                    </div>
                                                    <div class="flex items-center space-x-2">
                                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                                        <button>
                                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="space-y-4 pt-6 ">
                                                <div class="flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <img src="https://via.placeholder.com/32" class="w-8 h-8 rounded-full mr-3" alt="User">
                                                        <span class="font-medium text-white">Yeya niko</span>
                                                    </div>
                                                    <div class="flex items-center space-x-2">
                                                        <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                                        <button>
                                                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button class="w-full mt-2 bg-[#434448] text-gray-400 py-2 px-4 rounded-lg">+ Add new Chat</button>
                                    </div> --}}

                                    {{-- <div class="p-4 m-1 h-full  bg-[#020cb9]/20">
                                        <div class="mb-4">
                                            <div class="text-3xl font-bold text-[#020cb9] ">87%</div>
                                            <div class="text-sm text-gray-600">Weekly progress</div>
                                        </div>
                                        <div class="">
                                            <div class="flex items-center">
                                                <span class="text-sm text-gray-600 w-10">Mon</span>
                                                <div class="flex-grow bg-gray-200 rounded-full h-2">
                                                    <div class="bg-primary rounded-full h-2" style="width: 90%"></div>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-sm text-gray-600 w-10">Tue</span>
                                                <div class="flex-grow bg-gray-200 rounded-full h-2">
                                                    <div class="bg-primary rounded-full h-2" style="width: 75%"></div>
                                                </div>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-sm text-gray-600 w-10">Wed</span>
                                                <div class="flex-grow bg-gray-200 rounded-full h-2">
                                                    <div class="bg-primary rounded-full h-2" style="width: 95%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  --}}
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
