<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-center h-16">

    <!-- Navigation Links -->
    <div class="hidden sm:flex items-center space-x-8">

        <a href="/dashboard"
           class="px-3 py-2 rounded-lg text-gray-700 hover:bg-indigo-100 hover:text-indigo-600 transition">
            🏠 Dashboard
        </a>

        <a href="/students"
           class="px-3 py-2 rounded-lg text-gray-700 hover:bg-blue-100 hover:text-blue-600 transition">
            👨‍🎓 Students
        </a>

        <a href="/courses"
           class="px-3 py-2 rounded-lg text-gray-700 hover:bg-green-100 hover:text-green-600 transition">
            📚 Courses
        </a>

        <a href="/attendance"
           class="px-3 py-2 rounded-lg text-gray-700 hover:bg-yellow-100 hover:text-yellow-600 transition">
            📝 Attendance
        </a>

        <a href="/marks"
           class="px-3 py-2 rounded-lg text-gray-700 hover:bg-purple-100 hover:text-purple-600 transition">
            🏆 Marks
        </a>

    </div>

    <!-- User Dropdown -->
    <div class="hidden sm:flex sm:items-center">

        <x-dropdown align="right" width="48">

            <x-slot name="trigger">
                <button
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white rounded-lg hover:text-indigo-600 transition">

                    <div>{{ Auth::user()->name }}</div>

                    <div class="ms-2">
                        <svg class="fill-current h-4 w-4"
                             xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </div>

                </button>
            </x-slot>

            <x-slot name="content">

                <x-dropdown-link :href="route('profile.edit')">
                    Profile
                </x-dropdown-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                        this.closest('form').submit();">
                        Log Out
                    </x-dropdown-link>
                </form>

            </x-slot>

        </x-dropdown>

    </div>

    <!-- Hamburger -->
    <div class="-me-2 flex items-center sm:hidden">

        <button @click="open = ! open"
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-500 hover:text-indigo-600 hover:bg-gray-100">

            <svg class="h-6 w-6" stroke="currentColor" fill="none"
                 viewBox="0 0 24 24">

                <path :class="{'hidden': open, 'inline-flex': !open}"
                    class="inline-flex"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />

                <path :class="{'hidden': !open, 'inline-flex': open}"
                    class="hidden"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12" />

            </svg>

        </button>

    </div>

</div>







    

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
