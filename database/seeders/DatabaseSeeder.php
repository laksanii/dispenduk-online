<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Support\Str;
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
                "Permohonan kartu keluarga baru bagi penduduk yang belum memiliki NIK" => [
                    "akta lahir",
                    "ijazah",
                    "akta kematian",
                    "surat pernyataan belum terdaftar sebagai penduduk manapun",
                    "surat pernyataan tidak memiliki dokumen kependudukan"

                ],
                "Penambahan anggota baru kartu keluarga karena kelahiran" => [
                    "kartu keluarga",
                    "buku nikah atau akta kawin",
                    "surat lahir dari dokter",
                    "surat lahir dari kelurahan"
                ],
                "Pengurangan anggota kartu keluarga karena meninggal" => [
                    "kartu keluarga",
                    "akta kematian",
                    "KTP",
                ],
                "Perubahan data pada kartu keluarga" => [
                    "kartu keluarga",
                    "akta lahir",
                    "ijazah",
                    "buku nikah atau akta kawin atau akta cerai",
                    "akta kematian atau surat kematian",
                ],
                "Penerbitan kartu keluarga bagi peghayat kepercayaan" => [
                    "kartu keluarga",
                    "KTP",
                    "surat permohonoan pencetakan kartu keluarga"
                ],
                "Perubahan kartu keluarga merubah data agama menjadi kepercayaan terhadap Tuhan YME" => [
                    "kartu keluarga",
                    "surat pernyataan perubahan agama menjadi kepercayaan kepada tuhan YME",
                ],
                "Penerbitan kartu keluarga karena hilang atau rusak" => [
                    "surat kehilangan dari kepolisian",
                    "kartu keluarga asli yang rusak",
                    "KTP"
                ]
            ],
            "Kartu Tanda Penduduk (KTP ELEKTRONIK)" => [
                "Perekaman KTP-EL" => [
                    "kartu keluarga"
                ],
                "Pencetakan KTP-EL" => [
                    "kartu keluarga",
                    "bukti pendaftaran atau surat keterangan pengganti non E KTP"
                ],
                "Penggantian KTP-EL karena hilang atau rusak" => [
                    "kartu keluarga",
                    "surat kehilangan kepolisian jika hilang",
                    "KTP asli yang rusak"
                ]
                ,
                "Kartu Identitas Anak" => [
                    "akta kelahiran",
                    "kartu keluarga",
                    "pas foto 3x4 berwarna untuk anak usia kurang dari 5 tahun"
                ]
            ],
            "Surat Keterangan Pindah" => [
                "Surat keterangan pindah WNI dalam wilayah NKRI" => [
                    "kartu keluarga",
                    "KTP",
                ],
                "Surat keterangan pindah WNI keluar wilayah NKRI" => [
                    "surat pengantar dari RT",
                    "kartu keluarga",
                    "KTP",
                    "akta kelahiran",
                    "surat nikah atau akta cerai",
                    "surat ijin orang tua atau suami atau istri"
                ],
            ],
            "Surat Keterangan Datang" => [
                "Surat keterangan datang dalam wilayah NKRI" => [
                    "surat pindah asli",
                    "kartu keluarga asli (jika numpang KK)",
                    "akta kelahiran atau surat lahir dari kelurahan",
                    "ijazah",
                    "surat nikah atau akta kawin atau akta cerai"
                ],
                "Surat keterangan datang dari luar negeri" => [
                    "asli surat keterangan pindah luar negeri dari dukcapil kota atau perwakilan RI",
                    "asli KTP",
                    "akta kelahiran atau surat lahir dari kelurahan",
                    "ijazah terakhir",
                    "buku nikah atau akta kawin atau akta cerai",
                    "kartu keluarga"
                ],

            ],
            "Akta Kelahiran" => [
                "Permohonan Akta Kelahiran" => [
                    "buku nikah atau akta kawin atau akata cerai atau bukti lain yang sah",
                    "asli surat lahir dari dokter",
                    "asli surat lahir dari kelurahan",
                    "KTP orang tua atau pelapor yang bersangkutan",
                    "KTP dua orang saksi",
                    "kartu keluarga",
                    "SPTJM kelahiran",
                    "SPTJM perkawinan"
                ],
                "Ralat atau duplikat Akta Kelahiran" => [
                    "kartu keluarga",
                    "KTP pelapor",
                    "KTP saksi dua orang",
                    "surat nikah atau akta perkawinan orang tua dilegalisir",
                    "akta kelahiran asli",
                    "surat kehilangan dari kepolisian",
                ],
                "Akta pengangkatan anak" => [
                    "penetapan pengadilan negeri atau pengadilan agama tentang pengangkatan anak",
                    "kutipan akta lahir anak",
                    "surat nikah atau akta kawin orang tua kandung (jika ada) dan orang tua angkat",
                    "kartu keluarga orang tua kandung dan orang tua angkat",
                    "KTP orang tua kandung dan orang tua angkat",
                    "dokumen perjalanan bagi orang tua angkat orang asing"
                ],
                "Permohonan akta pengakuan anak" => [
                    "kutipan akta lahir anak",
                    "kartu keluarga ibu kandung dan ayah kandung",
                    "fotocopy KTP pelapor dan dua orang saksi",
                    "surat pengakuan anak dari ayah yang disetujui ibu kandung",
                    "penetapan pengadilan bagi anak yang dilahirkan sebelum perkawinan secara agama kedua orang tuanya",
                ],
                "Permohonan akta pengesahan anak" => [
                    "kutipan akta lahir asli",
                    "kutipan akta kawin yang menerangkan terjadinya persitiwa perkawinan agama sebelum anak lahir",
                    "kartu keluarga",
                    "KTP pelapor dan dua orang saksi",
                    "penetapan pengadilan"
                ],
                "Perubahan nama" => [
                    "salinan penetapan pengadilan negeri tentang peribahan nama",
                    "kutipan akta lahir asli",
                    "surat nikah atau akta kawin bagi yang sudah menikah",
                    "kartu keluarga",
                    "KTP pelapor dan dua orang saksi",
                    "surat lahir dari kelurahan"
                ],
            ],
            "Akta Kematian" => [
                "Permohonan akta kematian" => [
                    "surat kematian dari dokter",
                    "surat kematian dari kelurahan",
                    "KTP pelapor",
                    "KTP dua orang saksi",
                    "buku nikah atau akta kawin",
                    "kartu keluarga"
                ],
                "Ralat/duplikat akta kematian" => [
                    "kartu keluarga",
                    "KTP yang bersangkutan atau orang tua",
                    "KTP pelapor",
                    "akta kematian asli",
                    "surat kehilangan dari kepolisian",
                    "KTP dua orang saksi",
                ]
            ],
            "Akta Perkawinan" => [
                "Permohonan akta perkawinan" => [
                    "surat keterangan untuk kawin",
                    "surat keterangan asal usul",
                    "surat persetujuan calon suami atau istri",
                    "surat keterangan tentang orang tua bagi yang usia dibawah 19 tahun",
                    "surat keterangan sehat calon suami atau imunisasi calon istri",
                    "surat pernyataan belum pernah kawin",
                    "baptis atau sidhi",
                    "surat nikah dari pemuka agama atau pemberkatan",
                    "akta lahir dilegalisir",
                    "KTP para saksi",
                    "kartu keluarga calon mempelai yang dilegalisir", 
                    "surat nikah atau akta kawin orang tua",
                    "akta cerai atau kematian bagi duda atau janda",
                    "surat ijin komandan (TNI/POLRI)"
                ],
            ],
            "Akta Perceraian" => [
                "Permohonan akta perceraian" => [
                    "KTP yang bersangkutan",
                    "KTP pelapor",
                    "kartu keluarga yang bersangkutan",
                    "akta perkawinan asli",
                    "surat keterangan panitera pengadilan negeri",
                    "fotocopy putusan pengadilan negeri"
                ]
            ]
        ];

        $keys = array_keys($services);
        
        foreach($keys as $key => $value){
            Service::create([
                "service_name" => $value,
                "description" => "Deskripsi",
                "slug" => Str::slug($value, "-")
            ]);
            foreach($services[$value] as $k => $v){
                ServiceType::create([
                    "service_id" => $key+1,
                    "name" => $k,
                    "description" => "Deskripsi",
                    "slug" => Str::slug($k, "-"),
                    "requirements" => json_encode($v)
                ]);
            }
        }
        

    }
}
