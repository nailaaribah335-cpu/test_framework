<?php

namespace App\Controllers;

use App\Models\MenuModel;

class Home extends BaseController
{
    public function index(): string
    {
        $menuModel = new MenuModel();
        
        $keyword = $this->request->getGet('search');
        
        if ($keyword) {
            $data['menu'] = $menuModel->search($keyword);
            $data['keyword'] = $keyword;
        } else {
            $data['menu'] = $menuModel->findAll();
            $data['keyword'] = '';
        }
        
        $data['featured'] = $menuModel->orderBy('harga', 'DESC')->findAll(3);
        
        return view('home', $data);
    }

    public function detail($id)
    {
        $menuModel = new MenuModel();
        $data['item'] = $menuModel->find($id);
        
        if (!$data['item']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Get related items (same region, exclude current)
        $data['related'] = $menuModel->where('id !=', $id)->orderBy('RAND()')->findAll(3);
        
        return view('detail', $data);
    }
}
