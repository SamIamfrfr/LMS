<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot> 


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Users List</h1>
                    <p>Welcome to the Users Management Page.</p>
                    <p>Here you can view and manage users in the Learning Management System.</p>
                    
                    <div class ="py-12">
                        <h2>Users:</h2>
                        <ul>
                            @foreach($users as $user)
                                <li class="py-2">
                                    <strong>{{ $user->name }}</strong> 
                                    {{"->"}}
                                    ({{ $user->email }})
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div>                        
                    </div>

                </div>                        
            </div>
        </div>
    </div>
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ url('/courses') }}"
            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
            Courses
            </a>
    </div>
    






   


</x-app-layout>