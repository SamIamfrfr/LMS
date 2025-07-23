<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> 

    <div class="py-12 bg-pink-50 dark:bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow-lg rounded-3xl overflow-hidden transition-all duration-300 hover:shadow-xl">
            <div class="p-10 text-gray-900 dark:text-gray-100 text-center">
                <h1 class="text-5xl font-extrabold tracking-tight text-blue-600 dark:text-blue-400 mb-4 animate-bounce">
                    ✨ Welcome! ✨
                </h1>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">
                    You’ve arrived at your Learning Management System Dashboard.
                </p>
                <p class="text-base text-gray-600 dark:text-gray-400">
                    Manage courses, support your users, and make learning magical. 
                </p>
            </div>
        </div>
    </div>
</div>

    

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-8 text-gray-900 dark:text-gray-100">
                                <h1 class="text-4xl font-extrabold leading-tight text-blue-600 dark:text-blue-400  text-center tracking-tight mb-4"> Explore our most popular courses: </h1>
                            
                                    <div class="py-12 px-4">
  <!-- 🌟 Start of Popular Courses Swiper -->
  <div class="relative bg-gray-800 rounded-xl p-6">
    

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Slide 1 -->
        <div class="swiper-slide bg-gray-900 rounded-lg text-white text-center p-8">
          <img src="/images/sec.jpg" alt="Course 1" class="mx-auto mb-4 w-full h-48 object-cover rounded">
          <h3 class="text-xl font-semibold">Cybersecurity Fundamentals</h3>
        </div>
        <!-- Slide 2 -->
        <div class="swiper-slide bg-gray-900 rounded-lg text-white text-center p-8">
          <img src="/images/webdev.jpg" alt="Course 2" class="mx-auto mb-4 w-full h-48 object-cover rounded">
          <h3 class="text-xl font-semibold">Web Development Bootcamp</h3>
        </div>
        <!-- Slide 3 -->
        <div class="swiper-slide bg-gray-900 rounded-lg text-white text-center p-8">
          <img src="/images/hacking.jpg" alt="Course 3" class="mx-auto mb-4 w-full h-48 object-cover rounded">
          <h3 class="text-xl font-semibold">Ethical Hacking 101</h3>
        </div>

        <div class="swiper-slide bg-gray-900 rounded-lg text-white text-center p-8">
          <img src="/images/crypt.png" alt="Course 4" class="mx-auto mb-4 w-full h-48 object-cover rounded">
          <h3 class="text-xl font-semibold">Cryptography</h3>
        </div>
      </div>

      <!-- Navigation Arrows -->
      <div class="swiper-button-prev !text-blue-500"></div>
      <div class="swiper-button-next !text-blue-500"></div>
    </div>
  </div>
  <!-- 🌟 End of Popular Courses Swiper -->
</div>




                            </div>                          
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </div>
</div>

                
<!--
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8"> <a href="{{ url('/courses') }}"
        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark :hover:border-[#62605b] rounded-sm text-sm leading-normal"
        > Courses </a>
    </div>
-->
</x-app-layout>
