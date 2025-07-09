<header class="px-15 flex items-center justify-between pt-10">
    <h1 class="text-2xl font-semibold"><a href="/">no microtears</a></h1>
    <nav class="flex space-x-6 font-medium">
        <a href="/blog" class="hover:text-[#555]">blog</a>
        @auth
            <a
                onclick="Livewire.dispatch('logout')"
                class="cursor-pointer hover:text-[#555]"
            >
                log out
            </a>
        @else
            <a
                onclick="Livewire.dispatch('openLoginModal')"
                class="cursor-pointer hover:text-[#555]"
            >
                log in
            </a>
        @endauth
    </nav>
</header>
