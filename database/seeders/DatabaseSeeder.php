<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $services = [
            "Kartu Keluarga" => [
                "Permohonan kartu keluarga baru bagi penduduk yang belum memiliki NIK",
                "Penambahan anggota baru kartu keluarga karena kelahiran",
                "Pengurangan anggota kartu keluarga karena meninggal",
                "Perubahan data pada kartu keluarga",
                "Penerbitan kartu keluarga bagi peghayat kepercayaan",
                "Perubahan kartu keluarga merubah data agama menjadi kepercayaan terhadap Tuhan YME",
                "Penerbitan kartu keluarga karena hilang atau rusak"
            ],
            "Kartu Tanda Penduduk (KTP ELEKTRONIK)" => [
                "Perekaman KTP-EL",
                "Pencetakan KTP-EL",
                "Penggantian KTP-EL karena hilang/rusak",
                "Kartu Identitas Anak"
            ],
            "Surat Keterangan Pindah" => [
                "Surat keterangan pindah WNI dalam wilayah NKRI",
                "Surat keterangan pindah WNI keluar wilayah NKRI",
            ],
            "Surat Keterangan Datang" => [
                "Surat keterangan datang dalam wilayah NKRI",
                "Surat keterangan datang dari luar negeri",

            ],
            "Akta Kelahiran" => [
                "Permohonan Akta Kelahiran",
                "Ralat/duplikat Akta Kelahiran",
                "Akta pengangkatan anak",
                "Permohonan akta pengakuan anak",
                "Permohonan akta pengesahan anak",
                "Perubahan nama",
            ],
            "Akta Kematian" => [
                "Permohonan akta kematian",
                "Ralat/duplikat akta kematian"
            ],
            "Akta Perkawinan" => [
                "Permohonan akta perkawinan",
            ],
            "Akta Perceraian" => [
                "Permohonan akta perceraian"
            ]
        ];

        $keys = array_keys($services);
        
        foreach($keys as $key => $value){
            Service::create([
                "service_name" => $value
            ]);
            foreach($services[$value] as $k => $v){
                ServiceType::create([
                    "service_id" => $key+1,
                    "name" => $v
                ]);
            }
        }

    }
}
