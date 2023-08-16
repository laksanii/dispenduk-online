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
<form action="" enctype="multipart/form-data" class="grid grid-cols-1 xl:grid-cols-2 gap-5">
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

<div class="btn-wrapper text-center mt-4">
    <button class="bg-blue-500 text-white font-medium px-5 py-3 rounded-xl hover:bg-blue-600">Kirim</button>
</div>
