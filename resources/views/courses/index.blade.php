<!-- <h2>Course List</h2> -->

<!-- <a href="{{ route('courses.create') }}">Add Course</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Course Name</th>
        <th>Course Code</th>
        <th>Duration</th>
        <th>Action</th>
    </tr>

    @foreach($courses as $course)
    <tr>
        <td>{{ $course->id }}</td>
        <td>{{ $course->course_name }}</td>
        <td>{{ $course->course_code }}</td>
        <td>{{ $course->duration }}</td>
        <td>
            <a href="{{ route('courses.edit', $course->id) }}">Edit</a>

            <form action="{{ route('courses.destroy', $course->id) }}"
                  method="POST"
                  style="display:inline;">
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
                Course Management
            </h1>

            <p class="text-gray-500 mt-1">
                Manage all available courses
            </p>
        </div>

        <a href="{{ route('courses.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold shadow">
            + Add Course
        </a>

    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <div class="p-6 border-b">
            <h2 class="text-xl font-semibold">
                Course List
            </h2>
        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="p-4 text-left">ID</th>
                        <th class="p-4 text-left">Course Name</th>
                        <th class="p-4 text-center">Course Code</th>
                        <th class="p-4 text-center">Duration</th>
                        <th class="p-4 text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($courses as $course)

                    <tr class="border-t hover:bg-gray-50">

                        <td class="p-4">
                            {{ $course->id }}
                        </td>

                        <td class="p-4 font-medium">
                            {{ $course->course_name }}
                        </td>

                        <td class="p-4 text-center">
                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                                {{ $course->course_code }}
                            </span>
                        </td>

                        <td class="p-4 text-center">
                            {{ $course->duration }} Months
                        </td>

                        <td class="p-4">

                            <div class="flex justify-center gap-2">

                                <a href="{{ route('courses.edit', $course->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm">
                                    Edit
                                </a>

                                <form action="{{ route('courses.destroy', $course->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('Are you sure you want to delete this course?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm">
                                        Delete
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" class="p-8 text-center text-gray-500">
                            No Courses Found
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>