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
}
