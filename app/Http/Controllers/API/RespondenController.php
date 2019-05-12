<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Responden;

class RespondenController extends Controller
{
    public function index(){

        return Responden::latest()->paginate(7);
    }

    public function store(Request $req){

        $this->validate($req, [
            'nama' => 'required',
            'nope' => 'required',
            'email' => 'required|email',
            'profesi' => 'required',
            'hobi' => 'required'
        ]);

        return Responden::create([
            'nama' => $req['nama'],
            'nope' => $req['nope'],
            'email' => $req['email'],
            'profesi' => $req['profesi'],
            'hobi' => $req['hobi']
        ]);
    }

    public function show($id){

        return Responden::findOrFail($id);
    }

    public function destroy($id){
        $data = Responden::findOrFail($id);
        $data->delete();

        return [
            'message' => 'Berhasil Menghapus Data!'
        ];
    }
}
