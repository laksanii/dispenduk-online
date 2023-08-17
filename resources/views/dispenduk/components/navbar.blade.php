<div class="shadow pb-5 mb-[100px] xl:mb-[120px]">
    <nav class="bg-white fixed w-full z-20 top-0 left-0 border-b border-gray-200 ">
        <div class="py-5 px-10 xl:px-[6rem] flex gap-3">
            <img class="w-7" src="{{ asset('logo.png') }}" alt="">
            <h1 class="text-xl font-medium">
                Dispenduk Bangkalan
            </h1>
        </div>
        <hr>
        <div class="xl:bg-slate-200 flex flex-wrap items-center px-10 xl:px-[6rem]">
            <div class="flex xl:order-1">
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg xl:hidden"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center hidden w-full xl:flex xl:w-auto xl:order-1 " id="navbar-sticky">
                <ul class="flex w-full flex-col xl:p-0 xl:flex-row xl:mt-0 xl:border-0">
                    <li class="h-full">
                        <a class="box-border block p-4 text-slate-700 xl:bg-transparent xl:border-t-4 h-full hover:bg-slate-50 hover:xl:border-t-4 hover:xl:border-sky-500"
                            href="/" aria-current="page"><i class="fa-solid fa-house mr-2"></i> Jenis Layanan</a>
                    </li>
                    <li class="h-full">
                        <a class="box-border block p-4 text-slate-700 xl:bg-transparent xl:border-t-4 h-full hover:bg-slate-50 hover:xl:border-t-4 hover:xl:border-sky-500"
                            href="/statistik" aria-current="page"><i class="fa-solid fa-chart-simple mr-2"></i>
                            Statistik</a>
                    </li>
                    @if (!auth()->user())
                        <li class="h-full">
                            <a class="box-border block p-4 text-slate-700 xl:bg-transparent xl:border-t-4 h-full hover:bg-slate-50 hover:xl:border-t-4 hover:xl:border-sky-500"
                                href="/login" aria-current="page"><i class="fa-solid fa-user mr-2"></i>Login User</a>
                        </li>
                        <li class="h-full">
                            <a class="box-border block p-4 text-slate-700 xl:bg-transparent xl:border-t-4 h-full hover:bg-slate-50 hover:xl:border-t-4 hover:xl:border-sky-500"
                                href="/register" aria-current="page"><i class="fa-solid fa-user-plus mr-2"></i>
                                Pendaftaran User Baru</a>
                        </li>
                    @else
                        <form action="/logout" method="POST">
                            <li class="h-full">
                                <button type="submit" class="box-border block p-4 text-slate-700 xl:bg-transparent xl:border-t-4 h-full hover:bg-slate-50 hover:xl:border-t-4 hover:xl:border-sky-500"
                                    href="logout" aria-current="page"><i
                                        class="fa-solid fa-arrow-right-from-bracket"></i>
                                    Logout</button>
                            </li>
                        </form>
                    @endif

                </ul>
            </div>
        </div>
    </nav>



    {{-- <div class="h-14 bg-slate-200 items-center px-[6rem] hidden xl:flex ">
        <a class="h-full px-5 py-3 text-slate-800 text-lg block hover:bg-slate-50" href=""><i
                class="fa-solid fa-house mr-2"></i> Jenis Layanan</a>
        <a class="h-full px-5 py-3 text-slate-800 text-lg block hover:bg-slate-50" href=""><i
                class="fa-solid fa-chart-simple mr-2"></i> Statistik</a>
        <a class="h-full px-5 py-3 text-slate-800 text-lg block hover:bg-slate-50 " href=""><i
                class="fa-solid fa-message mr-2"></i> Buat Pengaduan baru</a>
        <a class="h-full px-5 py-3 text-slate-800 text-lg block hover:bg-slate-50" href=""><i
                class="fa-solid fa-user mr-2"></i>Login User</a>
        <a class="h-full px-5 py-3 text-slate-800 text-lg block hover:bg-slate-50" href=""><i
                class="fa-solid fa-user-plus mr-2"></i> Pendaftaran User Baru</a>
    </div> --}}
</div>
