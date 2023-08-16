<x-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-medium tracking-wide">Jenis Layanan</h1>
        <p class="text-slate-400 text-base tracking-wide">Pilih salah satu dari jenis layanan yang diinginkan</p>
    </x-slot>
    <div class="services-list grid grid-cols-1 xl:grid-cols-4 gap-7">
        @foreach ($service_types as $service_type)
            <div class="service rounded-lg py-6 bg-sky-400 justify-center min-h-[250px] text-white mt-5 relative">
                <div class="wrapper flex justify-center w-full px-12 gap-10">
                    <div class="icon-wrapper w-[30%] text-center align-middle m-auto">
                        <i class="fa-regular fa-id-card text-8xl"></i>
                    </div>
                    <div class="desc-wrapper w-[70%] m-auto">
                        <h3 data-tooltip-target="{{ $service_type->name }}" class="text-3xl tracking-wide mb-3 font-medium xl:text-xl line-clamp-2">
                            {{ $service_type->name }}</h3>
                            <div id="{{ $service_type->name }}" role="tooltip" class="opacity-0 tooltip absolute z-10 text-center invisible px-3 py-2 text-lg font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm max-w-[250px]">{{ $service_type->name }}
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        <p class="text-lg line-clamp-2">{{ $service_type->description }}
                        </p>
                    </div>
                </div>
                <div class="button-wrapper w-full px-7 mt-3 flex absolute bottom-4">
                <a href="/{{ $service_type->slug }}/detail-layanan"
                        class="bg-slate-100 text-black w-full rounded-full py-1 text-center text-[1.3rem] hover:bg-slate-200">Detail</a>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>