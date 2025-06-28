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
            'nama' => 'Sabun wajah',
            'slug' => 'sabun-wajah',
            'harga' => 15000,
            'deskripsi' => 'Sabun wajah yang membersihkan dan menyegarkan.',
            'gambar' => 'images/sabunwajah.jpg',
            'stok' => 25,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat demam',
            'slug' => 'obat-demam',
            'harga' => 18000,
            'deskripsi' => 'Obat demam yang membantu menurunkan suhu tubuh.',
            'gambar' => 'images/obatdemam.jpg',
            'stok' => 15,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Tablet Android',
            'slug' => 'tablet-android',
            'harga' => 3000000,
            'deskripsi' => 'Tablet Android dengan layar besar.',
            'gambar' => 'images/tabletandroid.jpg',
            'stok' => 10,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman energi',
            'slug' => 'minuman-energi',
            'harga' => 12000,
            'deskripsi' => 'Minuman energi yang menyegarkan.',
            'gambar' => 'images/minumanenergi.jpg',
            'stok' => 60,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku motivasi',
            'slug' => 'buku-motivasi',
            'harga' => 20000,
            'deskripsi' => 'Buku motivasi yang menginspirasi.',
            'gambar' => 'images/bukumotivasi.jpg',
            'stok' => 45,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Kacang goreng',
            'slug' => 'kacang-goreng',
            'harga' => 10000,
            'deskripsi' => 'Kacang goreng yang gurih dan renyah.',
            'gambar' => 'images/kacanggoreng.jpg',
            'stok' => 70,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Pelembap bibir',
            'slug' => 'pelembap-bibir',
            'harga' => 8000,
            'deskripsi' => 'Pelembap bibir yang membuat bibirmu lembut.',
            'gambar' => 'images/pelembapbibir.jpg',
            'stok' => 50,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit gigi',
            'slug' => 'obat-sakit-gigi',
            'harga' => 25000,
            'deskripsi' => 'Obat sakit gigi yang meredakan nyeri.',
            'gambar' => 'images/obatsakitgigi.jpg',
            'stok' => 20,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Smartwatch',
            'slug' => 'smartwatch',
            'harga' => 600000,
            'deskripsi' => 'Smartwatch dengan berbagai fitur kesehatan.',
            'gambar' => 'images/smartwatch.jpg',
            'stok' => 15,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Susu cokelat',
            'slug' => 'images/susu-cokelat',
            'harga' => 12000,
            'deskripsi' => 'Susu cokelat yang lezat dan bergizi.',
            'gambar' => 'susucokelat.jpg',
            'stok' => 80,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku pelajaran',
            'slug' => 'buku-pelajaran',
            'harga' => 30000,
            'deskripsi' => 'Buku pelajaran untuk belajar.',
            'gambar' => 'images/bukupelajaran.jpg',
            'stok' => 50,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik singkong',
            'slug' => 'keripik-singkong',
            'harga' => 10000,
            'deskripsi' => 'Keripik singkong yang renyah dan gurih.',
            'gambar' => 'images/keripiksingkong.jpg',
            'stok' => 60,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Sabun mandi herbal',
            'slug' => 'sabun-mandi-herbal',
            'harga' => 15000,
            'deskripsi' => 'Sabun mandi herbal yang alami.',
            'gambar' => 'images/sabunmandiherbal.jpg',
            'stok' => 30,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat asma',
            'slug' => 'obat-asma',
            'harga' => 20000,
            'deskripsi' => 'Obat asma yang membantu pernapasan.',
            'gambar' => 'images/obatasma.jpg',
            'stok' => 25,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Proyektor mini',
            'slug' => 'proyektor-mini',
            'harga' => 2000000,
            'deskripsi' => 'Proyektor mini untuk presentasi.',
            'gambar' => 'images/proyektormini.jpg',
            'stok' => 5,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman soda',
            'slug' => 'minuman-soda',
            'harga' => 10000,
            'deskripsi' => 'Minuman soda yang menyegarkan.',
            'gambar' => 'images/minumansoda.jpg',
            'stok' => 90,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku sejarah',
            'slug' => 'buku-sejarah',
            'harga' => 25000,
            'deskripsi' => 'Buku sejarah yang menarik.',
            'gambar' => 'images/bukusejarah.jpg',
            'stok' => 40,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Kacang mede',
            'slug' => 'kacang-mede',
            'harga' => 15000,
            'deskripsi' => 'Kacang mede yang gurih dan lezat.',
            'gambar' => 'images/kacangmede.jpg',
            'stok' => 55,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Krim mata',
            'slug' => 'krim-mata',
            'harga' => 20000,
            'deskripsi' => 'Krim mata yang mengurangi kantung mata.',
            'gambar' => 'images/krimmata.jpg',
            'stok' => 20,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit tenggorokan',
            'slug' => 'obat-sakit-tenggorokan',
            'harga' => 15000,
            'deskripsi' => 'Obat sakit tenggorokan yang meredakan nyeri.',
            'gambar' => 'images/obatsakittenggorokan.jpg',
            'stok' => 30,
            'category_id' => 6,
        ]);
        product::create([
            'nama' => 'Kipas angin meja',
            'slug' => 'kipas-angin-meja',
            'harga' => 50000,
            'deskripsi' => 'Kipas angin meja yang praktis.',
            'gambar' => 'images/kipasmeja.jpg',
            'stok' => 20,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);
        product::create([
            'nama' => 'Teh hitam',
            'slug' => 'teh-hitam',
            'harga' => 12000,
            'deskripsi' => 'Teh hitam yang kaya rasa.',
            'gambar' => 'images/tehhitam.jpg',
            'stok' => 50,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku puisi',
            'slug' => 'buku-puisi',
            'harga' => 18000,
            'deskripsi' => 'Buku puisi yang indah.',
            'gambar' => 'images/bukupuisi.jpg',
            'stok' => 35,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik tempe',
            'slug' => 'keripik-tempe',
            'harga' => 10000,
            'deskripsi' => 'Keripik tempe yang renyah dan gurih.',
            'gambar' => 'images/keripiktempe.jpg',
            'stok' => 60,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Pelembap wajah',
            'slug' => 'pelembap-wajah',
            'harga' => 15000,
            'deskripsi' => 'Pelembap wajah yang membuat kulitmu lembut.',
            'gambar' => 'images/pelembapwajah.jpg',
            'stok' => 30,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat alergi kulit',
            'slug' => 'obat-alergi-kulit',
            'harga' => 20000,
            'deskripsi' => 'Obat alergi kulit yang efektif.',
            'gambar' => 'images/obatalergikulit.jpg',
            'stok' => 25,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Kamera aksi',
            'slug' => 'kamera-aksi',
            'harga' => 5000000,
            'deskripsi' => 'Kamera aksi untuk petualangan.',
            'gambar' => 'images/kameraaksi.jpg',
            'stok' => 8,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Jus apel segar',
            'slug' => 'jus-apel-segar',
            'harga' => 15000,
            'deskripsi' => 'Jus apel segar yang menyegarkan.',
            'gambar' => 'images/jusapel.jpg',
            'stok' => 30,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Kertas origami',
            'slug' => 'kertas-origami',
            'harga' => 8000,
            'deskripsi' => 'Kertas origami untuk seni lipat.',
            'gambar' => 'images/kertasorigami.jpg',
            'stok' => 70,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik jagung',
            'slug' => 'keripik-jagung',
            'harga' => 12000,
            'deskripsi' => 'Keripik jagung yang renyah dan gurih.',
            'gambar' => 'images/keripikjagung.jpg',
            'stok' => 50,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Sabun cair',
            'slug' => 'sabun-cair',
            'harga' => 10000,
            'deskripsi' => 'Sabun cair yang lembut di kulit.',
            'gambar' => 'images/sabuncair.jpg',
            'stok' => 40,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit perut',
            'slug' => 'obat-sakit-perut',
            'harga' => 15000,
            'deskripsi' => 'Obat sakit perut yang meredakan nyeri.',
            'gambar' => 'images/obatsakitperut.jpg',
            'stok' => 20,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Laptop gaming',
            'slug' => 'laptop-gaming',
            'harga' => 20000000,
            'deskripsi' => 'Laptop gaming dengan performa tinggi.',
            'gambar' => 'images/laptopgaming.jpg',
            'stok' => 5,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman herbal',
            'slug' => 'minuman-herbal',
            'harga' => 15000,
            'deskripsi' => 'Minuman herbal yang menyehatkan.',
            'gambar' => 'images/minumanherbal.jpg',
            'stok' => 40,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku komik',
            'slug' => 'buku-komik',
            'harga' => 20000,
            'deskripsi' => 'Buku komik yang menghibur.',
            'gambar' => 'images/bukukomik.jpg',
            'stok' => 60,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Kacang tanah',
            'slug' => 'kacang-tanah',
            'harga' => 8000,
            'deskripsi' => 'Kacang tanah yang gurih dan renyah.',
            'gambar' => 'images/kacangtanah.jpg',
            'stok' => 80,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Krim anti-aging',
            'slug' => 'krim-anti-aging',
            'harga' => 30000,
            'deskripsi' => 'Krim anti-aging yang mengurangi tanda penuaan.',
            'gambar' => 'images/krimantiaging.jpg',
            'stok' => 20,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat flu burung',
            'slug' => 'obat-flu-burung',
            'harga' => 25000,
            'deskripsi' => 'Obat flu burung yang efektif.',
            'gambar' => 'images/obatfluburung.jpg',
            'stok' => 15,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Drone kamera',
            'slug' => 'drone-kamera',
            'harga' => 15000000,
            'deskripsi' => 'Drone kamera untuk pengambilan gambar udara.',
            'gambar' => 'images/drone.jpg',
            'stok' => 3,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Minuman buah',
            'slug' => 'minuman-buah',
            'harga' => 12000,
            'deskripsi' => 'Minuman buah segar yang menyegarkan.',
            'gambar' => 'images/minumanbuah.jpg',
            'stok' => 50,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku sains',
            'slug' => 'buku-sains',
            'harga' => 25000,
            'deskripsi' => 'Buku sains yang menarik.',
            'gambar' => 'images/bukusains.jpg',
            'stok' => 30,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik ubi',
            'slug' => 'keripik-ubi',
            'harga' => 10000,
            'deskripsi' => 'Keripik ubi yang renyah dan gurih.',
            'gambar' => 'images/keripikubi.jpg',
            'stok' => 70,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Sabun mandi cair',
            'slug' => 'sabun-mandi-cair',
            'harga' => 12000,
            'deskripsi' => 'Sabun mandi cair yang lembut di kulit.',
            'gambar' => 'images/sabunmandicair.jpg',
            'stok' => 40,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit pinggang',
            'slug' => 'obat-sakit-pinggang',
            'harga' => 20000,
            'deskripsi' => 'Obat sakit pinggang yang meredakan nyeri.',
            'gambar' => 'images/obatsakitpinggang.jpg',
            'stok' => 25,
            'category_id' => 6,
        ]);

        product::create([
            'nama' => 'Kipas angin dinding',
            'slug' => 'kipas-angin-dinding',
            'harga' => 60000,
            'deskripsi' => 'Kipas angin dinding yang hemat tempat.',
            'gambar' => 'images/kipasdinding.jpg',
            'stok' => 15,
            'category_id' => 1, // Asumsikan kategori ID 1 adalah "alat elektronik"
        ]);

        product::create([
            'nama' => 'Teh chamomile',
            'slug' => 'teh-chamomile',
            'harga' => 15000,
            'deskripsi' => 'Teh chamomile yang menenangkan.',
            'gambar' => 'images/tehchanomile.jpg',
            'stok' => 40,
            'category_id' => 2,
        ]);

        product::create([
            'nama' => 'Buku petualangan',
            'slug' => 'buku-petualangan',
            'harga' => 20000,
            'deskripsi' => 'Buku petualangan yang seru.',
            'gambar' => 'images/bukupetualangan.jpg',
            'stok' => 50,
            'category_id' => 3,
        ]);

        product::create([
            'nama' => 'Keripik bawang',
            'slug' => 'keripik-bawang',
            'harga' => 12000,
            'deskripsi' => 'Keripik bawang yang renyah dan gurih.',
            'gambar' => 'images/keripikbawang.jpg',
            'stok' => 60,
            'category_id' => 4,
        ]);

        product::create([
            'nama' => 'Pelembap tubuh',
            'slug' => 'pelembap-tubuh',
            'harga' => 18000,
            'deskripsi' => 'Pelembap tubuh yang membuat kulitmu lembut.',
            'gambar' => 'images/pelembaptubuh.jpg',
            'stok' => 30,
            'category_id' => 5,
        ]);

        product::create([
            'nama' => 'Obat sakit punggung',
            'slug' => 'obat-sakit-punggung',
            'harga' => 20000,
            'deskripsi' => 'Obat sakit punggung yang meredakan nyeri.',
            'gambar' => 'images/obatsakitpunggung.jpg',
            'stok' => 20,
            'category_id' => 6,
        ]);

    }
}
