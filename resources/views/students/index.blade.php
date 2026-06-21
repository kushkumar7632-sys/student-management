<!-- <form method="GET" action="{{ route('students.search') }}"> 
    <input type="text" name="search" placeholder="Search Student">

    <button type="submit">Search</button>

<hr>



<a href="{{ route('students.create') }}">Add Student</a>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

    @foreach($students as  $student)
    <tr>
        <td>{{ $student->name }}</td>
        <td>{{ $student->email }}</td>
        <td>{{ $student->phone }}</td>
        <td>{{ $student->course }}</td>
        <td>
            <a href="{{ route('students.edit',$student->id) }}">
                Edit
            </a>
            <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                @csrf
                @method('DELETE')
                
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach    
</table> -->



<x-app-layout>

<div class="max-w-7xl mx-auto py-8 px-4">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Student Management
            </h1>

            <p class="text-gray-500 mt-1">
                Manage all registered students
            </p>
        </div>

        <a href="{{ route('students.create') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-5 py-3 rounded-lg font-semibold shadow">
            + Add Student
        </a>

    </div>

    <!-- Search Box -->
    <div class="bg-white rounded-2xl shadow-lg p-6 mb-6">

        <form method="GET" action="{{ route('students.search') }}">

            <div class="flex gap-3">

                <input
                    type="text"
                    name="search"
                    placeholder="Search student by name..."
                    class="flex-1 border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none"
                >

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-semibold">
                    Search
                </button>

            </div>

        </form>

    </div>

    <!-- Student Table -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <div class="p-6 border-b">
            <h2 class="text-xl font-semibold">
                Student List
            </h2>
        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="p-4 text-left">Name</th>
                        <th class="p-4 text-left">Email</th>
                        <th class="p-4 text-center">Phone</th>
                        <th class="p-4 text-center">Course</th>
                        <th class="p-4 text-center">Action</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($students as $student)

                    <tr class="border-t hover:bg-gray-50">

                        <td class="p-4 font-medium">
                            {{ $student->name }}
                        </td>

                        <td class="p-4">
                            {{ $student->email }}
                        </td>

                        <td class="p-4 text-center">
                            {{ $student->phone }}
                        </td>

                        <td class="p-4 text-center">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                                {{ $student->course }}
                            </span>
                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a href="{{ route('students.edit', $student->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm">
                                    Edit
                                </a>

                                <form action="{{ route('students.destroy', $student->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this student?')">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" class="text-center p-8 text-gray-500">
                            No Students Found
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>