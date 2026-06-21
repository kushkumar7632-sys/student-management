<!-- <form action="{{ route('attendance.store') }}" method="POST">
    @csrf
    
    <input type="date" name="date">

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Status</th>
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->name }}</td>

            <td>
                <select name="status[{{ $student->id }}]">
                    <option value="Present">Present</option>
                    <option value="Absent">Absent</option>
                </select>
            </td>
        </tr>
        @endforeach
    </table>
    <button type="submit">
        Save Attendance
    </button>    
</form>

   -->


<x-app-layout>
   <div class="max-w-5xl mx-auto mt-8 px-4">

    <!-- Card -->
    <div class="bg-white shadow-xl rounded-2xl overflow-hidden">

        <!-- Header -->
        <div class="bg-gradient-to-r from-blue-600 to-indigo-600 p-6">
            <h2 class="text-2xl font-bold text-white">
                Student Attendance Management
            </h2>
            <p class="text-blue-100 mt-1">
                Mark today's attendance and save records.
            </p>
        </div>

        <!-- Form -->
        <form action="{{ route('attendance.store') }}" method="POST" class="p-6">
            @csrf

            <!-- Date Section -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Attendance Date
                </label>
                <input
                    type="date"
                    name="date"
                    required
                    class="w-full md:w-72 border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                >
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border p-3 text-left">
                                Student Name
                            </th>
                            <th class="border p-3 text-center">
                                Attendance Status
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($students as $student)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border p-3 font-medium">
                                {{ $student->name }}
                            </td>

                            <!-- <td class="border p-3 text-center">
                                <select
                                    name="status[{{ $student->id }}]"
                                    class="border rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                >
                                    <option value="Present">
                                        ✅
                                    </option>

                                    <option value="Absent">
                                        ❌ 
                                    </option>
                                </select>
                            </td> -->

                            <td class="border p-3">
    <div class="flex justify-center gap-6">

        <!-- Present -->
        <label class="flex items-center gap-2 cursor-pointer">
            <input
                type="radio"
                name="status[{{ $student->id }}]"
                value="Present"
                checked
                class="w-4 h-4 text-green-600"
            >
            <span class="font-medium text-green-600">
                Present
            </span>
        </label>

        <!-- Absent -->
        <label class="flex items-center gap-2 cursor-pointer">
            <input
                type="radio"
                name="status[{{ $student->id }}]"
                value="Absent"
                class="w-4 h-4 text-red-600"
            >
            <span class="font-medium text-red-600">
                Absent
            </span>
        </label>

    </div>
</td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Button -->
            <div class="mt-6 text-right">
                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition"
                >
                    Save Attendance
                </button>
            </div>

        </form>

    </div>
</div>
</x-app-layout>