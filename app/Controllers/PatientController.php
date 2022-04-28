<?php

namespace App\Controllers;

use App\Models\PatientModel;

class PatientController extends BaseController
{
    public function index()
    {
        $patient = new PatientModel();
        $data['patients'] = $patient->findAll();
        return view('patients/index.php', $data);
    }

    public function create()
    {
        return view('patients/create');
    }

    public function store()
    {
        $patients = new PatientModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nohp' => $this->request->getPost('nohp'),
            'email' => $this->request->getPost('email'),
            'pendaftaran' => $this->request->getPost('pendaftaran'),
            'tipe_pasien' => $this->request->getPost('tipe_pasien'),
            'jenis_kunjungan' => $this->request->getPost('jenis_kunjungan'),
        ];
        $patients->save($data);
        return redirect('patients')->with('status', 'Patient Add Successfully!');
    }

    public function edit($id = null)
    {
        $patient = new PatientModel();
        $data['patients'] = $patient->find($id);
        return view('patients/edit', $data);
    }

    public function update($id = null)
    {
        $patient = new PatientModel();
        $data = [
            'nama' => $this->request->getPost('nama'),
            'nohp' => $this->request->getPost('nohp'),
            'email' => $this->request->getPost('email'),
            'pendaftaran' => $this->request->getPost('pendaftaran'),
            'tipe_pasien' => $this->request->getPost('tipe_pasien'),
            'jenis_kunjungan' => $this->request->getPost('jenis_kunjungan'),
        ];
        $patient->update($id, $data);
        return redirect()->to(base_url('patients'))->with('status', 'Patient Update Successfully!');
    }

    public function delete($id = null)
    {
        $patient = new PatientModel();
        $patient->delete($id);
        return redirect()->back()->with('status', 'Patient Delete Successfully!');
    }
}
