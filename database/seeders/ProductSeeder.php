<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product::create([
            'nama' => 'Laptop',
            'slug' => 'laptop',
            'harga' => 15000000,
            'deskripsi' => 'Laptop keren kesukaan pak jokowi.',
            'gambar' => 'laptop.jpg',
            'stok' => 10,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Kopi',
            'slug' => 'kopi',
            'harga' => 20000,
            'deskripsi' => 'Kopi premium dari biji siapa?.',
            'gambar' => 'kopi.jpg',
            'stok' => 50,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Pensil punya John',
            'slug' => 'pensil-punya-john',
            'harga' => 5000,
            'deskripsi' => 'Pensil punya john.',
            'gambar' => 'pensil.jpg',
            'stok' => 100,
            'category_id' => 3, 
        ]);
        

        product::create([
            'nama' => 'Bekicot',
            'slug' => 'bekicot',
            'harga' => 15000,
            'deskripsi' => 'jadi hitam rill  .',
            'gambar' => 'cemilan.jpg',
            'stok' => 30,
            'category_id' => 4, 
        ]);

        product::create([
            'nama' => 'Sabun mandi',
            'slug' => 'sabun-mandi',
            'harga' => 10000,
            'deskripsi' => 'Sabun mandi yang bikin kamu wangi.',
            'gambar' => 'sabun.jpg',
            'stok' => 20,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat flu',
            'slug' => 'obat-flu',
            'harga' => 15000,
            'deskripsi' => 'Obat flu yang ampuh.',
            'gambar' => 'obat.jpg',
            'stok' => 15,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Kursi malas',
            'slug' => 'kursi-malas',
            'harga' => 500000,
            'deskripsi' => 'Kursi malas yang nyaman.',
            'gambar' => 'kursi.jpg',
            'stok' => 5,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman segar',
            'slug' => 'minuman-segar',
            'harga' => 10000,
            'deskripsi' => 'Minuman segar yang menyegarkan.',
            'gambar' => 'minuman.jpg',
            'stok' => 25,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku catatan',
            'slug' => 'buku-catatan',
            'harga' => 15000,
            'deskripsi' => 'Buku catatan yang berguna.',
            'gambar' => 'buku.jpg',
            'stok' => 40,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Snack lezat',
            'slug' => 'snack-lezat',
            'harga' => 20000,
            'deskripsi' => 'Snack lezat yang bikin nagih.',
            'gambar' => 'snack.jpg',
            'stok' => 60,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Krim wajah',
            'slug' => 'krim-wajah',
            'harga' => 30000,
            'deskripsi' => 'Krim wajah yang membuat kulitmu bersinar.',
            'gambar' => 'krim.jpg',
            'stok' => 20,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Vitamin C',
            'slug' => 'vitamin-c',
            'harga' => 25000,
            'deskripsi' => 'Vitamin C yang baik untuk kesehatan.',
            'gambar' => 'vitamin.jpg',
            'stok' => 30,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Kipas angin portable',
            'slug' => 'kipas-angin-portable',
            'harga' => 75000,
            'deskripsi' => 'Kipas angin portable yang praktis.',
            'gambar' => 'kipas.jpg',
            'stok' => 15,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Teh hijau',
            'slug' => 'teh-hijau',
            'harga' => 15000,
            'deskripsi' => 'Teh hijau yang menyehatkan.',
            'gambar' => 'teh.jpg',
            'stok' => 40,
            'category_id' => 2, 
        ]);

        product::create([
            'nama' => 'Spidol warna-warni',
            'slug' => 'spidol-warna-warni',
            'harga' => 10000,
            'deskripsi' => 'Spidol warna-warni untuk menggambar.',
            'gambar' => 'spidol.jpg',
            'stok' => 80,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik kentang',
            'slug' => 'keripik-kentang',
            'harga' => 12000,
            'deskripsi' => 'Keripik kentang yang renyah.',
            'gambar' => 'keripik.jpg',
            'stok' => 50,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Pasta gigi',
            'slug' => 'pasta-gigi',
            'harga' => 8000,
            'deskripsi' => 'Pasta gigi yang menjaga kesehatan gigi.',
            'gambar' => 'pasta_gigi.jpg',
            'stok' => 30,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit kepala',
            'slug' => 'obat-sakit-kepala',
            'harga' => 20000,
            'deskripsi' => 'Obat sakit kepala yang efektif.',
            'gambar' => 'obat_sakit_kepala.jpg',
            'stok' => 25,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Speaker Bluetooth',
            'slug' => 'speaker-bluetooth',
            'harga' => 300000,
            'deskripsi' => 'Speaker Bluetooth dengan suara jernih.',
            'gambar' => 'speaker.jpg',
            'stok' => 10,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Air mineral',
            'slug' => 'air-mineral',
            'harga' => 5000,
            'deskripsi' => 'Air mineral segar dan sehat.',
            'gambar' => 'air_mineral.jpg',
            'stok' => 100,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku cerita anak',
            'slug' => 'buku-cerita-anak',
            'harga' => 20000,
            'deskripsi' => 'Buku cerita anak yang menghibur.',
            'gambar' => 'buku_cerita_anak.jpg',
            'stok' => 60,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Cokelat batangan',
            'slug' => 'cokelat-batangan',
            'harga' => 15000,
            'deskripsi' => 'Cokelat batangan yang lezat.',  
            'gambar' => 'cokelat.jpg',
            'stok' => 40,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Shampo herbal',
            'slug' => 'shampo-herbal',
            'harga' => 25000,
            'deskripsi' => 'Shampo herbal yang alami.',
            'gambar' => 'shampo.jpg',
            'stok' => 20,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat batuk',
            'slug' => 'obat-batuk',
            'harga' => 18000,
            'deskripsi' => 'Obat batuk yang membantu meredakan batuk.',
            'gambar' => 'obat_batuk.jpg',
            'stok' => 15,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Kamera DSLR',
            'slug' => 'kamera-dslr',
            'harga' => 12000000,
            'deskripsi' => 'Kamera DSLR untuk fotografi profesional.',
            'gambar' => 'kamera.jpg',
            'stok' => 8,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Jus jeruk segar',
            'slug' => 'jus-jeruk-segar',
            'harga' => 15000,
            'deskripsi' => 'Jus jeruk segar yang menyegarkan.',
            'gambar' => 'jus_jeruk.jpg',
            'stok' => 30,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Kertas gambar',
            'slug' => 'kertas-gambar',
            'harga' => 10000,
            'deskripsi' => 'Kertas gambar berkualitas tinggi.',
            'gambar' => 'kertas_gambar.jpg',
            'stok' => 50,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Kerupuk udang',
            'slug' => 'kerupuk-udang',
            'harga' => 12000,
            'deskripsi' => 'Kerupuk udang yang renyah dan gurih.',
            'gambar' => 'kerupuk_udang.jpg',
            'stok' => 45,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Deodoran roll-on',
            'slug' => 'deodoran-roll-on',
            'harga' => 20000,
            'deskripsi' => 'Deodoran roll-on yang tahan lama.',
            'gambar' => 'deodoran.jpg',
            'stok' => 25,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat alergi',
            'slug' => 'obat-alergi',
            'harga' => 22000,
            'deskripsi' => 'Obat alergi yang efektif.',
            'gambar' => 'obat_alergi.jpg',
            'stok' => 20,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Smartphone terbaru',
            'slug' => 'smartphone-terbaru',
            'harga' => 8000000,
            'deskripsi' => 'Smartphone terbaru dengan fitur canggih.',
            'gambar' => 'smartphone.jpg',
            'stok' => 12,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Soda manis',
            'slug' => 'soda-manis',
            'harga' => 8000,
            'deskripsi' => 'Soda manis yang menyegarkan.',
            'gambar' => 'soda.jpg',
            'stok' => 70,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Pulpen warna-warni',
            'slug' => 'pulpen-warna-warni',
            'harga' => 12000,
            'deskripsi' => 'Pulpen warna-warni untuk menulis.',
            'gambar' => 'pulpen.jpg',
            'stok' => 90,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Kue kering',
            'slug' => 'kue-kering',
            'harga' => 25000,
            'deskripsi' => 'Kue kering yang lezat dan renyah.',
            'gambar' => 'kue_kering.jpg',
            'stok' => 35,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Lotion pelembap',
            'slug' => 'lotion-pelembap',
            'harga' => 18000,
            'deskripsi' => 'Lotion pelembap yang membuat kulitmu lembut.',
            'gambar' => 'lotion.jpg',
            'stok' => 30,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat maag',
            'slug' => 'obat-maag',
            'harga' => 20000,
            'deskripsi' => 'Obat maag yang membantu meredakan gejala.',
            'gambar' => 'obat_maag.jpg',
            'stok' => 20,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Headphone wireless',
            'slug' => 'headphone-wireless',
            'harga' => 400000,
            'deskripsi' => 'Headphone wireless dengan suara berkualitas.',
            'gambar' => 'headphone.jpg',
            'stok' => 10,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Es krim cokelat',
            'slug' => 'es-krim-cokelat',
            'harga' => 15000,
            'deskripsi' => 'Es krim cokelat yang lezat.',
            'gambar' => 'es_krim.jpg',
            'stok' => 50,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku resep masakan',
            'slug' => 'buku-resep-masakan',
            'harga' => 25000,
            'deskripsi' => 'Buku resep masakan yang penuh inspirasi.',
            'gambar' => 'buku_resep_masakan.jpg',
            'stok' => 30,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik pisang',
            'slug' => 'keripik-pisang',
            'harga' => 12000,
            'deskripsi' => 'Keripik pisang yang renyah dan manis.',
            'gambar' => 'keripik_pisang.jpg',
            'stok' => 40,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Sabun wajah',
            'slug' => 'sabun-wajah',
            'harga' => 15000,
            'deskripsi' => 'Sabun wajah yang membersihkan dan menyegarkan.',
            'gambar' => 'sabun_wajah.jpg',
            'stok' => 25,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat demam',
            'slug' => 'obat-demam',
            'harga' => 18000,
            'deskripsi' => 'Obat demam yang membantu menurunkan suhu tubuh.',
            'gambar' => 'obat_demam.jpg',
            'stok' => 15,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Tablet Android',
            'slug' => 'tablet-android',
            'harga' => 3000000,
            'deskripsi' => 'Tablet Android dengan layar besar.',
            'gambar' => 'tablet.jpg',
            'stok' => 10,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman energi',
            'slug' => 'minuman-energi',
            'harga' => 12000,
            'deskripsi' => 'Minuman energi yang menyegarkan.',
            'gambar' => 'minuman_energi.jpg',
            'stok' => 60,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku motivasi',
            'slug' => 'buku-motivasi',
            'harga' => 20000,
            'deskripsi' => 'Buku motivasi yang menginspirasi.',
            'gambar' => 'buku_motivasi.jpg',
            'stok' => 45,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Kacang goreng',
            'slug' => 'kacang-goreng',
            'harga' => 10000,
            'deskripsi' => 'Kacang goreng yang gurih dan renyah.',
            'gambar' => 'kacang_goreng.jpg',
            'stok' => 70,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Pelembap bibir',
            'slug' => 'pelembap-bibir',
            'harga' => 8000,
            'deskripsi' => 'Pelembap bibir yang membuat bibirmu lembut.',
            'gambar' => 'pelembap_bibir.jpg',
            'stok' => 50,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit gigi',
            'slug' => 'obat-sakit-gigi',
            'harga' => 25000,
            'deskripsi' => 'Obat sakit gigi yang meredakan nyeri.',
            'gambar' => 'obat_sakit_gigi.jpg',
            'stok' => 20,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Smartwatch',
            'slug' => 'smartwatch',
            'harga' => 600000,
            'deskripsi' => 'Smartwatch dengan berbagai fitur kesehatan.',
            'gambar' => 'smartwatch.jpg',
            'stok' => 15,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Susu cokelat',
            'slug' => 'susu-cokelat',
            'harga' => 12000,
            'deskripsi' => 'Susu cokelat yang lezat dan bergizi.',
            'gambar' => 'susu_cokelat.jpg',
            'stok' => 80,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku pelajaran',
            'slug' => 'buku-pelajaran',
            'harga' => 30000,
            'deskripsi' => 'Buku pelajaran untuk belajar.',
            'gambar' => 'buku_pelajaran.jpg',
            'stok' => 50,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik singkong',
            'slug' => 'keripik-singkong',
            'harga' => 10000,
            'deskripsi' => 'Keripik singkong yang renyah dan gurih.',
            'gambar' => 'keripik_singkong.jpg',
            'stok' => 60,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Sabun mandi herbal',
            'slug' => 'sabun-mandi-herbal',
            'harga' => 15000,
            'deskripsi' => 'Sabun mandi herbal yang alami.',
            'gambar' => 'sabun_mandi_herbal.jpg',
            'stok' => 30,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat asma',
            'slug' => 'obat-asma',
            'harga' => 20000,
            'deskripsi' => 'Obat asma yang membantu pernapasan.',
            'gambar' => 'obat_asma.jpg',
            'stok' => 25,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Proyektor mini',
            'slug' => 'proyektor-mini',
            'harga' => 2000000,
            'deskripsi' => 'Proyektor mini untuk presentasi.',
            'gambar' => 'proyektor.jpg',
            'stok' => 5,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman soda',
            'slug' => 'minuman-soda',
            'harga' => 10000,
            'deskripsi' => 'Minuman soda yang menyegarkan.',
            'gambar' => 'minuman_soda.jpg',
            'stok' => 90,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku sejarah',
            'slug' => 'buku-sejarah',
            'harga' => 25000,
            'deskripsi' => 'Buku sejarah yang menarik.',
            'gambar' => 'buku_sejarah.jpg',
            'stok' => 40,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Kacang mede',
            'slug' => 'kacang-mede',
            'harga' => 15000,
            'deskripsi' => 'Kacang mede yang gurih dan lezat.',
            'gambar' => 'kacang_mede.jpg',
            'stok' => 55,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Krim mata',
            'slug' => 'krim-mata',
            'harga' => 20000,
            'deskripsi' => 'Krim mata yang mengurangi kantung mata.',
            'gambar' => 'krim_mata.jpg',
            'stok' => 20,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit tenggorokan',
            'slug' => 'obat-sakit-tenggorokan',
            'harga' => 15000,
            'deskripsi' => 'Obat sakit tenggorokan yang meredakan nyeri.',
            'gambar' => 'obat_sakit_tenggorokan.jpg',
            'stok' => 30,
            'category_id' => 6,
        ]);
        product::create([
            'nama' => 'Kipas angin meja',
            'slug' => 'kipas-angin-meja',
            'harga' => 50000,
            'deskripsi' => 'Kipas angin meja yang praktis.',
            'gambar' => 'kipas_meja.jpg',
            'stok' => 20,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);
        product::create([
            'nama' => 'Teh hitam',
            'slug' => 'teh-hitam',
            'harga' => 12000,
            'deskripsi' => 'Teh hitam yang kaya rasa.',
            'gambar' => 'teh_hitam.jpg',
            'stok' => 50,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku puisi',
            'slug' => 'buku-puisi',
            'harga' => 18000,
            'deskripsi' => 'Buku puisi yang indah.',
            'gambar' => 'buku_puisi.jpg',
            'stok' => 35,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik tempe',
            'slug' => 'keripik-tempe',
            'harga' => 10000,
            'deskripsi' => 'Keripik tempe yang renyah dan gurih.',
            'gambar' => 'keripik_tempe.jpg',
            'stok' => 60,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Pelembap wajah',
            'slug' => 'pelembap-wajah',
            'harga' => 15000,
            'deskripsi' => 'Pelembap wajah yang membuat kulitmu lembut.',
            'gambar' => 'pelembap_wajah.jpg',
            'stok' => 30,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat alergi kulit',
            'slug' => 'obat-alergi-kulit',
            'harga' => 20000,
            'deskripsi' => 'Obat alergi kulit yang efektif.',
            'gambar' => 'obat_alergi_kulit.jpg',
            'stok' => 25,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Kamera aksi',
            'slug' => 'kamera-aksi',
            'harga' => 5000000,
            'deskripsi' => 'Kamera aksi untuk petualangan.',
            'gambar' => 'kamera_aksi.jpg',
            'stok' => 8,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Jus apel segar',
            'slug' => 'jus-apel-segar',
            'harga' => 15000,
            'deskripsi' => 'Jus apel segar yang menyegarkan.',
            'gambar' => 'jus_apel.jpg',
            'stok' => 30,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Kertas origami',
            'slug' => 'kertas-origami',
            'harga' => 8000,
            'deskripsi' => 'Kertas origami untuk seni lipat.',
            'gambar' => 'kertas_origami.jpg',
            'stok' => 70,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik jagung',
            'slug' => 'keripik-jagung',
            'harga' => 12000,
            'deskripsi' => 'Keripik jagung yang renyah dan gurih.',
            'gambar' => 'keripik_jagung.jpg',
            'stok' => 50,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Sabun cair',
            'slug' => 'sabun-cair',
            'harga' => 10000,
            'deskripsi' => 'Sabun cair yang lembut di kulit.',
            'gambar' => 'sabun_cair.jpg',
            'stok' => 40,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit perut',
            'slug' => 'obat-sakit-perut',
            'harga' => 15000,
            'deskripsi' => 'Obat sakit perut yang meredakan nyeri.',
            'gambar' => 'obat_sakit_perut.jpg',
            'stok' => 20,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Laptop gaming',
            'slug' => 'laptop-gaming',
            'harga' => 20000000,
            'deskripsi' => 'Laptop gaming dengan performa tinggi.',
            'gambar' => 'laptop_gaming.jpg',
            'stok' => 5,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman herbal',
            'slug' => 'minuman-herbal',
            'harga' => 15000,
            'deskripsi' => 'Minuman herbal yang menyehatkan.',
            'gambar' => 'minuman_herbal.jpg',
            'stok' => 40,
            'category_id' => 2,
        ]); 

        product::create([
            'nama' => 'Buku komik',
            'slug' => 'buku-komik',
            'harga' => 20000,
            'deskripsi' => 'Buku komik yang menghibur.',
            'gambar' => 'buku_komik.jpg',
            'stok' => 60,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Kacang tanah',
            'slug' => 'kacang-tanah',
            'harga' => 8000,
            'deskripsi' => 'Kacang tanah yang gurih dan renyah.',
            'gambar' => 'kacang_tanah.jpg',
            'stok' => 80,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Krim anti-aging',
            'slug' => 'krim-anti-aging',
            'harga' => 30000,
            'deskripsi' => 'Krim anti-aging yang mengurangi tanda penuaan.',
            'gambar' => 'krim_anti_aging.jpg',
            'stok' => 20,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat flu burung',
            'slug' => 'obat-flu-burung',
            'harga' => 25000,
            'deskripsi' => 'Obat flu burung yang efektif.',
            'gambar' => 'obat_flu_burung.jpg',
            'stok' => 15,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Drone kamera',
            'slug' => 'drone-kamera',
            'harga' => 15000000,
            'deskripsi' => 'Drone kamera untuk pengambilan gambar udara.',
            'gambar' => 'drone.jpg',
            'stok' => 3,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman buah',
            'slug' => 'minuman-buah',
            'harga' => 12000,
            'deskripsi' => 'Minuman buah segar yang menyegarkan.',
            'gambar' => 'minuman_buah.jpg',
            'stok' => 50,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku sains',
            'slug' => 'buku-sains',
            'harga' => 25000,
            'deskripsi' => 'Buku sains yang menarik.',
            'gambar' => 'buku_sains.jpg',
            'stok' => 30,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik ubi',
            'slug' => 'keripik-ubi',
            'harga' => 10000,
            'deskripsi' => 'Keripik ubi yang renyah dan gurih.',
            'gambar' => 'keripik_ubi.jpg',
            'stok' => 70,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Sabun mandi cair',
            'slug' => 'sabun-mandi-cair',
            'harga' => 12000,
            'deskripsi' => 'Sabun mandi cair yang lembut di kulit.',
            'gambar' => 'sabun_mandi_cair.jpg',
            'stok' => 40,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit pinggang',
            'slug' => 'obat-sakit-pinggang',
            'harga' => 20000,
            'deskripsi' => 'Obat sakit pinggang yang meredakan nyeri.',
            'gambar' => 'obat_sakit_pinggang.jpg',
            'stok' => 25,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Kipas angin dinding',
            'slug' => 'kipas-angin-dinding',
            'harga' => 60000,
            'deskripsi' => 'Kipas angin dinding yang hemat tempat.',
            'gambar' => 'kipas_dinding.jpg',
            'stok' => 15,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Teh chamomile',
            'slug' => 'teh-chamomile',
            'harga' => 15000,
            'deskripsi' => 'Teh chamomile yang menenangkan.',
            'gambar' => 'teh_chamomile.jpg',
            'stok' => 40,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku petualangan',
            'slug' => 'buku-petualangan',
            'harga' => 20000,
            'deskripsi' => 'Buku petualangan yang seru.',
            'gambar' => 'buku_petualangan.jpg',
            'stok' => 50,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik bawang',
            'slug' => 'keripik-bawang',
            'harga' => 12000,
            'deskripsi' => 'Keripik bawang yang renyah dan gurih.',
            'gambar' => 'keripik_bawang.jpg',
            'stok' => 60,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Pelembap tubuh',
            'slug' => 'pelembap-tubuh',
            'harga' => 18000,
            'deskripsi' => 'Pelembap tubuh yang membuat kulitmu lembut.',
            'gambar' => 'pelembap_tubuh.jpg',
            'stok' => 30,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit punggung',
            'slug' => 'obat-sakit-punggung',
            'harga' => 20000,
            'deskripsi' => 'Obat sakit punggung yang meredakan nyeri.',
            'gambar' => 'obat_sakit_punggung.jpg',
            'stok' => 20,
            'category_id' => 6,
        ]);
        
    }
}
