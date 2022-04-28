<?php

namespace App\Controllers;

use App\Models\Personal_m;

class Personal extends BaseController
{
    public function index()
    {
        $model = new Personal_m();
        $data = [
            'personal' => $model->findAll(),
            'document_code' => 'document_code',
        ];
        return view('dashboard', $data);
    }
    public function store(){
        $models = new Personal_m();
        $data = [
            'title'=> $this->request->getPost('title'),
            'status'=> $this->request->getPost('status'),
            'descriptions'=> $this->request->getPost('descriptions'),
        ];
        $models ->save($data);
        return redirect('/')->with('status','Add Successfully!');
    }
}
