<!-- <h2>Attendance Report</h2>

<table border="1">

<tr>
    <th>Student Name</th>
    <th>Date</th>
    <th>Status</th>
</tr>

@foreach($attendances as $attendance)

<tr>
    <td>{{ $attendance->student->name }}</td>
    <td>{{ $attendance->date }}</td>
    <td>{{ $attendance->status }}</td>
</tr>

@endforeach

</table> -->


<x-app-layout>

<div class="max-w-6xl mx-auto py-8 px-4">

    <!-- Header -->
    <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl shadow-lg p-6 mb-6">
        <h2 class="text-3xl font-bold text-white">
            Attendance Report
        </h2>
        <p class="text-green-100 mt-2">
            View all student attendance records.
        </p>
    </div>

    <!-- Report Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">

        <div class="p-6 border-b">
            <h3 class="text-xl font-semibold text-gray-800">
                Attendance Records
            </h3>
        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead>
                    <tr class="bg-gray-100 text-gray-700">
                        <th class="p-4 text-left">Student Name</th>
                        <th class="p-4 text-center">Date</th>
                        <th class="p-4 text-center">Status</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach($attendances as $attendance)

                    <tr class="border-t hover:bg-gray-50">

                        <td class="p-4 font-medium">
                            {{ $attendance->student->name }}
                        </td>

                        <td class="p-4 text-center">
                            {{ $attendance->date }}
                        </td>

                        <td class="p-4 text-center">

                            @if($attendance->status == 'Present')
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-semibold">
                                    ✅ Present
                                </span>
                            @else
                                <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm font-semibold">
                                    ❌ Absent
                                </span>
                            @endif

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

</x-app-layout>