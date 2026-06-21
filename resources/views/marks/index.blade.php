<!-- <h2>Marks List</h2>

<table border="1">
    <tr>
        <th>Student</th>
        <th>Course</th>
        <th>Marks</th>
        <th>Grade</th>
    </tr>

    @foreach($marks as $mark)
    <tr>
        <td>{{ $mark->student->name }}</td>
        <td>{{ $mark->course->course_name }}</td>
        <td>{{ $mark->marks }}</td>
        <td>{{ $mark->grade }}</td>
    </tr>
    @endforeach

</table> -->


<x-app-layout>

<div class="max-w-7xl mx-auto py-8 px-4">

    <!-- Header -->
    <div class="flex justify-between items-center mb-6">

        <div>
            <h1 class="text-3xl font-bold text-gray-800">
                Marks Management
            </h1>

            <p class="text-gray-500 mt-1">
                View student marks and grades
            </p>
        </div>

        <a href="{{ route('marks.create') }}"
           class="bg-cyan-600 hover:bg-cyan-700 text-white px-5 py-3 rounded-lg font-semibold shadow">
            + Add Marks
        </a>

    </div>

    <!-- Table Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <div class="p-6 border-b">
            <h2 class="text-xl font-semibold">
                Student Marks List
            </h2>
        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="p-4 text-left">Student</th>
                        <th class="p-4 text-left">Course</th>
                        <th class="p-4 text-center">Marks</th>
                        <th class="p-4 text-center">Grade</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($marks as $mark)

                    <tr class="border-t hover:bg-gray-50">

                        <td class="p-4 font-medium">
                            {{ $mark->student->name }}
                        </td>

                        <td class="p-4">
                            {{ $mark->course->course_name }}
                        </td>

                        <td class="p-4 text-center font-bold">
                            {{ $mark->marks }}
                        </td>

                        <td class="p-4 text-center">

                            @if($mark->grade == 'A')
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $mark->grade }}
                                </span>

                            @elseif($mark->grade == 'B')
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $mark->grade }}
                                </span>

                            @elseif($mark->grade == 'C')
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $mark->grade }}
                                </span>

                            @else
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">
                                    {{ $mark->grade }}
                                </span>
                            @endif

                        </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="4" class="text-center p-8 text-gray-500">
                            No Marks Found
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>