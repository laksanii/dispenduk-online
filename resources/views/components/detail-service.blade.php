<div class="rounded-lg bg-sky-500 py-7 mb-4">
    <div class="wrapper w-[70%] m-auto">
        <h1 class="text-3xl font-medium">
            {{ $header }}
        </h1>
        <p class="text-white">
            {{ $serviceDetail }}
        </p>
    </div>
</div>

@if ($errors->any())
    <div class="button-wrapper w-full py-5 px-7 " id="alert-3">
        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
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
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>
@endif

@if (session('error'))
    <div class="button-wrapper w-full py-5 px-7 " id="alert-3">
        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
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
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>
@endif

@if (session('failure'))
    <div class="p-4 mb-4 text-xl text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
        role="alert">
        {{ session('failure') }}
    </div>
@endif
@if (session('message'))
    <div class="p-4 mb-4 text-xl text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
        role="alert">
        {{ session('message') }}
    </div>
@endif
<div class=" shadow-lg rounded-lg">
    <div class="data-layanan p-5">
        <h1 class="text-xl font-medium">Persyaratan</h1>
        <p class=" text-gray-400 leading-none text-lg">Daftar persyaratan yang harus dipenuhi oleh pemohon sebelum
            melakukan pengajuan layanan</p>
    </div>
    <hr>
    <div class="daftar-persyaratan p-5">
        {{ $requirements }}
    </div>
</div>
<form action="/pengajuan-layanan" id="myForm" method="post" enctype="multipart/form-data"
    class="grid grid-cols-1 xl:grid-cols-2 gap-5">
    <div class=" shadow-lg rounded-lg">
        <div class="data-layanan p-5">
            <h1 class="text-xl font-medium">Formulir</h1>
            <p class=" text-gray-400 leading-none text-lg">Daftar formulir yang harus diisi oleh pemohon untuk
                kemudian
                dikirim bersama persyaratan lainnya ke Disdukcapil</p>
        </div>
        <hr>
        <div class="daftar-persyaratan p-5">
            {{ $form }}
        </div>
    </div>
    <div class=" shadow-lg rounded-lg">
        <div class="data-layanan p-5">
            <h1 class="text-xl font-medium">Upload Persyaratan</h1>
            <p class=" text-gray-400 leading-none text-lg">Upload semua persyaratan yang diperlukan</p>
        </div>
        <hr>
        <div class="daftar-persyaratan p-5">
            {{ $formUpload }}
        </div>
    </div>
</form>

<div class="btn-wrapper text-center mt-4 pb-10 pt-5">
    <button type="submit" form="myForm" value="submit"
        class="bg-blue-500 text-white font-medium px-7 py-3 rounded-xl hover:bg-blue-600">Kirim</button>
</div>
