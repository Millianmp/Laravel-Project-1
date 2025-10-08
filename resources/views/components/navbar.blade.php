<div>
  <nav class="bg-gray-800/50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        
        <!-- Bagian kiri -->
        <div class="flex items-center">
          <!-- Logo -->
          <div class="shrink-0">
            <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" 
                 alt="Your Company" class="size-8" />
          </div>

          <!-- Menu desktop -->
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
                 <x-nav-link href="/dashboard" :active=" request() -> is('dashboard')">Dashboard</x-nav-link>
                 <x-nav-link href="/contact" :active="request() -> is('contact')">Contact</x-nav-link>
                 <x-nav-link href="/profile" :active="request()->is('profile')">Profile</x-nav-link>
                 <x-nav-link href="/student" :active="request()->is('student')">Student</x-nav-link>
                 <x-nav-link href="/guardians" :active="request()->is('guardians')">Guardian</x-nav-link>
                 <x-nav-link href="/classroom" :active="request()->is('classroom')">Classroom</x-nav-link>
            </div>
          </div>
        </div>

        <!-- Bagian kanan -->
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <!-- Notification button -->
            <button type="button" 
              class="relative rounded-full p-1 text-gray-400 hover:text-white 
                     focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
              <span class="absolute -inset-1.5"></span>
              <span class="sr-only">View notifications</span>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" 
                   class="size-6" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022
                         c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0
                         m5.714 0a3 3 0 1 1-5.714 0" />
              </svg>
            </button>

            <!-- Profile dropdown -->
            <el-dropdown class="relative ml-3">
              <button class="relative flex max-w-xs items-center rounded-full 
                             focus-visible:outline focus-visible:outline-2 
                             focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <img src="https://i.pinimg.com/736x/4f/53/3d/4f533d21ae5a527c3ae364c6ad5d6b0f.jpg" 
                     alt="user" class="size-8 rounded-full outline outline-1 -outline-offset-1 outline-white/10" />
              </button>

              <el-menu anchor="bottom end" popover 
                       class="m-0 w-48 origin-top-right rounded-md bg-gray-800 p-0 py-1 
                              outline outline-1 -outline-offset-1 outline-white/10 transition">
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5">Your profile</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5">Settings</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5">Sign out</a>
              </el-menu>
            </el-dropdown>
          </div>
        </div>

        <!-- Mobile button -->
        <div class="-mr-2 flex md:hidden">
          <button type="button" command="--toggle" commandfor="mobile-menu" 
                  class="relative inline-flex items-center justify-center rounded-md p-2 
                         text-gray-400 hover:bg-white/5 hover:text-white 
                         focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
            <span class="absolute -inset-0.5"></span>
            <span class="sr-only">Open main menu</span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" 
                 class="size-6 [[aria-expanded='true']_&]:hidden">
              <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" 
                 class="size-6 [&:not([aria-expanded='true']_*)]:hidden">
              <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu -->
    <el-disclosure id="mobile-menu" hidden class="md:hidden [&:not([hidden])]:block">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <a href="{{ url('dashboard') }}" 
           class="block rounded-md px-3 py-2 text-base font-medium 
           {{ request()->is('dashboard') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
           Dashboard
        </a>
        <a href="{{ url('contact') }}" 
           class="block rounded-md px-3 py-2 text-base font-medium 
           {{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
           Contact
        </a>
        <a href="{{ url('profile') }}" 
           class="block rounded-md px-3 py-2 text-base font-medium 
           {{ request()->is('profile') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}">
           Profile
        </a>
      </div>

    

      <!-- Mobile profile section -->
      <div class="border-t border-white/10 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" 
                 alt="user" class="size-10 rounded-full outline outline-1 -outline-offset-1 outline-white/10" />
          </div>
          <div class="ml-3">
            <div class="text-base font-medium text-white">Tom Cook</div>
            <div class="text-sm font-medium text-gray-400">tom@example.com</div>
          </div>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5">Your profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-white/5">Sign out</a>
        </div>
      </div>
    </el-disclosure>
  </nav>
</div>
