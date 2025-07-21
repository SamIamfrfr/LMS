<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
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

            div.dataTables_filter {
                float: left !important;
                text-align: left !important;
            }

            #myTable_wrapper .dataTables_filter {
                margin-bottom: 1rem;
            }
        </style>
    </head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900 dark:text-gray-100">
                
                    <h1 class="text-4xl font-extrabold text-gray-800 dark:text-white mb-6">Users List</h2>
                    <p class="text-lg font-medium text-gray-700 dark:text-gray-300">Welcome to the Users Management Page.</p>
                    <p class="text-lg font-medium text-gray-700 dark:text-gray-300">Here you can view and manage users in the Learning Management System.</p>
                </div>


                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <table id="myTable" class="display" style="width:100%">
                            <thead class="bg-gray-200 dark:bg-gray-700">

                                <tr class="bg-gray-200 dark:bg-gray-700">
                                    <th>{{ __("Usernames") }}</th>
                                    <th>{{ __("Email") }}</th>
                                    <th>{{__("Course ID")}}</th>
                                    <th>{{__("Course Name")}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($users->isEmpty())
                                    <tr>
                                        <td colspan="4" class="text-center">{{ __("No users available at the moment.") }}</td>
                                    </tr>
                                @else
                                    <ul>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->CourseID ?? 'N/A' }}</td>
                                                <td>{{ $user->Course_Name ?? 'N/A' }}</td>
                                            </tr>
                                        @endforeach
                                    </ul>
                                @endif
                            </tbody>
                        </table>
                    </div>

    


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
                lengthChange: true,
                info: true,
                order: [[0, 'asc']],
                columnDefs: [
                    { orderable: false, targets: 3 }
                ]
            });
        });
    </script>
@endpush



   


</x-app-layout>