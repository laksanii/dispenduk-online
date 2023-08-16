<x-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-medium tracking-wide">Statistik Layanan</h1>
        <p class="text-slate-400 text-base tracking-wide">Pilihlah jenis layanan yang diinginkan</p>
    </x-slot>
    <div class="services-list">
        <x-detail-service>
            <x-slot name="header">KTP-EL (Pembuatan Baru / Hilang / Rusak)</x-slot>
            <x-slot name="serviceDetail">Layanan penerbitan dokumen KTP-El bagi yang belum pernah memiliki KTP El (baru
                perekaman), hilang atau
                rusak/patah/tidak terbaca. Layanan ini tanpa PERUBAHAN DATA PADA ELEMEN KTP-El. Jika sudah selesai
                dicetak
                KTP El diambil di Dukcapil Ogan Ilir.</x-slot>
            <x-slot name="requirements">
                <ol class="list-decimal px-5">
                    @foreach ($requirements as $requirement)
                        <li class="text-lg">{{ $requirement }}</li>
                    @endforeach
                </ol>
            </x-slot>

            <x-slot name="form">
                FORM Belom dapet datanya
            </x-slot>

            <x-slot name="formUpload">
                @foreach ($requirements_name as $index => $requirement_name)
                    <div class="field mb-3">
                        <label class="block mb-2 text-xl font-medium text-gray-900 " for="{{ $requirement_name }}">{{ $requirements[$index] }}</label>
                        <input
                            class="block w-full text-lg text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:border-slate-400 dark:placeholder-gray-400"
                            id="{{ $requirement_name }}" type="file" name="requirement[{{ $requirement_name }}][]" multiple>
                    </div>
                @endforeach
            </x-slot>
        </x-detail-service>
    </div>
</x-layout>
