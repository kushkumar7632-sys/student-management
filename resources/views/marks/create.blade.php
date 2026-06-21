<!-- <h2>Add Marks</h2> -->

<!-- <form action="{{ route('marks.store') }}" method="POST">
    @csrf

    <label>Student</label>
    <select name="student_id">
        @foreach($students as $student)
            <option value="{{ $student->id }}">
                {{ $student->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Course</label>
    <select name="course_id">
        @foreach($courses as $course)
            <option value="{{ $course->id }}">
                {{ $course->course_name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <label>Marks</label>
    <input type="number" name="marks">

    <br><br>

    <button type="submit">Save Marks</button>
</form> -->



<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-4">

    <!-- Header -->
    <div class="bg-gradient-to-r from-cyan-600 to-blue-700 rounded-2xl shadow-lg p-6 mb-6">
        <h2 class="text-3xl font-bold text-white">
            Add Student Marks
        </h2>

        <p class="text-cyan-100 mt-2">
            Assign marks to students for specific courses.
        </p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-2xl shadow-lg p-8">

        <form action="{{ route('marks.store') }}" method="POST">
            @csrf

            <!-- Student -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Student
                </label>

                <select
                    name="student_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-cyan-500 focus:outline-none"
                    required
                >
                    <option value="">Select Student</option>

                    @foreach($students as $student)
                        <option value="{{ $student->id }}">
                            {{ $student->name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <!-- Course -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Course
                </label>

                <select
                    name="course_id"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-cyan-500 focus:outline-none"
                    required
                >
                    <option value="">Select Course</option>

                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">
                            {{ $course->course_name }}
                        </option>
                    @endforeach

                </select>
            </div>

            <!-- Marks -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Marks
                </label>

                <input
                    type="number"
                    name="marks"
                    min="0"
                    max="100"
                    placeholder="Enter Marks"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-cyan-500 focus:outline-none"
                    required
                >
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-3">

                <a href="{{ route('marks.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-5 py-3 rounded-lg font-semibold">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-cyan-600 hover:bg-cyan-700 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition">
                    Save Marks
                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>