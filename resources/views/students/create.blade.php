<!-- <h2>Add Student</h2>

<form action="{{ route('students.store') }}" method="POST">
@csrf
      
<input type="text" name="name" placeholder="Name"><br><br>

<input type="text" name="email" placeholder="Email"><br><br>

<input type="text" name="phone" placeholder="Phone"><br><br>

<input type="text" name="course" placeholder="Course"><br><br>

<button type="submit">Save</button>

</form> -->


<x-app-layout>

<div class="max-w-4xl mx-auto py-8 px-4">

    <!-- Header -->
    <div class="bg-gradient-to-r from-emerald-600 to-green-700 rounded-2xl shadow-lg p-6 mb-6">
        <h2 class="text-3xl font-bold text-white">
            Add New Student
        </h2>

        <p class="text-green-100 mt-2">
            Register a new student in the system.
        </p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-2xl shadow-lg p-8">

        <form action="{{ route('students.store') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="mb-5">
                <label class="block text-gray-700 font-semibold mb-2">
                    Student Name
                </label>

                <input
                    type="text"
                    name="name"
                    placeholder="Enter student name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none"
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
                    placeholder="Enter email"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none"
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
                    placeholder="Enter phone number"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none"
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
                    placeholder="Enter course name"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-green-500 focus:outline-none"
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
                    class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-semibold shadow-md transition">
                    Save Student
                </button>

            </div>

        </form>

    </div>

</div>

</x-app-layout>