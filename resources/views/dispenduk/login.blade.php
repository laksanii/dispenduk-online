<x-layout>
    <x-slot name="header" class="py-2">
        <h1 class="text-2xl font-medium tracking-wide">Login user</h1>
        <p class="text-slate-400 text-base tracking-wide">Login dengan memasukkan NIK serta password yang sesuai</p>
    </x-slot>
    <div class="services-list grid grid-cols-1 gap-7">
        <div class="service shadow-lg justify-center text-black">
            <div class="wrapper w-full pt-4 border-l-[3px] rounded-t-lg border-blue-600 gap-10">
                <div class="desc-wrapper border-b px-12 ">
                    <ol class="list-disc text-lg">
                        <li class="mb-3">Anda harus login terlebih dahulu sebelum melakukan pengajuan layanan!</li>
                        <hr class="mb-3">
                        <li class="mb-3">Masukkan NIK dan password yang digunakan pada saat pendaftaran user baru.
                        </li>
                    </ol>
                </div>
            </div>
            <div class="button-wrapper w-full py-5 mt-3">
                <form action="login" method="POST">
                    <div class="flex rounded mb-3 px-7 ">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                            <i class="fa-solid fa-user text-blue-700"></i>
                        </span>
                        <input type="text" id="NIK"
                            class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                            placeholder="NIK" name="NIK" :value="old('NIK')">
                    </div>
                    <div class="flex rounded mb-3 px-7 ">
                        <span
                            class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                            <i class="fa-solid fa-unlock text-blue-700"></i>
                        </span>
                        <input type="password" id="password"
                            class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                            placeholder="password" name="password">
                    </div>
                    <div class="flex rounded mb-3 px-7 ">
                        <button type="submit" id="website-admin"
                            class="rounded-none rounded-r-lg bg-blue-700 border text-white font-medium flex-1 min-w-0 w-full p-2.5 tracking-wider"
                            placeholder="NIK">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                        </button>
                    </div>
                    <hr class="mb-3">
                    <div class="px-7 text-center text-lg text-blue-700">
                        <p class="mb-3">Belum mendaftar sebagai user</p>
                        <button type="submit" id="website-admin"
                            class="rounded-none rounded-r-lg bg-cyan-400 border text-white font-medium flex-1 min-w-0 w-full p-2.5 tracking-wider mb-3"
                            placeholder="NIK">
                            <i class="fa-solid fa-user-plus"></i> Daftar user baru
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </form>
            </div>
        </div>
    </div>
</x-layout>
