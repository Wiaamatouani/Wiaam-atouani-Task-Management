

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
               

                <li class="   mt-[34vh]">
                    <a href="#" class="hidden   sm:flex sm:items-center sm:ms-6 flex-row items-center  ml-4   transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-300 hover:text-white">
                         
                           <x-dropdown align="right" width="">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center   border border-transparent text-sm  font-medium rounded-md text-white dark:text-gray-400 dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
     
                                    <div class="">
                                        <svg class="w-6 h-6 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14 20H6C4.89543 20 4 19.1046 4 18L4 6C4 4.89543 4.89543 4 6 4H14M10 12H21M21 12L18 15M21 12L18 9" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
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
            class="border-2 border-[#02098c]    font-bold   text-white px-3 py-2 rounded-2xl text-sm hover:bg-gray-600 transition"
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
          <div class=" border   border-[#02098c] w-[20vw] pt-8 items-center rounded-lg shadow-lg text-gray-100 flex flex-col justify-between">
            <!-- Task Title and Dropdown -->






            <div class="flex items-center justify-between  gap-[6vw]  mb-2">
                <span class="px-3 py-3 text-xs font-medium text-white  border-[#020cb9] bg-gradient-to-br from-[#040004] via-[#020cb9] to-[#010004] rounded-full border ">
                  {{ $task->name }}
                </span>
                <div class="flex flex-row gap-2 p-1  items-center justify-center ">
                  
                  <form action="{{ route('Task.destroy', $task->id) }}" method="POST" class="inline-block">
                      @csrf
                      @method('DELETE')

                      <svg class="w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#ffffff" stroke-width="0.8879999999999999" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#ffffff" stroke-width="0.8879999999999999" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                   
                     
                    </form>
                    <form action="{{ route('Team', $task->id) }}" method="POST" class="inline-block">
                     

                      <svg class="w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M19.6495 0.799565C18.4834 -0.72981 16.0093 0.081426 16.0093 1.99313V3.91272C12.2371 3.86807 9.65665 5.16473 7.9378 6.97554C6.10034 8.9113 5.34458 11.3314 5.02788 12.9862C4.86954 13.8135 5.41223 14.4138 5.98257 14.6211C6.52743 14.8191 7.25549 14.7343 7.74136 14.1789C9.12036 12.6027 11.7995 10.4028 16.0093 10.5464V13.0069C16.0093 14.9186 18.4834 15.7298 19.6495 14.2004L23.3933 9.29034C24.2022 8.2294 24.2022 6.7706 23.3933 5.70966L19.6495 0.799565ZM7.48201 11.6095C9.28721 10.0341 11.8785 8.55568 16.0093 8.55568H17.0207C17.5792 8.55568 18.0319 9.00103 18.0319 9.55037L18.0317 13.0069L21.7754 8.09678C22.0451 7.74313 22.0451 7.25687 21.7754 6.90322L18.0317 1.99313V4.90738C18.0317 5.4567 17.579 5.90201 17.0205 5.90201H16.0093C11.4593 5.90201 9.41596 8.33314 9.41596 8.33314C8.47524 9.32418 7.86984 10.502 7.48201 11.6095Z" fill="#ffffff"></path> <path d="M7 1.00391H4C2.34315 1.00391 1 2.34705 1 4.00391V20.0039C1 21.6608 2.34315 23.0039 4 23.0039H20C21.6569 23.0039 23 21.6608 23 20.0039V17.0039C23 16.4516 22.5523 16.0039 22 16.0039C21.4477 16.0039 21 16.4516 21 17.0039V20.0039C21 20.5562 20.5523 21.0039 20 21.0039H4C3.44772 21.0039 3 20.5562 3 20.0039V4.00391C3 3.45162 3.44772 3.00391 4 3.00391H7C7.55228 3.00391 8 2.55619 8 2.00391C8 1.45162 7.55228 1.00391 7 1.00391Z" fill="#ffffff"></path> </g></svg>
                     
                    </form>
                 
                  <form action="{{ route('Task.destroy', $task->id) }}" method="POST" class="inline-block">
                      @csrf
                      @method('DELETE')
<button class="mt-1">
                          <svg class="w-7   hover:text-black" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6M14 10V17M10 10V17" stroke="#fffafa" stroke-width="0.8160000000000001" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                     
                        </button>
                    </form>

                </div>
              </div>

            <div class="flex items-start justify-between   mb-6">
              
               

                    {{-- <form action="{{ route('Task.destroy', $task->id) }}" method="POST" class="inline-block">
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
                    --}}
                 
             
            </div>
            <h1 class="text-xl  font-base text-white"> {{ $task->title }} </h1>
            <!-- Task Description -->
            <p class="text-red-500  h-6 mb-3">
              {{ $task->description }}
            </p>
  
            <!-- Dates -->
            <div class=" -ml-24  mb-6">
              <div class="flex items-center gap-3 text-gray-300">
                
                <div class="text-[12px]">
                  <strong>Start Date:</strong> {{ \Carbon\Carbon::parse($task->start)->format('M d, Y H:i') }}
                </div>
              </div>
              <div class="flex items-center gap-3 text-gray-300">
                
                <div class="text-[12px]">
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







