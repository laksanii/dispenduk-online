<x-admin-layout>
    <h3 class="text-gray-700 text-3xl font-medium mb-2">Detail Pengajuan</h3>
    @if (session('success'))
        <div class="p-4 mb-4 text-xl rounded bg-green-500 text-gray-50" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('reject'))
        <div class="p-4 mb-4 text-xl rounded bg-red-500 text-gray-50" role="alert">
            {{ session('reject') }}
        </div>
    @endif
    <div class="flex flex-col mt-8">
        <div class="action flex justify-between">
            @if ($data->status != 'Pengajuan ditolak')
                <a href="/reject/{{ $data->id }}"
                    class="bg-red-500 px-5 py-1 rounded text-slate-100 font-medium shadow">Tolak Pengajuan</a>
            @endif
            @if ($data->status != 'Pengajuan disetujui')
                <a href="/approve/{{ $data->id }}"
                    class="bg-green-500 px-5 py-1 rounded text-slate-100 font-medium shadow">Setujui Pengajuan</a>
            @endif
        </div>
        <div class=" py-2 overflow-x-auto grid grid-cols-1 gap-5 xl:grid-cols-2 sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 bg-gray-50 mb-5">
                    <div class="header px-5 py-2 text-lg font-medium">
                        Data Pelapor
                    </div>
                    <hr class="h-0.5 bg-gray-700 ">
                    <div class="text-lg px-5 py-2 flex font-medium">
                        <div class="label w-[28%] flex justify-between pr-4">
                            <div class="">
                                Nama
                            </div>
                            <div class="colon">
                                :
                            </div>
                        </div>
                        <div class="value w-[70%] text-left ">
                            {{ $data->user->name }}
                        </div>
                    </div>
                    <div class="text-lg px-5 py-2 flex font-medium">
                        <div class="label w-[28%] flex justify-between pr-4">
                            <div class="">
                                NIK
                            </div>
                            <div class="colon">
                                :
                            </div>
                        </div>
                        <div class="value w-[70%] text-left ">
                            {{ $data->user->NIK }}
                        </div>
                    </div>
                    <div class="text-lg px-5 py-2 flex font-medium">
                        <div class="label w-[28%] flex justify-between pr-4">
                            <div class="">
                                Alamat
                            </div>
                            <div class="colon">
                                :
                            </div>
                        </div>
                        <div class="value w-[70%] text-left ">
                            {{ $data->user->address }}
                        </div>
                    </div>
                    <div class="text-lg px-5 py-2 flex font-medium">
                        <div class="label w-[28%] flex justify-between pr-4">
                            <div class="">
                                Nomor Whatsapp
                            </div>
                            <div class="colon">
                                :
                            </div>
                        </div>
                        <div class="value w-[70%] text-left ">
                            {{ $data->user->num_whatsapp }}
                        </div>
                    </div>
                </div>
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 bg-gray-50">
                    <div class="text-lg px-5 py-2 flex font-medium">
                        <div class="label w-[20%] flex justify-between pr-4">
                            <div class="">
                                Layanan
                            </div>
                            <div class="colon">
                                :
                            </div>
                        </div>
                        <div class="value w-[70%] text-left ">
                            {{ $data->serviceType->service->service_name }}
                        </div>
                    </div>
                    <div class="text-lg px-5 py-2 flex font-medium">
                        <div class="label w-[20%] flex justify-between pr-4">
                            <div class="">
                                Jenis Layanan
                            </div>
                            <div class="colon">
                                :
                            </div>
                        </div>
                        <div class="value w-[70%] text-left ">
                            {{ $data->serviceType->name }}
                        </div>
                    </div>
                    <div class="text-lg px-5 py-2 flex font-medium">
                        <div class="label w-[20%] flex justify-between pr-4">
                            <div class="">
                                Status
                            </div>
                            <div class="colon">
                                :
                            </div>
                        </div>
                        <div class="value w-[70%] text-left capitalize">
                            {{ $data->status }}
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200 bg-gray-50">
                <div class="header px-5 py-2 text-lg font-medium">
                    Berkas Persyaratan
                </div>
                <hr class="h-0.5 bg-gray-700 ">
                @foreach ($requirements as $key => $value)
                    <div class="text-lg px-5 py-2 flex flex-col">
                        <div class="label justify-between pr-4 font-[500] capitalize mb-1 ">
                            {{ $value }}
                        </div>
                        <form action="/download" method="POST">
                            <div class="value">
                                <input type="hidden" name="url"
                                    value="{{ ((array) $requirements_file)[$requirements_name[$key]] }}">
                                <input type="hidden" name="name_file" value="{{ $value }}">
                                <button class="bg-sky-500 text-white px-5 rounded-md" type="submit">Download</button>
                            </div>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">

            </div>
        </div>
    </div>
</x-admin-layout>
