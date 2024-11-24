 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <title>Document</title>
    <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>

</head> {{-- bg-gradient-to-br from-[#010004] via-[#0263600] to-[#010004] --}}
    

<body class="font-sans antialiased bg-black text-white">
  
 <nav class="fixed inset-x-0 top-0 z-30 mx-auto w-full max-w-screen-md border-gray-100 bg-white/5 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-3xl lg:max-w-screen-lg">
            <div class="px-4">
                <div class="flex items-center justify-between">
                    <div class="flex shrink-0">
                        <a aria-current="page" class="flex items-center" href="/">
                            <h1 class="text-white text-2xl font-bold">WeFlow</h1>
                        </a>
                    </div>
                    <div class="hidden md:flex md:items-center md:justify-center md:gap-5">
                        <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-[#fefeff] transition-all duration-200 hover:bg-gray-100 hover:text-gray-900" href="#features">Features</a>
                        <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-[#fefeff] transition-all duration-200 hover:bg-gray-100 hover:text-gray-900" href="#how-it-works">How It Works</a>
                        <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-[#fefeff] transition-all duration-200 hover:bg-gray-100 hover:text-gray-900" href="#pricing">Pricing</a>
                        <a class="inline-block rounded-lg px-2 py-1 text-sm font-medium text-[#fefeff] transition-all duration-200 hover:bg-gray-100 hover:text-gray-900" href="#contact">Contact</a>
                    </div>
                    <div class="flex items-center justify-end gap-3">
                        <a href="{{ route('login') }}" class="hidden rounded-full items-center justify-center px-3 py-2 text-sm font-semibold text-white shadow-sm transition-all duration-150 sm:inline-flex">Sign in</a>
                        <a href="{{ route('register') }}" class="inline-flex bg-gradient-to-br from-[#040004] via-[#020cb9] to-[#010004]  border-[#020cb9] border-2 items-center justify-center rounded-full px-3 py-2 text-sm font-semibold text-white shadow-sm transition-all duration-150">Sign up</a>
                    </div>
                </div>
            </div>
        </nav>

    <main>
{{-- <dotlottie-player src="https://lottie.host/f281f1c6-45be-4444-95ea-9c805ca7ff5f/bFRZ158iQq.lottie" background="transparent" speed="1" style="width: 300px; height: 300px" loop autoplay></dotlottie-player> --}}
       
        <section class="pt-20 pb-10 justify-center items-center flex text-white text-center">
            <div class="flex  bg-[url('https://www.systecx.com/images/blackrip-commitment.png')] bg-no-repeat flex-col  items-center justify-center  pr-72  pl-72 p-20">
                <h1 class="text-7xl mr-50 font-bold leading-tight">
                            
                    <span class="gradient-text">Organize</span> prioritize  
                  </h1>
                  <h1 class="text-7xl font-bold leading-tight">
                            
                    <span class="gradient-text">and</span> collaborate your Task 
                  </h1>
                    <div class="flex  relative z-30 p-5 text-2xl justify-center bg-opacity-50 gap-10 flex-row justify-items-center">
                        <div class=" text-7xl font-bold leading-tight">With WEFLOW</div>
                        <div class="flex  mt-6  mb-2 space-x-4">
                          
                            
                            <a href="{{ route('register') }}" class="  flex justify-center gap-2 items-center mx-auto shadow-xl text-lg  backdrop-blur-md lg:font-semibold isolation-auto  before:absolute before:w-full before:transition-all before:duration-700 before:hover:w-full before:-left-full before:hover:left-0 before:rounded-full before:bg-black     bg-gradient-to-br from-[#040004] via-[#020cb9] to-[#010004]  hover:text-gray-50 before:-z-10 before:aspect-square before:hover:scale-150 before:hover:duration-700 relative z-10  py-2 overflow-hidden border-[#6e36f2]  group  g border-2  px-9 -[#010004] rounded-full text-white ring-1 ring-transparent transition  focus:outline-none">
                                Get started
                                <svg
                                  class="w-8 h-8 group-hover:rotate-90 group-hover:bg-black text-gray-50 ease-linear duration-300 rounded-full border border-gray-700 group-hover:border-none p-2 rotate-45"
                                  viewBox="0 0 16 19"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M7 18C7 18.5523 7.44772 19 8 19C8.55228 19 9 18.5523 9 18H7ZM8.70711 0.292893C8.31658 -0.0976311 7.68342 -0.0976311 7.29289 0.292893L0.928932 6.65685C0.538408 7.04738 0.538408 7.68054 0.928932 8.07107C1.31946 8.46159 1.95262 8.46159 2.34315 8.07107L8 2.41421L13.6569 8.07107C14.0474 8.46159 14.6805 8.46159 15.0711 8.07107C15.4616 7.68054 15.4616 7.04738 15.0711 6.65685L8.70711 0.292893ZM9 18L9 1H7L7 18H9Z"
                                    class="fill-gray-800 group-hover:fill-gray-800"
                                  ></path>
                                </svg>
                              </a>

                        </div>
                    </div>
                    <div class="flex items-cnter justify-center"><p class="text-gray-400 text-sm mt-4 max-w-lg">
                        Machine learning, language processing,  and other subfields and  methods are all included in  artificial intelligence.
                      </p></div>
                     
            
                </div>
             
        </section>

        <section class="bg-black text-white p-12   flex items-center justify-center ">
            <div class=" flex flex-col justify-between  md:flex-row items-center space-y-8 md:space-y-0 md:space-x-12">
              <!-- Text Section -->
              <div class="text-center   p-12 md:text-left">
                <h1 class="text-3xl md:text-4xl font-bold leading-snug">
                  Everything interactivity and  motion.<br> Choose the ideal  block from our <br> library  of pre-made designs
                <span class="text-white/65">  rather <br> than starting from scratch and <br> watch the magic happen.</span>
                
                
                </h1>
                <div class="flex   mt-6 mb-2 space-x-4">
                    <a href="{{ route('register') }}" class="border-2 p-2 px-9 bg-gradient-to-br from-[#010004] via-[#020cb9] to-[#010004] rounded-full text-white ring-1 ring-transparent transition  hover:text-white focus:outline-none">
                        Get started
                    </a>
                </div>
              </div>
              
              <!-- Interactive Card -->
              {{-- <div class="bg-white/5 p-6 rounded-lg shadow-lg w-full max-w-sm">
                <div class="mb-4">
                  <label for="number-of-images" class="block text-sm font-medium text-gray-300 mb-1">Number of Images</label>
                  <select id="number-of-images" class="w-full bg-gray-800 border border-gray-700 rounded px-3 py-2 text-white">
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                  </select>
                </div>
                <div class="mb-4">
                  <span class="block text-sm font-medium text-gray-300 mb-1">Ratio</span>
                  <div class="flex space-x-2">
                    <button class="w-12 h-12 bg-[#6e36f2] text-white rounded-lg focus:ring focus:ring-purple-400">1:1</button>
                    <button class="w-12 h-12 bg-gray-800 text-gray-300 rounded-lg focus:ring focus:ring-purple-400">2:3</button>
                    <button class="w-12 h-12 bg-gray-800 text-gray-300 rounded-lg focus:ring focus:ring-purple-400">4:3</button>
                  </div>
                </div>
                <div>
                  <span class="block text-sm font-medium text-gray-300 mb-1">Visual Style</span>
                  <div class="flex flex-wrap gap-2">
                    <button class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg focus:ring focus:ring-purple-400">3D</button>
                    <button class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg focus:ring focus:ring-purple-400">Realistic</button>
                    <button class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg focus:ring focus:ring-purple-400">Cartoon</button>
                    <button class="px-4 py-2 bg-gray-800 text-gray-300 rounded-lg focus:ring focus:ring-purple-400">Fantasy</button>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="bg-white/5 p-6 rounded-lg shadow-lg w-full max-w-sm">
                <div class="flex flex-col space-y-4">
                  <!-- Sent Message -->
                  <div class="self-end max-w-xs bg-[#6e36f2] text-white rounded-lg px-4 py-2 shadow">
                    Hi there! How can I help you today?
                  </div>
                  <!-- Received Message -->
                  <div class="self-start max-w-xs bg-gray-800 text-gray-300 rounded-lg px-4 py-2 shadow">
                    I need assistance with setting up my account.
                  </div>
                  <!-- Sent Message -->
                  <div class="self-end max-w-xs bg-[#6e36f2] text-white rounded-lg px-4 py-2 shadow">
                    Sure! Let me guide you through the process.
                  </div>
                  <!-- Received Message -->
                  <div class="self-start max-w-xs bg-gray-800 text-gray-300 rounded-lg px-4 py-2 shadow">
                    Thank you!
                  </div>
                </div>
              </div> --}}
              {{-- <div class="bg-white text-white  rounded-xl max-w-sm mx-auto overflow-hidden">
                <!-- Chat Header -->
                <div class="bg-gray-800 text-center p-4 border-b border-gray-700">
                  <h2 class="text-lg font-semibold">Aysha Hayes</h2>
                  <p class="text-sm text-green-400">Online</p>
                </div>
              
                <!-- Chat Messages -->
                <div class="p-4 space-y-4 overflow-y-auto h-96">
                  <!-- Sent Message -->
                  <div class="flex justify-end">
                    <div>
                      <div class="bg-green-500 text-white text-sm rounded-lg px-4 py-2">
                        Hi, good to see you! We're starting work on a presentation for a new product today, right?
                      </div>
                      <span class="text-xs text-gray-500 block mt-1 text-right">8:36 PM</span>
                    </div>
                  </div>
              
                  <!-- Received Message -->
                  <div class="flex items-start">
                    <img
                      src="avatar1.jpg"
                      alt="Avatar"
                      class="w-8 h-8 rounded-full mr-3"
                    />
                    <div>
                      <div class="bg-gray-700 text-gray-300 text-sm rounded-lg px-4 py-2">
                        Yes, that's right. Let's discuss the main points and structure of the presentation.
                      </div>
                      <span class="text-xs text-gray-500 block mt-1">8:38 PM</span>
                    </div>
                  </div>
              
                  <!-- Voice Message -->
                  <div class="flex justify-end">
                    <div>
                      <div class="bg-green-500 text-white text-sm rounded-lg px-4 py-2 flex items-center space-x-2">
                        <span class="bg-white text-green-500 rounded-full p-1 text-xs font-semibold">▶️</span>
                        <div class="h-1 bg-white w-20 rounded"></div>
                        <span class="text-xs">1:04</span>
                      </div>
                      <span class="text-xs text-gray-500 block mt-1 text-right">8:40 PM</span>
                    </div>
                  </div>
              
                  <!-- Received Message -->
                  <div class="flex items-start">
                    <img
                      src="avatar1.jpg"
                      alt="Avatar"
                      class="w-8 h-8 rounded-full mr-3"
                    />
                    <div>
                      <div class="bg-gray-700 text-gray-300 text-sm rounded-lg px-4 py-2">
                        Okay, then let's divide the presentation into a few main sections: introduction, product description, features and benefits, use cases, and conclusion.
                      </div>
                      <span class="text-xs text-gray-500 block mt-1">8:52 PM</span>
                    </div>
                  </div>
              
                  <!-- Final Message -->
                  <div class="flex justify-end">
                    <div>
                      <div class="bg-green-500 text-white text-sm rounded-lg px-4 py-2">
                        It's a deal
                      </div>
                      <span class="text-xs text-gray-500 block mt-1 text-right">8:56 PM</span>
                    </div>
                  </div>
                </div>
              
                <!-- Chat Footer -->
                <div class="flex items-center bg-gray-800 p-4 border-t border-gray-700">
                  <input
                    type="text"
                    placeholder="Type your message..."
                    class="flex-1 bg-gray-700 text-white text-sm rounded-full px-4 py-2 outline-none placeholder-gray-400"
                  />
                  <button class="ml-3 text-gray-400 hover:text-white">
                    📎
                  </button>
                  <button class="ml-3 text-gray-400 hover:text-white">
                    🎤
                  </button>
                </div>
              </div> --}}
              <div class="relative w-[210px] h-[400px] bg-black rounded-[35px] border-2 border-gray-800 p-[7px] shadow-[2px_5px_15px_rgba(0,0,0,0.486)]">
                <!-- Inner Gradient Card -->
                <div class="h-full bg-gradient-to-br from-[#020cb9] via-white to-black bg-[length:200%_200%] bg-left-top rounded-[25px] transition-all duration-[600ms] ease-out overflow-hidden hover:bg-right-bottom">
                  <!-- Top -->
                  <div class="absolute top-0 right-1/2 translate-x-1/2 w-[35%] h-[18px] bg-black rounded-b-[10px]"></div>
                  <!-- Speaker -->
                  <div class="absolute top-[2px] right-1/2 translate-x-1/2 w-[40%] h-[2px] bg-gray-800 rounded-[2px]"></div>
                  <!-- Camera -->
                  <div class="absolute top-[6px] right-[84%] translate-x-1/2 w-[6px] h-[6px] bg-white/5 rounded-full"></div>
                  <!-- Center Dot -->
                  <div class="absolute top-1/2 right-1/2 translate-x-1/2 -translate-y-1/2 w-[3px] h-[3px] bg-blue-700/30 rounded-full"></div>
              
                  <!-- Buttons -->
                  <div class="absolute top-[30%] right-[-4px] h-[45px] w-[2px] bg-gradient-to-r from-gray-900 via-gray-800 to-gray-600"></div>
                  <div class="absolute top-[26%] left-[-4px] h-[30px] w-[2px] bg-gradient-to-r from-gray-900 via-gray-800 to-gray-600 scale-x-[-1]"></div>
                  <div class="absolute top-[36%] left-[-4px] h-[30px] w-[2px] bg-gradient-to-r from-gray-900 via-gray-800 to-gray-600 scale-x-[-1]"></div>
              
                  <!-- Content -->
                  <div class="flex flex-col items-center justify-center h-full text-white font-bold text-center leading-[35px] text-2xl transition-transform duration-500 ease-in-out hover:translate-y-[-20px]">
                    <div class="hidden opacity-0 transition-opacity duration-300 ease-in hover:opacity-100">Hover Content</div>
                    <span>Hello</span>
                  </div>
                </div>
              </div>
              
            </div>








            
          </section>

         



       
       
          <section id="features" class="py-20 flex items-center justify-center bg-black">
            <div class="container pt-16 mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-white  ">Powerful Features for Seamless Collaboration</h2>
                <p class="text-center font-light p-8 flex items-center justify-center text-white/70">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt ex reprehenderit earum ipsum. Doloribus dolorum magnam sequi explicabo! Dolor, quia!</p>
                <div class="grid md:grid-cols-2 m-6 lg:grid-cols-4 gap-12">
                    <!-- Feature 1 -->
                    <div class="feature bg-white/5 border border-[#020cb9] rounded-lg p-6 text-center opacity-0 translate-y-10 transition-all duration-700 transform hover:scale-105 hover:shadow-lg hover:shadow-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary mb-4 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="text-[#5843d0]" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                        <h3 class="text-xl font-bold mb-4">Task Management Made Easy</h3>
                        <p class="text-gray-400 font-light">Create, update, and assign tasks effortlessly.</p>
                    </div>
                    <!-- Feature 2 -->
                    <div class="feature bg-white/5 border border-[#020cb9] rounded-lg p-6 text-center opacity-0 translate-y-10 transition-all duration-700 transform hover:scale-105 hover:shadow-lg hover:shadow-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary mb-4 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="text-[#5843d0]" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-4">Collaborate with Your Team</h3>
                        <p class="text-gray-400 font-light">Invite team members, manage tasks, and chat seamlessly.</p>
                    </div>
                    <!-- Feature 3 -->
                    <div class="feature bg-white/5 border border-[#020cb9] rounded-lg p-6 text-center opacity-0 translate-y-10 transition-all duration-700 transform hover:scale-105 hover:shadow-lg hover:shadow-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary mb-4 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="text-[#5843d0]" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-4">Stay on Top of Deadlines</h3>
                        <p class="text-gray-400 font-light">Automatic reminders for overdue tasks to keep things on track.</p>
                    </div>
                    <!-- Feature 4 -->
                    <div class="feature bg-white/5 border border-[#020cb9] rounded-lg p-6 text-center opacity-0 translate-y-10 transition-all duration-700 transform hover:scale-105 hover:shadow-lg hover:shadow-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary mb-4 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path class="text-[#5843d0]" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path class="text-[#5843d0]" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <h3 class="text-xl font-bold mb-4">Control at Your Fingertips</h3>
                        <p class="text-gray-400 font-light">Team owners can assign roles and manage users with ease.</p>
                    </div>
                </div>
            </div>
        </section>
        <h2 class="text-4xl font-bold text-center text-white  ">"Plan. Prioritize. Achieve"</h2>
        <p class="text-center font-light p-8 flex items-center justify-center text-white/70">Your tasks, your way — organized and efficient for a stress-free workflow.</p>
        <section class="text-white   flex items-center justify-center">
            
            <div class="max-w-7xl border-2 rounded-3xl p-12 mx-auto bg-white border-[#020cb9] px-6 flex flex-col md:flex-row items-center justify-between space-y-12 md:space-y-0 md:gap-12">
             
             
                <!-- Calendar Section -->
              <div class="bg-black p-8  rounded-xl shadow-lg w-full max-w-md">
                <div class="flex justify-between  border rounded-full items-center mb-6">
                  <button class="text-gray-400 hover:text-white p-2 rounded-full bg-white border border-[#020cb9]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                  </button>
                  <h3 class="text-lg text-white font-semibold">November 2024</h3>
                  <button class="text-gray-400 hover:text-white p-2 rounded-full bg-white border border-[#020cb9]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                  </button>
                </div>
          
                <!-- Days of the Week -->
                <div class="grid grid-cols-7 gap-2 text-center text-gray-400 mb-3">
                  <div>S</div>
                  <div>M</div>
                  <div>T</div>
                  <div>W</div>
                  <div>T</div>
                  <div>F</div>
                  <div>S</div>
                </div>
          
                <!-- Dates -->
                <div class="grid grid-cols-7 gap-2 text-center">
                  <!-- Empty days for padding -->
                  <div></div><div></div><div></div><div></div><div></div>
                  <!-- Dates -->
                  <div class="text-gray-400">1</div>
                  <div class="text-gray-400">2</div>
                  <div class="text-gray-400">3</div>
                  <div class="text-gray-400">4</div>
                  <div class="text-gray-400">5</div>
                  <div class="text-gray-400">6</div>
                  <div class="text-gray-400">7</div>
                  <div class="text-gray-400">8</div>
                  <div class="text-gray-400">9</div>
                  <div class="text-gray-400">10</div>
                  <div class="text-gray-400">11</div>
                  <div class="text-gray-400">12</div>
                  <div class="text-gray-400">13</div>
                  <div class="text-gray-400">14</div>
                  <div class="text-gray-400">15</div>
                  <div class="text-gray-400">16</div>
                  <div class="text-gray-400">17</div>
                  <div class="text-gray-400">18</div>
                  <div class="text-gray-400">19</div>
                  <div class="text-gray-400">20</div>
                  <div class="text-gray-400">21</div>
                  <div class="text-gray-400">22</div>
                  <div class="text-gray-400">23</div>
                  <div class="text-gray-400">24</div>
                  <div class="text-gray-400">25</div>
                  <div class="text-gray-400 rounded-full bg-[#020cb9]">26</div>
                  <div class="text-gray-400">27</div>
                  <div class="text-gray-400">28</div>
                  <div class="text-gray-400">29</div>
                  <div class="text-gray-400">30</div>
                </div>
              </div>
          
              <!-- Content Section -->
              <div class="max-w-lg">
                <h3 class="text-[#020cb9] text-lg font-semibold uppercase mb-2">WEflow</h3>
                <h1 class="text-4xl text-black md:text-5xl font-extrabold leading-tight">
                  Conqure Your Task and Simplify Your <span class="text-[#020cb9]">Workflow</span>.
                </h1>
                <p class="text-gray-400 mt-4">
                  Effortlessly manage your tasks, prioritize effectively, and boost productivity with our intuitive app. Enjoy seamless organization and a simplified workflow
                </p>
              </div>
            </div>
          </section>
          
        
          
          
         
       
          <section id="pricing" class="py-20 bg-black">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-12 text-white">
                    Choose Your <span class="text-primary">Plan</span>
                </h2>
                <div class="grid md:grid-cols-3 gap-8 m-28">
                    <!-- Basic Plan -->
                    <div class=" border-2 border-white   rounded-[25px] transition-all duration-[600ms] ease-out overflow-hidden hover:bg-right-bottom  p-8 text-center transform  hover:scale-105 hover:shadow-xl hover:shadow-primary/20">
                        <h3 class="text-2xl font-bold mb-4 text-white">Basic</h3>
                        <p class="text-4xl font-bold text-primary mb-6">
                            Free<span class="text-sm text-gray-400"></span>
                        </p>
                        <ul class="text-gray-300 mb-6 min-h-[200px]">
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Up to 5 team members
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                100 tasks
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Basic reporting
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                24/7 support
                            </li>
                        </ul>
                        <a href="#" class="relative overflow-hidden group bg-primary border-2 border-[#020cb9]  hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 inline-block">
                            <span class="relative z-10"> Started for free</span>
                            <span class="absolute inset-0 h-full w-full scale-0 rounded-full bg-white opacity-10 transition-all duration-300 group-hover:scale-100"></span>
                        </a>
                    </div>
    
                    <!-- Pro Plan -->
                    <div class="  border-2 bg-gradient-to-br from-black  to-[#020cb9] bg-[length:200%_200%] bg-left-top  border-white rounded-2xl p-8 text-center transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl hover:shadow-primary/20 relative">
                        <div class="absolute bg-gradient-to-br from-[#040004] via-[#020cb9] to-[#010004]  top-0 right-0 bg-primary text-white text-xs font-bold px-3 py-1 rounded-tr-2xl rounded-bl-2xl">
                            Popular
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-white">Pro</h3>
                        <p class="text-4xl font-bold text-primary mb-6">
                            $29<span class="text-sm text-gray-400">/month</span>
                        </p>
                        <ul class="text-gray-300 mb-6 min-h-[200px]">
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Up to 20 team members
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Unlimited tasks
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Advanced reporting
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Priority support
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-primary" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Custom integrations
                            </li>
                        </ul>
                        <a href="#" class="relative overflow-hidden border border-[#020cb9] bg-gradient-to-br from-[#040004] via-[#020cb9] to-[#010004]  group bg-primary hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 inline-block">
                            <span class="relative z-10">Get Started</span>
                            <span class="absolute inset-0 h-full w-full scale-0 rounded-full bg-white opacity-10 transition-all duration-300 group-hover:scale-100"></span>
                        </a>
                    </div>
    
                    <!-- Enterprise Plan -->
                    <div class="border-2 border-white rounded-2xl p-8 text-center transform transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-xl hover:shadow-primary/20">
                        <h3 class="text-2xl font-bold mb-4 text-white">Enterprise</h3>
                        <p class="text-4xl font-bold text-primary mb-6">Custom</p>
                        <ul class="text-gray-300 mb-6 min-h-[200px]">
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Unlimited team members
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Unlimited tasks
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Advanced reporting & analytics
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Dedicated account manager
                            </li>
                            <li class="mb-2 flex items-center justify-center">
                                <svg class="w-4 h-4 mr-2 text-[#020cb9]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                                Custom features
                            </li>
                        </ul>
                        <a href="#" class="relative border-2 border-[#020cb9] overflow-hidden group bg-primary hover:bg-primary-dark text-white font-bold py-3 px-6 rounded-full transition-colors duration-300 inline-block">
                            <span class="relative z-10">Contact Sales</span>
                            <span class="absolute inset-0 h-full w-full scale-0 rounded-full bg-white opacity-10 transition-all duration-300 group-hover:scale-100"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
       
    </main>

    <footer class="bg-black text-gray-400  bg-[url('https://www.systecx.com/images/blackrip-commitment.png')] bg-no-repeat py-12">
        <div class="container mx-auto px-4">
           
            </div>
           
           
               <h1 class="text-white  font-bold text-9xl text-center">W E F L O W</h1>
            
        </div>
    </footer>

    <script>
        // Simple JavaScript for mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Change header background on scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 20) {
                header.classList.add('bg-black', 'bg-opacity-80', 'backdrop-blur-lg');
            } else {
                header.classList.remove('bg-black', 'bg-opacity-80', 'backdrop-blur-lg');
            }
        });
    </script>
     <script>
        document.addEventListener("DOMContentLoaded", () => {
            const features = document.querySelectorAll(".feature");
    
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.remove("opacity-0", "translate-y-10");
                            entry.target.classList.add("opacity-100", "translate-y-0");
                            observer.unobserve(entry.target); // Stop observing once animation is triggered
                        }
                    });
                },
                { threshold: 0.1 }
            );
    
            features.forEach((feature) => observer.observe(feature));
        });
    </script>
</body>
       
</html>  
       




