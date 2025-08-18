<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VisiMisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tentang::create([
            'visi' => '
        <p class="mb-4 font-bold">Mewujudkan lulusan yang <span class="font-semibold text-orange-500">unggul</span> dan <span class="font-semibold text-orange-500">terpercaya</span> dalam mengembangkan dan mempersiapkan tenaga terampil di bidang Teknologi Informasi dan Komunikasi yang beriman, bertaqwa, cerdas, percaya diri, berwawasan global, dan berkarakter Pancasialis.</p>
    ',
            'misi' => '
        <p class="mb-4 font-bold">Menyelenggarakan proses belajar mengajar yang berkualitas dalam mencapai kompetensi peserta didik yang berstandar nasional dan bertaraf internasional dengan Pendekatan Penjaminan Mutu Pendidikan.</p>
        
        <p class="mb-2 font-semibold text-gray-800">Bidang Kompetensi:</p>
        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4 font-bold">
            <li class="font-bold">Pengembangan Perangkat Lunak dan Gim (PPLG)</li>
            <li class="font-bold">Teknik Jaringan Komputer dan Telekomunikasi (TJKT)</li>
            <li class="font-bold">Desain Komunikasi Visual (DKV)</li>
            <li class="font-bold">Broadcasting dan Film (BCF)</li>
        </ul>

        <p class="mb-4">Memberikan pelayanan pendidikan berbasis pembelajaran abad 21 agar peserta didik memperoleh ilmu pengetahuan dan teknologi.</p>
        <p class="mb-4">Mengembangkan sikap profesional yang menghargai etika dan keberagaman serta menerapkan budaya guna membentuk jati diri yang relevan dengan karakter bangsa.</p>
    '
        ]);
    }
}
