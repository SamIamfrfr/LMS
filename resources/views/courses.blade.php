<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Courses') }}
        </h2>
    </x-slot> 

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Courses</title>

        <style>
            div.dataTables_length {
                display: none !important;
            }
        </style>

        <style>
            div.dataTables_filter {
                float: left !important;
                text-align: left !important;
            }

            /* Optional: clear float if needed */
            #myTable_wrapper .dataTables_filter {
                margin-bottom: 1rem;
            }

            div.dataTables_length {
                display: none !important;
            }
        </style>
    </head>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-8 text-gray-900 dark:text-gray-100">
                        <h1 class="text-4xl font-extrabold leading-tight tracking-tight mb-4"> What’s Currently Available </h1>
                        <p class="text-lg font-medium text-gray-700 dark:text-gray-300"> Explore the list of active courses below.</p>
                    </div>
                    
                    
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table id="myTable" class="display" style="width:100%">
                        <thead class="bg-gray-200 dark:bg-gray-700">
                            
                            <tr class="bg-gray-200 dark:bg-gray-700">
                                <th>{{ __("Course Name") }}</th>
                                <th>{{ __("Location") }}</th>
                                <th>{{ __("Instructor") }}</th>
                                <th>{{ __("Course ID") }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($courses->isEmpty())
                                <tr>
                                    <td colspan="4" class="text-center">{{ __("No courses available at the moment.") }}</td>
                                </tr>                            
                            @else
                                <ul>
                                    @foreach($courses as $course)
                                        <tr>
                                            <td>{{ $course->Course_Name }}</td>
                                            <td>{{ $course->Location }}</td>
                                            <td>{{ $course->Instructor }}</td>                    
                                            <td>{{ $course->CourseID }}</td>
                                        </tr>
                                    @endforeach
                                </ul>
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("") }}
                </div>  
            </div>
        </div>
    </div>

<!--UPLOAD THIS PART TO COURSES IN SQLITE-->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-xl round-lg p-8 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-3xl font-extrabold text-gray-800 dark:text-white mb-6">Register a Course</h2>
                    <form method="POST" action="{{ route('courses.store') }}" class="space-y-6">
                        @csrf

                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            
                            
                            <div class="py-2">
                                <div>
                                     <label for="coursename" class="block text-lg font-large text-gray-700 dark:text-gray-300 mb-1">
                                        Course Name
                                    </label>
                                <input
                                    type="text"
                                    id="coursename"
                                    name="Course_Name"
                                    required
                                    class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                >
                                </div>
                                
                                <div class=py-10>
                                    <label for="courseid" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Course ID
                                    </label>
                                    <input
                                        type="number"
                                        id="courseid"
                                        name="CourseID"
                                        required
                                        class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                    >
                                </div>

                                <div>
                                    <label for="location" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Location
                                    </label>
                                    <input
                                        type="text"
                                        id="location"
                                        name="Location"
                                        required
                                        class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                    >
                                </div>

                                <div class="py-10">
                                    <label for="instructor" class="block text-lg font-medium text-gray-700 dark:text-gray-300 mb-1">
                                        Instructor
                                    </label>
                                    <input
                                        type="text"
                                        id="instructor"
                                        name="Instructor"
                                        required
                                        class="w-full px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-white rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                                    >
                                </div>

                            </div>
                        </div>
                        <div class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"> <input type="submit"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
=
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />



@push('scripts')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- DataTables Default Styling (NOT Tailwind version) -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable({
                paging: true,
                searching: true,
                lengthChange: false,
                info: true,
                order: [[3, 'asc']],
                columnDefs: [
                    { orderable: true, targets: 3 }
                ]
            });
            $('.dataTables_length').remove();
        });
    </script>
@endpush

        
</x-app-layout>