<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table            = 'menu';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = ['nama_makanan', 'asal_daerah', 'deskripsi_singkat', 'harga', 'gambar'];
    protected $useTimestamps    = true;
    protected $createdField     = 'created_at';
    protected $updatedField     = 'updated_at';

    // Validation rules
    protected $validationRules = [
        'nama_makanan'     => 'required|min_length[3]|max_length[255]',
        'asal_daerah'      => 'required|min_length[3]|max_length[255]',
        'deskripsi_singkat' => 'required|min_length[10]',
        'harga'            => 'required|numeric|greater_than[0]',
    ];

    protected $validationMessages = [
        'nama_makanan' => [
            'required'   => 'Nama makanan wajib diisi.',
            'min_length' => 'Nama makanan minimal 3 karakter.',
        ],
        'asal_daerah' => [
            'required'   => 'Asal daerah wajib diisi.',
            'min_length' => 'Asal daerah minimal 3 karakter.',
        ],
        'deskripsi_singkat' => [
            'required'   => 'Deskripsi wajib diisi.',
            'min_length' => 'Deskripsi minimal 10 karakter.',
        ],
        'harga' => [
            'required'     => 'Harga wajib diisi.',
            'numeric'      => 'Harga harus berupa angka.',
            'greater_than' => 'Harga harus lebih dari 0.',
        ],
    ];

    protected $skipValidation = false;

    /**
     * Search menu by keyword
     */
    public function search(string $keyword)
    {
        return $this->like('nama_makanan', $keyword)
                    ->orLike('asal_daerah', $keyword)
                    ->orLike('deskripsi_singkat', $keyword)
                    ->findAll();
    }
}
