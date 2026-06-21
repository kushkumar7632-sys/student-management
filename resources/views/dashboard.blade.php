

<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            🎓 Student Management Dashboard
        </h2>
    </x-slot> -->

    <div class="py-6 px-4">

        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl p-8 text-white shadow-lg mb-8">
            <h1 class="text-3xl font-bold">
                Welcome Back, Kush 👋
            </h1>
            <p class="mt-2 text-indigo-100">
                Manage Students, Courses, Attendance & Marks from one place.
            </p>
        </div>

        <!-- Quick Action Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- Student -->
            <a href="/students"
               class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-blue-500">
                <div class="text-5xl mb-3">👨‍🎓</div>
                <h3 class="text-xl font-bold text-gray-800">
                    Student Management
                </h3>
                <p class="text-gray-500 mt-2">
                    Add, edit and manage students.
                </p>
            </a>

            <!-- Course -->
            <a href="/courses"
               class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-green-500">
                <div class="text-5xl mb-3">📚</div>
                <h3 class="text-xl font-bold text-gray-800">
                    Course Management
                </h3>
                <p class="text-gray-500 mt-2">
                    Manage available courses.
                </p>
            </a>

            <!-- Attendance -->
            <a href="/attendance/create"
               class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-yellow-500">
                <div class="text-5xl mb-3">📝</div>
                <h3 class="text-xl font-bold text-gray-800">
                    Mark Attendance
                </h3>
                <p class="text-gray-500 mt-2">
                    Record daily attendance.
                </p>
            </a>

            <!-- Attendance Report -->
            <a href="/attendance"
               class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-purple-500">
                <div class="text-5xl mb-3">📊</div>
                <h3 class="text-xl font-bold text-gray-800">
                    Attendance Report
                </h3>
                <p class="text-gray-500 mt-2">
                    View attendance history.
                </p>
            </a>

            <!-- Insert Marks -->
            <a href="/marks/create"
               class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-red-500">
                <div class="text-5xl mb-3">✏️</div>
                <h3 class="text-xl font-bold text-gray-800">
                    Insert Marks
                </h3>
                <p class="text-gray-500 mt-2">
                    Add marks for students.
                </p>
            </a>

            <!-- View Marks -->
            <a href="/marks"
               class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border-l-4 border-indigo-500">
                <div class="text-5xl mb-3">🏆</div>
                <h3 class="text-xl font-bold text-gray-800">
                    View Marks
                </h3>
                <p class="text-gray-500 mt-2">
                    Check student performance.
                </p>
            </a>

        </div>

        <!-- Footer -->
        <div class="mt-10 text-center text-gray-500 text-sm">
            Student Management System © {{ date('Y') }}
        </div>

    </div>
</x-app-layout>

