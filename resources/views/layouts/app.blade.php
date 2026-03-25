<body class="bg-gradient-to-br from-[#e0f2fe] to-[#f0f9ff] min-h-screen flex">

    <aside class="w-[260px] p-6 flex flex-col gap-8">
        <div class="flex items-center gap-2 px-2">
            <img src="/logo.png" class="w-10 h-10" alt="Logo">
        </div>

        <nav class="flex flex-col gap-1">
            <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest px-4 mb-2">Main Menu</p>
            
            <x-nav-item icon="home" label="Beranda" active />
            <x-nav-item icon="search" label="Jelajahi Proyek" />
            <x-nav-item icon="folder" label="Proyek Saya" has-child />
            
            <div class="ml-8 flex flex-col gap-1 mt-1">
                <a href="#" class="px-4 py-2 bg-[#dcf0f9] text-[#0c4a6e] rounded-lg text-sm font-semibold">Dikelola</a>
                <a href="#" class="px-4 py-2 text-gray-500 hover:text-primary-5 text-sm">Diikuti</a>
            </div>

            <x-nav-item icon="briefcase" label="Lamaran Saya" />
        </nav>
    </aside>

    <main class="flex-1 flex flex-col">
        <header class="h-[80px] px-10 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-[#0c4a6e]">Placeholder</h1>
            
            <div class="flex items-center gap-3">
                <div class="text-right">
                    <p class="text-sm font-bold text-[#0c4a6e]">Aurelia Callysta M.</p>
                    <p class="text-[10px] text-gray-500">aur@student.ub.ac.id</p>
                </div>
                <img src="/avatar.jpg" class="w-10 h-10 rounded-full border-2 border-white shadow-sm" alt="User">
            </div>
        </header>

        <section class="flex-1 bg-white rounded-tl-[40px] shadow-sm p-10">
            {{ $slot }}
        </section>
    </main>

</body>