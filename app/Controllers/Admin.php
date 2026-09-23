<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Admin extends BaseController
{
    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $data['menu'] = $this->menuModel->orderBy('created_at', 'DESC')->findAll();
        return view('admin/index', $data);
    }

    public function create()
    {
        return view('admin/form', [
            'title'  => 'Tambah Menu',
            'action' => '/admin/store',
            'item'   => null,
        ]);
    }

    public function store()
    {
        $rules = [
            'nama_makanan'     => 'required|min_length[3]|max_length[255]',
            'asal_daerah'      => 'required|min_length[3]|max_length[255]',
            'deskripsi_singkat' => 'required|min_length[10]',
            'harga'            => 'required|numeric|greater_than[0]',
            'gambar'           => 'permit_empty|uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]',
        ];

        $messages = [
            'nama_makanan' => [
                'required'   => 'Nama makanan wajib diisi.',
                'min_length' => 'Nama makanan minimal 3 karakter.',
                'max_length' => 'Nama makanan maksimal 255 karakter.',
            ],
            'asal_daerah' => [
                'required'   => 'Asal daerah wajib diisi.',
                'min_length' => 'Asal daerah minimal 3 karakter.',
                'max_length' => 'Asal daerah maksimal 255 karakter.',
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
            'gambar' => [
                'is_image' => 'File harus berupa gambar (jpg, png, gif).',
                'max_size' => 'Ukuran gambar maksimal 2MB.',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nama_makanan'     => $this->request->getPost('nama_makanan'),
            'asal_daerah'      => $this->request->getPost('asal_daerah'),
            'deskripsi_singkat' => $this->request->getPost('deskripsi_singkat'),
            'harga'            => $this->request->getPost('harga'),
        ];

        $file = $this->request->getFile('gambar');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);
            $data['gambar'] = $newName;
        }

        $this->menuModel->skipValidation(true)->insert($data);
        return redirect()->to('/admin')->with('success', 'Menu berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $item = $this->menuModel->find($id);
        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('admin/form', [
            'title'  => 'Edit Menu',
            'action' => '/admin/update/' . $id,
            'item'   => $item,
        ]);
    }

    public function update($id)
    {
        $item = $this->menuModel->find($id);
        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $rules = [
            'nama_makanan'     => 'required|min_length[3]|max_length[255]',
            'asal_daerah'      => 'required|min_length[3]|max_length[255]',
            'deskripsi_singkat' => 'required|min_length[10]',
            'harga'            => 'required|numeric|greater_than[0]',
            'gambar'           => 'permit_empty|uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]',
        ];

        $messages = [
            'nama_makanan' => [
                'required'   => 'Nama makanan wajib diisi.',
                'min_length' => 'Nama makanan minimal 3 karakter.',
                'max_length' => 'Nama makanan maksimal 255 karakter.',
            ],
            'asal_daerah' => [
                'required'   => 'Asal daerah wajib diisi.',
                'min_length' => 'Asal daerah minimal 3 karakter.',
                'max_length' => 'Asal daerah maksimal 255 karakter.',
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
            'gambar' => [
                'is_image' => 'File harus berupa gambar (jpg, png, gif).',
                'max_size' => 'Ukuran gambar maksimal 2MB.',
            ],
        ];

        if (!$this->validate($rules, $messages)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nama_makanan'     => $this->request->getPost('nama_makanan'),
            'asal_daerah'      => $this->request->getPost('asal_daerah'),
            'deskripsi_singkat' => $this->request->getPost('deskripsi_singkat'),
            'harga'            => $this->request->getPost('harga'),
        ];

        $file = $this->request->getFile('gambar');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            // Delete old image if exists
            if ($item['gambar'] && file_exists('uploads/' . $item['gambar'])) {
                unlink('uploads/' . $item['gambar']);
            }
            $newName = $file->getRandomName();
            $file->move('uploads', $newName);
            $data['gambar'] = $newName;
        }

        $this->menuModel->skipValidation(true)->update($id, $data);
        return redirect()->to('/admin')->with('success', 'Menu berhasil diperbarui!');
    }

    public function delete($id)
    {
        $item = $this->menuModel->find($id);
        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Delete image file if exists
        if ($item['gambar'] && file_exists('uploads/' . $item['gambar'])) {
            unlink('uploads/' . $item['gambar']);
        }

        $this->menuModel->delete($id);
        return redirect()->to('/admin')->with('success', 'Menu berhasil dihapus!');
    }
}
