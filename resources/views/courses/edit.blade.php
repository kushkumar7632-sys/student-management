<!-- <h2>Edit Course</h2>

<form action="{{ route('courses.update', $course->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Course Name</label>
    <input type="text" name="course_name" value="{{ $course->course_name }}">
    <br><br>

    <label>Course Code</label>
    <input type="text" name="course_code" value="{{ $course->course_code }}">
    <br><br>

    <label>Duration</label>
    <input type="number" name="duration" value="{{ $course->duration }}">
    <br><br>

    <button type="submit">Update</button>
</form> -->


<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-4">

    <!-- Header -->
    <div class="bg-gradient-to-r from-amber-500 to-orange-600 rounded-2xl shadow-lg p-6 mb-6">
        <h2 class="text-3xl font-bold text-white">
            Edit Course
        </h2>
        <p class="text-orange-100 mt-2">
            Update course information and save changes.
        </p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-2xl shadow-lg p-8">

        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Course Name -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Course Name
                </label>

                <input
                    type="text"
                    name="course_name"
                    value="{{ $course->course_name }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                    required
                >
            </div>

            <!-- Course Code -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Course Code
                </label>

                <input
                    type="text"
                    name="course_code"
                    value="{{ $course->course_code }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                    required
                >
            </div>

            <!-- Duration -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Duration (Months)
                </label>

                <input
                    type="number"
                    name="duration"
                    value="{{ $course->duration }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                    required
                >
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-3">

                <a href="{{ route('courses.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-5 py-3 rounded-lg font-semibold">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition">
                    Update Course
                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>