<!-- <h2>Edit Student</h2>

<form action="{{ route('students.update',$student->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}"><br><br>

    <input type="text" name="email" value="{{ $student->email }}"><br><br>

    <input type="text" name="phone" value="{{ $student->phone }}"><br><br>

    <input type="text" name="course" value="{{ $student->course }}"><br><br>

    <button type="submit">Update</button>



</form> -->


<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-4">

    <!-- Header -->
    <div class="bg-gradient-to-r from-yellow-500 to-orange-600 rounded-2xl shadow-lg p-6 mb-6">
        <h2 class="text-3xl font-bold text-white">
            Edit Student
        </h2>

        <p class="text-yellow-100 mt-2">
            Update student information and save changes.
        </p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-2xl shadow-lg p-8">

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Student Name -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Student Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ $student->name }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                    required
                >
            </div>

            <!-- Email -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ $student->email }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                    required
                >
            </div>

            <!-- Phone -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Phone Number
                </label>

                <input
                    type="text"
                    name="phone"
                    value="{{ $student->phone }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                    required
                >
            </div>

            <!-- Course -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Course
                </label>

                <input
                    type="text"
                    name="course"
                    value="{{ $student->course }}"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-orange-500 focus:outline-none"
                    required
                >
            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-3">

                <a href="{{ route('students.index') }}"
                   class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-5 py-3 rounded-lg font-semibold">
                    Cancel
                </a>

                <button
                    type="submit"
                    class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition">
                    Update Student
                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>