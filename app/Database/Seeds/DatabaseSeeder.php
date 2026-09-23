<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed admin user
        $this->db->table('users')->insert([
            'username'   => 'admin',
            'password'   => password_hash('admin123', PASSWORD_DEFAULT),
            'nama'       => 'Admin Zahra',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Seed menu items - 10 variasi Nasi Tempong Jawa Timur
        $menus = [
            [
                'nama_makanan'     => 'Nasi Tempong Original',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Nasi putih hangat disajikan dengan sambal tempong khas Banyuwangi yang super pedas, dilengkapi lauk ayam goreng renyah, tempe goreng, dan lalapan segar.',
                'harga'            => 25000,
                'gambar'           => 'nasi-tempong-original.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Ayam Geprek',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Perpaduan unik ayam geprek crispy dengan sambal tempong legendaris. Sensasi pedas dan renyah dalam satu suapan yang menggugah selera.',
                'harga'            => 28000,
                'gambar'           => 'nasi-tempong-geprek.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Ikan Lele',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Ikan lele goreng garing sempurna disandingkan dengan nasi hangat dan sambal tempong yang meledak-ledak pedasnya. Favorit pecinta lele!',
                'harga'            => 22000,
                'gambar'           => 'nasi-tempong-lele.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Bebek Goreng',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Bebek goreng empuk dengan kulit super crispy, disajikan dengan nasi putih pulen dan sambal tempong autentik. Premium taste dari timur Jawa.',
                'harga'            => 35000,
                'gambar'           => 'nasi-tempong-bebek.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Seafood',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Kombinasi udang, cumi, dan ikan segar dari perairan Banyuwangi dengan sambal tempong legendaris. Cita rasa laut bertemu pedas tradisional.',
                'harga'            => 38000,
                'gambar'           => 'nasi-tempong-seafood.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Tahu Tempe',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Paket hemat vegetarian dengan tahu dan tempe goreng renyah, sayur urap segar, dan sambal tempong yang membara. Sederhana tapi nagih!',
                'harga'            => 15000,
                'gambar'           => 'nasi-tempong-tahu-tempe.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Empal Gentong',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Empal daging sapi yang dimasak hingga empuk dan gurih, disandingkan dengan nasi panas dan sambal tempong. Perpaduan dua kuliner Jawa yang fenomenal.',
                'harga'            => 32000,
                'gambar'           => 'nasi-tempong-empal.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Pecel Ayam',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Ayam kampung goreng dengan bumbu pecel kacang khas, dilengkapi sambal tempong dan lalapan lengkap. Dua sambal dalam satu piring!',
                'harga'            => 27000,
                'gambar'           => 'nasi-tempong-pecel.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Iga Bakar',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Iga sapi bakar madu yang jatuh dari tulangnya, disajikan dengan nasi hangat dan sambal tempong extra pedas. Menu premium untuk pencinta daging.',
                'harga'            => 45000,
                'gambar'           => 'nasi-tempong-iga.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan'     => 'Nasi Tempong Cumi Hitam',
                'asal_daerah'      => 'Banyuwangi, Jawa Timur',
                'deskripsi_singkat' => 'Cumi goreng tepung dengan saus tinta hitam khas, disandingkan nasi pulen dan sambal tempong. Menu unik dengan presentasi yang instagramable.',
                'harga'            => 33000,
                'gambar'           => 'nasi-tempong-cumi.jpg',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('menu')->insertBatch($menus);
    }
}
