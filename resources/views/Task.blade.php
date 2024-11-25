

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
                     
                    </a>
                </li>
                <li class="">
                    <a  href="{{ route('Team') }}" class="flex flex-row items-center  ml-4  h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="10" cy="6" r="4" stroke="#ffffff" stroke-width="1.5"></circle> <path d="M21 10H19M19 10H17M19 10L19 8M19 10L19 12" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17.9975 18C18 17.8358 18 17.669 18 17.5C18 15.0147 14.4183 13 10 13C5.58172 13 2 15.0147 2 17.5C2 19.9853 2 22 10 22C12.231 22 13.8398 21.8433 15 21.5634" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                        </span>
                       
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('Calendar') }}" class="flex flex-row items-center  ml-4  h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                        <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                            <svg  class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M18 16L16 16M16 16L14 16M16 16L16 14M16 16L16 18" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M7 4V2.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M17 4V2.5" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M21.5 9H16.625H10.75M2 9H5.875" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> <path d="M14 22H10C6.22876 22 4.34315 22 3.17157 20.8284C2 19.6569 2 17.7712 2 14V12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12V14C22 17.7712 22 19.6569 20.8284 20.8284C20.1752 21.4816 19.3001 21.7706 18 21.8985" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                        </span>
                      
                    </a>
                </li>
               

                <li class="  mt-70">
                    <a href="#" class="hidden   sm:flex sm:items-center sm:ms-6 flex-row items-center  ml-4   transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                         
                           <x-dropdown align="right" width="">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center   border border-transparent text-sm  font-medium rounded-md text-white dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
     
                                    <div class="">
                                     <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="3" stroke="#ffffff" stroke-width="1.5"></circle> <path d="M3.66122 10.6392C4.13377 10.9361 4.43782 11.4419 4.43782 11.9999C4.43781 12.558 4.13376 13.0638 3.66122 13.3607C3.33966 13.5627 3.13248 13.7242 2.98508 13.9163C2.66217 14.3372 2.51966 14.869 2.5889 15.3949C2.64082 15.7893 2.87379 16.1928 3.33973 16.9999C3.80568 17.8069 4.03865 18.2104 4.35426 18.4526C4.77508 18.7755 5.30694 18.918 5.83284 18.8488C6.07287 18.8172 6.31628 18.7185 6.65196 18.5411C7.14544 18.2803 7.73558 18.2699 8.21895 18.549C8.70227 18.8281 8.98827 19.3443 9.00912 19.902C9.02332 20.2815 9.05958 20.5417 9.15224 20.7654C9.35523 21.2554 9.74458 21.6448 10.2346 21.8478C10.6022 22 11.0681 22 12 22C12.9319 22 13.3978 22 13.7654 21.8478C14.2554 21.6448 14.6448 21.2554 14.8478 20.7654C14.9404 20.5417 14.9767 20.2815 14.9909 19.9021C15.0117 19.3443 15.2977 18.8281 15.7811 18.549C16.2644 18.27 16.8545 18.2804 17.3479 18.5412C17.6837 18.7186 17.9271 18.8173 18.1671 18.8489C18.693 18.9182 19.2249 18.7756 19.6457 18.4527C19.9613 18.2106 20.1943 17.807 20.6603 17C20.8677 16.6407 21.029 16.3614 21.1486 16.1272M20.3387 13.3608C19.8662 13.0639 19.5622 12.5581 19.5621 12.0001C19.5621 11.442 19.8662 10.9361 20.3387 10.6392C20.6603 10.4372 20.8674 10.2757 21.0148 10.0836C21.3377 9.66278 21.4802 9.13092 21.411 8.60502C21.3591 8.2106 21.1261 7.80708 20.6601 7.00005C20.1942 6.19301 19.9612 5.7895 19.6456 5.54732C19.2248 5.22441 18.6929 5.0819 18.167 5.15113C17.927 5.18274 17.6836 5.2814 17.3479 5.45883C16.8544 5.71964 16.2643 5.73004 15.781 5.45096C15.2977 5.1719 15.0117 4.6557 14.9909 4.09803C14.9767 3.71852 14.9404 3.45835 14.8478 3.23463C14.6448 2.74458 14.2554 2.35523 13.7654 2.15224C13.3978 2 12.9319 2 12 2C11.0681 2 10.6022 2 10.2346 2.15224C9.74458 2.35523 9.35523 2.74458 9.15224 3.23463C9.05958 3.45833 9.02332 3.71848 9.00912 4.09794C8.98826 4.65566 8.70225 5.17191 8.21891 5.45096C7.73557 5.73002 7.14548 5.71959 6.65205 5.4588C6.31633 5.28136 6.0729 5.18269 5.83285 5.15108C5.30695 5.08185 4.77509 5.22436 4.35427 5.54727C4.03866 5.78945 3.80569 6.19297 3.33974 7C3.13231 7.35929 2.97105 7.63859 2.85138 7.87273" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round"></path> </g></svg>
                                    </div>
                                 

                                </button>
                              
                            </x-slot>

                            <x-slot name="content">
                               
        
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
            <header class="flex justify-between p-6  items-center ">
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
           
            {{-- <main class="flex-1 flex  flex-col  bg-black ">

<div>

    <a href="#" class="border-2 border-[#02098c] p-3 px-8 bg-gradient-to-br from-[#010004] via-[#02098c] to-[#010004] rounded-xl text-white ring-1 ring-transparent transition 
    hover:text-white focus:outline-none" onclick="document.getElementById('taskModal').classList.remove('hidden')">
    + Create a Task
    </a>
</div>
               
                    <div  id="taskModal" 
                    class="fixed inset-0 bg-black bg-opacity-50  items-center justify-center hidden">
                    <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg w-full max-w-md">
                        <h2 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-4">Create a Task</h2>
                
                        <!-- Add Task Form -->
                        <form method="POST" action="{{ route('Task.store') }}">
                            @csrf
                            <div class="mb-4">
                                <label for="title" class="block text-sm text-gray-600 dark:text-gray-300 mb-2">Task Title</label>
                                <input 
                                    type="text" 
                                    id="title" 
                                    name="title" 
                                    class="w-full p-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200"
                                    required>
                                    <div class="mb-4">
                                        <label for="start" class="block text-gray-300 text-sm font-medium mb-1">Task Deadline</label>
                                        <input type="datetime-local" id="start" name="start"
                                        class="block w-full px-4 py-2 text-sm text-gray-100 bg-[#2a2a2a] border border-[#555] rounded-md focus:ring-[#6737f5] focus:border-[#6737f5] transition duration-300"
                                            min="{{ date('Y-m-d\TH:i') }}" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="end" class="block text-gray-300 text-sm font-medium mb-1">Task Deadline</label>
                                        <input type="datetime-local" id="end" name="end"
                                        class="block w-full px-4 py-2 text-sm text-gray-100 bg-[#2a2a2a] border border-[#555] rounded-md focus:ring-[#6737f5] focus:border-[#6737f5] transition duration-300"
                                            min="{{ date('Y-m-d\TH:i') }}" required>
                                    </div>
                                    <input type="text" name="name" id="name" required>
                                @error('title')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex items-center justify-end space-x-2">
                                <button 
                                    type="button" 
                                    class="bg-gray-400 text-white px-4 py-2 rounded-md hover:bg-gray-500"
                                    onclick="document.getElementById('taskModal').classList.add('hidden')">
                                    Cancel
                                </button>
                                <button 
                                    type="submit" 
                                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                    <form class="hidden" method="post" class="" action="{{ route('calendar.store') }}">
                        @csrf
                        <input type="text" name="name" id="name" required>
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
                
                   
                    <div class="container pt-[15vh] mx-auto px-[4vw]">
                
                
                     
                
                
                </div>
                
                </main>
                <script>
                    // Close modal when clicking outside
                    window.addEventListener('click', function(e) {
                    const modal = document.getElementById('taskModal');
                    if (e.target === modal) {
                    modal.classList.add('hidden');
                    }
                    });
                    </script> 
                    </div>
                </div>
            </div>--}} 
 
<div class="flex-1 p-6 flex-col  justify-center   ">
    <div class=" ">
        <!-- Button to open the modal -->
        <button
            class="border-2 border-[#02098c]  bg-gradient-to-br from-[#010004] via-[#02098c] to-[#010004]   font-bold   text-white px-3 py-2 rounded-md text-sm hover:bg-gray-600 transition"
            onclick="document.getElementById('taskModal').classList.remove('hidden')">
            + Create a Task
        </button>
    
        <!-- Modal -->
        <div id="taskModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white dark:bg-gray-700 p-6 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-4">Create a Task</h2>
    
                <!-- Add Task Form -->
                <form method="POST" action="{{ route('Task.store') }}">
                    @csrf
    
                    <!-- Task Name -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Task Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
     <!-- Task Name -->
     <div class="mb-4 ">
        <label for="description" class="block text-sm font-medium text-gray-700">Task Description</label>
        <input type="description" id="description" name="description" required
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
        @error('description')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
 <!-- Start Date -->
 <div class="mb-4">
    <label for="start" class="block text-sm font-medium text-gray-700">Start Date</label>
    <input type="datetime-local" id="start" name="start" required
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
    @error('start')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<!-- End Date -->
<div class="mb-4">
    <label for="end" class="block text-sm font-medium text-gray-700">End Date</label>
    <input type="datetime-local" id="end" name="end" required
        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-200">
    @error('end')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<!-- Buttons -->
<div class="flex justify-end space-x-4">
    <button type="button" onclick="document.getElementById('taskModal').classList.add('hidden')"
        class="text-gray-900 bg-gray-200 hover:bg-gray-300 px-5 py-2 rounded-lg shadow transition">
        Cancel
    </button>
    <button type="submit"
        class="px-5 py-2 bg-blue-500 text-white font-bold rounded-lg shadow hover:bg-blue-600 transition">
        Create Task
    </button>
</div>
</form>
       
</div>
</div>
</div>

                    
<form class="hidden" method="post" class="" action="{{ route('calendar.store') }}">
    @csrf
    <input type="text" name="name" id="name" required>
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













    
  
  









































<div class="container  flex flex-row ">
    <div class="flex flex-wrap pt-6   gap-6">
      @if (isset($tasks) && $tasks->count())
        @foreach ($tasks as $task)
          <!-- Task Card -->
          <div class="bg-[#02098c]/30 border hover:bg-[#02098c] border-white p-6 rounded-lg shadow-lg text-gray-100 flex flex-col justify-between">
            <!-- Task Title and Dropdown -->
            <div class="flex items-start justify-between  mb-6">
              <div>
                <div class="flex items-center gap-2 mb-2">
                  <span class="px-3 py-2 text-xs font-medium text-white border-[#020cb9] bg-black rounded-full border ">
                    {{ $task->name }}
                  </span>
                </div>
                <h3 class="text-xl font-bold text-white">Website Redesign Project</h3>
              </div>
              <div class="relative group">
                <button class="p-2 hover:bg-white/10 rounded-lg transition-colors">
                  <svg class="w-5 h-5 text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zm0 4a2 2 0 110-4 2 2 0 010 4zm0 4a2 2 0 110-4 2 2 0 010 4z"></path>
                  </svg>
                </button>
                <div class="hidden group-hover:block absolute right-0 mt-2 w-48 bg-slate-800 rounded-xl border border-white/10 shadow-xl z-10">
                  <div class="py-1">


                    <form action="{{ route('Task.destroy', $task->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 px-4 w-full py-2 rounded-md hover:bg-white/10 ">
                          Delete
                        </button> 
                      </form>

                    <button class="w-full px-4 py-2 text-sm text-gray-300 hover:bg-white/10 flex items-center gap-2">
                      Edit
                    </button>
                    <button 
                               class="w-full px-4 py-2 text-sm text-gray-300 hover:bg-white/10 flex items-center gap-2">
                    <a href="{{ route('Team', $task->id) }}">  Share </a>
                    </button>
                   
                  </div>
                </div>
              </div>
            </div>
 
            <!-- Task Description -->
            <p class="text-red-500  h-6 mb-3">
              {{ $task->description }}
            </p>
  
            <!-- Dates -->
            <div class="space-y-3 mb-6">
              <div class="flex items-center gap-3 text-gray-300">
                <svg class="w-5 h-5 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M6 2a2 2 0 00-2 2v2h12V4a2 2 0 00-2-2H6zM4 8h12v10a2 2 0 01-2 2H6a2 2 0 01-2-2V8z"></path>
                </svg>
                <div>
                  <strong>Start Date:</strong> {{ \Carbon\Carbon::parse($task->start)->format('M d, Y H:i') }}
                </div>
              </div>
              <div class="flex items-center gap-3 text-gray-300">
                <svg class="w-5 h-5 text-purple-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 4a1 1 0 110 2 1 1 0 010-2zm1 6h-2v-3a1 1 0 112 0v3z"></path>
                </svg>
                <div>
                  <strong>End Date:</strong> {{ \Carbon\Carbon::parse($task->end)->format('M d, Y H:i') }}
                </div>
              </div>
            </div>
  
            <!-- Action Buttons -->
            {{-- <div class="flex flex-wrap space-x-2">
              <a href="{{ route('Task.update', $task->id) }}" class="text-white px-4 py-2 rounded-md bg-blue-500 hover:bg-blue-600">
                Update
              </a>
              <form action="{{ route('Task.destroy', $task->id) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white px-4 py-2 rounded-md bg-red-500 hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this task?')">
                  Delete
                </button>
              </form>
              <a href="{{ route('Team', $task->id) }}" class="text-white px-4 py-2 rounded-md bg-green-500 hover:bg-green-600">
                Share
              </a>
            </div> --}}
          </div>
        @endforeach
      @else
        <p class="text-gray-500 col-span-4 text-center">No tasks available.</p>
      @endif
    </div>
  </div>
  



   <!-- show-task -->
 <div class="flex     rounded-3xl shadow-md">
 {{-- <div class="container  mx-auto">
    <div class="grid grid-cols-1  pt-6  gap-6">
        @if (isset($tasks) && $tasks->count())
            @foreach ($tasks as $task)
                <!-- Task Card -->
                <div class="   bg-[#02098c]/30 border hover:bg-[#02098c] border-white p-6 rounded-lg shadow-lg text-gray-100 flex flex-col justify-between">
                   
                   
                    <!-- Task Title -->
                    <div class="flex items-center justify-between flex-row">
                        <div class="flex items-start bg-black justify-between mb-6">
                            <div>
                              <div class="flex items-center gap-2 mb-2">
                                <span class="px-3 py-1 text-xs font-medium text-emerald-400 bg-emerald-400/10 rounded-full border border-emerald-400/20">
                                  {{ $task->name }}
                                </span>
                              </div>
                              <h3 class="text-xl font-bold text-white">Website Redesign Project</h3>
                            </div>
                            
                            <!-- Dropdown Menu -->
                            <div class="relative group">
                              <button class="p-2 hover:bg-white/10 rounded-lg transition-colors">
                                <!-- Replace with an icon -->
                                <svg class="w-5 h-5 text-gray-300" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                  <path d="M10 6a2 2 0 110-4 2 2 0 010 4zm0 4a2 2 0 110-4 2 2 0 010 4zm0 4a2 2 0 110-4 2 2 0 010 4z"></path>
                                </svg>
                              </button>
                              <div class="hidden group-hover:block absolute right-0 mt-2 w-48 bg-slate-800 rounded-xl border border-white/10 shadow-xl z-10">
                                <div class="py-1">
                                  <button class="w-full px-4 py-2 text-sm text-gray-300 hover:bg-white/10 flex items-center gap-2">
                                    <!-- Replace with an icon -->
                                    Edit
                                  </button>
                                  <button class="w-full px-4 py-2 text-sm text-gray-300 hover:bg-white/10 flex items-center gap-2">
                                    <!-- Replace with an icon -->
                                    Share
                                  </button>
                                  <button class="w-full px-4 py-2 text-sm text-red-400 hover:bg-white/10 flex items-center gap-2">
                                    <!-- Replace with an icon -->
                                    Delete
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                       
                   <!-- Description -->
        <p class="text-gray-300 mb-6">
            {{ $task->description }}
        </p>
  
        <!-- Dates -->
        <div class="space-y-3 mb-6">
          <div class="flex items-center gap-3 text-gray-300">
            <!-- Replace with an icon -->
            <svg class="w-5 h-5 text-blue-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M6 2a2 2 0 00-2 2v2h12V4a2 2 0 00-2-2H6zM4 8h12v10a2 2 0 01-2 2H6a2 2 0 01-2-2V8z"></path>
            </svg>
            <div>
              <span class="text-sm text-gray-400">Start Date:</span>
              <strong>Start Date:</strong> {{ \Carbon\Carbon::parse($task->start)->format('M d, Y H:i') }}
            </div>
          </div>
          <div class="flex items-center gap-3 text-gray-300">
            <!-- Replace with an icon -->
            <svg class="w-5 h-5 text-purple-400" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M10 2a8 8 0 100 16 8 8 0 000-16zm0 4a1 1 0 110 2 1 1 0 010-2zm1 6h-2v-3a1 1 0 112 0v3z"></path>
            </svg>
            <div>
              <span class="text-sm text-gray-400">Due Date:</span>
              <strong>End Date:</strong> {{ \Carbon\Carbon::parse($task->end)->format('M d, Y H:i') }}
            </div>
          </div>
        </div>

                    <!-- Task Description -->
                    <p class="mb-4">{{ $task->description }}</p>

                    <!-- Task Priority -->
                    
                    <!-- Task Dates -->
                    <p class="mb-4">
                        <strong>Start Date:</strong> {{ \Carbon\Carbon::parse($task->start)->format('M d, Y H:i') }}
                    </p>
                    <p class="mb-4">
                        <strong>End Date:</strong> {{ \Carbon\Carbon::parse($task->end)->format('M d, Y H:i') }}
                    </p> 

                    <!-- Action Buttons -->
                    <div class="flex flex-wrap space-x-2">
                        <!-- Update Button -->
                        <a href="{{ route('Task.update', $task->id) }}" class="text-white px-4 py-2 rounded-md hover:bg-blue-600">
                            Update
                        </a>
                        <!-- Delete Button -->
                        <form action="{{ route('Task.destroy', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white px-4 py-2 rounded-md hover:bg-red-600" onclick="return confirm('Are you sure you want to delete this task?')">
                                Delete
                            </button>
                        </form>
                        <!-- Share Button -->
                        <a href="{{ route('Team', $task->id) }}" class="text-white px-4 py-2 rounded-md hover:bg-green-600">
                            Share
                        </a>
                    </div>

                    
                </div>
            @endforeach
        @else
            <p class="text-gray-500 col-span-4 text-center">No tasks available.</p>
        @endif
     </div>
</div> --}}


</div>  
</div>
</div>
</div>
          
        
        </main> 
        <script>
            // Close modal when clicking outside
            window.addEventListener('click', function(e) {
            const modal = document.getElementById('taskModal');
            if (e.target === modal) {
            modal.classList.add('hidden');
            }
            });
            </script> 
            </div>
            <div>
                {{-- script for the flash messages --}}
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const flashMessage = document.getElementById('flashMessage');
        
                        if (flashMessage) {
                            setTimeout(() => {
                                flashMessage.style.right = '20px';
                            }, 100); 
        
                            setTimeout(() => {
                                flashMessage.style.right = '-300px';
                            }, 3000); 
        
                            setTimeout(() => {
                                flashMessage.remove();
                            }, 3500);
                        }
                    });
                </script>
        
        
                @if(session('success'))
                    <div  id="flashMessage" class="fixed flex items-center gap-2 right-[-300px] top-5 flash-message bg-[#6dc489] text-white px-4 py-4 rounded-md mb-4 shadow-lg transition-all duration-300">
                        <i class="fa-solid fa-thumbs-up text-[15px]"></i>
                        {{ session('success') }}
                    </div>
                @endif
        
                @if(session('error'))
                    <div  id="flashMessage" class="fixed flex items-center gap-2 right-[-300px] top-5 flash-message bg-red-500 text-white px-4 py-4 rounded-md mb-4 shadow-lg transition-all duration-300">
                        <i class="fa-solid fa-thumbs-up text-[15px]"></i>
                        {{ session('error') }}
                    </div>
                @endif
        
                @if(session('info'))
                    <div  id="flashMessage" class="fixed flex items-center gap-2 right-[-300px] top-5 flash-message bg-[#6737f5] text-white px-4 py-4 rounded-md mb-4 shadow-lg transition-all duration-300">
                        <i class="fa-solid fa-thumbs-up text-[15px]"></i>
                        {{ session('info') }}
                    </div>
                @endif
        
            </div>
       
</body>

</html>







