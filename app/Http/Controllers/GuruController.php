<?php

namespace App\Http\Controllers;

use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->GuruModel = new GuruModel();
    }
    public function index() {
        $data = [
            'guru' => $this->GuruModel->getAll(),
        ];
        return view('v_guru', $data);
    }
    public function detail ($id) {
        if (!$this->GuruModel->getDetail($id)) {
            abort(404);
        }
        $data = [
            'guru' => $this->GuruModel->getDetail($id),
        ];
        return view('v_guruDetail', $data);
    }
    public function add () {
        return view('v_guruAdd');
    }

    public function insert () {
        Request()->validate ([
            'nim' => 'required|unique:tbl_guru,nim|min:10|max:11',
            'nama' => 'required',
            'mapel' => 'required',
            'image' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],
        [
            'nim.required'=> 'NIM Tidak Boleh Kosong!'
        ]);
        $file = Request()->image;
        $fileName = Request()->nip.'.'.$file->extension();
        $file->move(public_path('img'),$fileName);
        $data = [
            'nim' => Request()->nim,
            'nama' => Request()->name,
            'mapel' => Request()->mapel,
            'image' => $fileName
        ];
        $this->GuruModel->addData($data);
        return redirect()->route('guru')->with('pesan', 'Tambah Data Sukses');
    }
}
