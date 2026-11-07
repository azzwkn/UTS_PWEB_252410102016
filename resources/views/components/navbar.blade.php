<nav class="bg-[#dff1f8] px-8 py-4 flex justify-between items-center">
    <a href="{{ route('login') }}" class="text-2xl font-bold text-[#5b8fa8]">
        🐾 Pawly
    </a>

    <div class="flex gap-6 text-[#526773]">
        <a href="{{ route('login') }}" class="hover:text-[#5b8fa8]">
            Home
        </a>

        <a href="{{ route('profile', ['username' => request('username')]) }}" class="hover:text-[#5b8fa8]">
            Profile
        </a>

        <a href="{{ route('pengelolaan', ['username' => request('username')]) }}" class="hover:text-[#5b8fa8]">
            Pengelolaan
        </a>

    </div>
</nav>
