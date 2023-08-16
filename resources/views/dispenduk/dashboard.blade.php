<x-layout>
    <x-slot name="header" class="py-2">
        <h1 class="text-2xl font-medium tracking-wide">Jenis Layanan Administrasi Kependudukan dan Catatan Sipil</h1>
        <p class="text-slate-400 text-base tracking-wide">Pilihlah jenis layanan yang diinginkan</p>
    </x-slot>
    <div class="services-list grid grid-cols-1 xl:grid-cols-4 gap-7">
        @foreach ($services as $service)
            <div class="service rounded-lg py-6 bg-sky-400 justify-center text-white mt-5">
                <div class="wrapper flex justify-center w-full px-12 gap-10">
                    <div class="icon-wrapper w-[20%] text-center align-middle m-auto">
                        <i class="fa-regular fa-id-card text-8xl"></i>
                    </div>
                    <div class="desc-wrapper w-[80%] m-auto">
                        <h3 class="text-2xl tracking-wide mb-3 font-medium xl:text-xl">{{ $service->service_name }}</h3>
                        <p class="text-lg line-clamp-4">{{ $service->description }}</p>
                    </div>
                </div>
                <div class="button-wrapper w-full px-7 mt-3 text-center">
                    <a href="{{ $service->slug}}/jenis-layanan"
                        class="bg-slate-100 text-black w-full rounded-full py-1 block text-[1.3rem] hover:bg-slate-200">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
