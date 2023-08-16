<x-layout>
    <x-slot name="header" class="py-2">
        <h1 class="text-2xl font-medium tracking-wide">Login user</h1>
        <p class="text-slate-400 text-base tracking-wide">Login dengan memasukkan NIK serta password yang sesuai</p>
    </x-slot>
    <div class="services-list grid grid-cols-1 gap-7">
        <div class="service shadow-lg justify-center text-black">
            <div class="wrapper w-full pt-4 border-l-[3px] rounded-t-lg border-blue-600 gap-10 mb-5">
                <div class="desc-wrapper border-b px-12 ">
                    <ol class="list-disc text-lg">
                        <li class="mb-3">Anda harus login terlebih dahulu sebelum melakukan pengajuan layanan!</li>
                        <hr class="mb-3">
                        <li class="mb-3">Masukkan NIK dan password yang digunakan pada saat pendaftaran user baru.
                        </li>
                    </ol>
                </div>
            </div>
            @if ($errors->any())
                <div class="button-wrapper w-full py-5 px-7 " id="alert-3">
                    <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Danger</span>
                        <div>
                            <span class="font-medium">Kesalahan :</span>
                            <ul class="mt-1.5 ml-4 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <button type="button"
                            class="ml-auto -mx-1.5 -my-1.5 bg-red-50 red-green-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                            data-dismiss-target="#alert-3" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endif
            <form action="register" method="POST" enctype="multipart/form-data">
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-address-card text-blue-700"></i>
                    </span>
                    <input type="text" id="NIK"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="NIK" name="NIK" :value="old('NIK')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-user text-blue-700"></i>
                    </span>
                    <input type="text" id="name"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="nama lengkap" name="name" :value="old('name')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-at text-blue-700"></i>
                    </span>
                    <input type="text" id="email"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="email" name="email" :value="old('email')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <div class="flex gap-4">
                        <div class="flex items-center px-3 border border-gray-200 rounded bg-gray-50">
                            <input id="bordered-radio-1" type="radio" name="gender" value="laki-laki"
                                class="w-4 h-4 bg-gray-100 border-gray-300">
                            <label for="bordered-radio-1"
                                class="w-full py-2 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                        </div>
                        <div class="flex items-center px-3 border border-gray-200 rounded bg-gray-50">
                            <input checked id="bordered-radio-2" type="radio" name="gender" value="perempuan"
                                class="w-4 h-4 bg-gray-100 border-gray-300">
                            <label for="bordered-radio-2"
                                class="w-full py-2 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-calendar-days text-blue-700"></i>
                    </span>
                    <input type="date" id="birthday"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        name="birthday" :value="old('birthday')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-city text-blue-700"></i>
                    </span>
                    <input type="text" id="district"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="kecamatan" name="district" :value="old('district')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-city text-blue-700"></i>
                    </span>
                    <input type="text" id="village"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="kelurahan/desa" name="village" :value="old('village')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-map-location-dot text-blue-700"></i>
                    </span>
                    <input type="text" id="address"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="alamat" name="address" :value="old('address')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-brands fa-square-whatsapp text-blue-700"></i>
                    </span>
                    <input type="text" id="num_whatsapp"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="nomor whatsapp" name="num_whatsapp" :value="old('num_whatsapp')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-user text-blue-700"></i>
                    </span>
                    <input type="text" id="username"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="username" name="username" :value="old('username')">
                </div>
                <div class="flex rounded mb-1 px-7 ">
                    <span
                        class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-50 border border-r-0 border-gray-300">
                        <i class="fa-solid fa-unlock text-blue-700"></i>
                    </span>
                    <input type="password" id="password"
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5"
                        placeholder="password" name="password">
                </div>
                <div class="rounded mb-3 px-7 ">
                    <span class="inline-flex items-center text-lg font-medium text-gray-900 mb-1 ">
                        Foto selfie dengan KTP
                    </span>
                    <input
                        class="rounded-none rounded-r-lg bg-gray-50 border text-gray-900 focus:ring-slate-500 focus:border-1 focus:border-slate-500 block flex-1 min-w-0 w-full text-sm border-gray-300 px-2.5"
                        id="selfie_url" type="file" name="selfie_url" :value="old('selfie_url')">
                </div>
                <div class="flex rounded mb-3 px-7 ">
                    <button type="submit"
                        class="rounded-none rounded-r-lg bg-blue-700 border text-white font-medium flex-1 min-w-0 w-full p-2.5 tracking-wider">
                        <i class="fa-solid fa-user-plus"></i> Daftar
                    </button>
                </div>
                <hr class="mb-3">
                <div class="px-7 text-center text-lg text-blue-700">
                    <p class="mb-3">Sudah mendaftar?</p>
                    <button type="submit" id="website-admin"
                        class="rounded-none rounded-r-lg bg-cyan-400 border text-white font-medium flex-1 min-w-0 w-full p-2.5 tracking-wider mb-3"
                        placeholder="NIK">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</x-layout>
