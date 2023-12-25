<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index () {
        $data = [
            [
                'nama' => 'Ferani',
                'email' => 'feranimugiyanti94@gmail.com',
                'telp' => '0895411131345',
                'alamat' => [
                    'street' => 'jl. sayuran',
                    'postcode' => '40239'
                ]
            ],
            [
                'nama' => 'Haikal',
                'email' => 'haikal@gmail.com',
                'telp' => '0895378689',
                'alamat' => [
                    'street' => 'jl. sayati',
                    'postcode' => '12124'
                ]
            ],
            [
                'nama' => 'lola',
                'email' => 'lola17@gmail.com',
                'telp' => '0896573537',
                'alamat' => [
                    'street' => 'jl. cibaduyut',
                    'postcode' => '49456'
                ]
            ]
        ];

        $data2 = [
            [
                'nama' => 'Andre',
                'email' => 'andre87@gmail.com',
                'telp' => '0821786383',
                'alamat' => [
                    'street' => 'jl. Soreang',
                    'postcode' => '40237'
                ]
            ]
        ];

        // debug string
        // echo('sdsdsd');

        //debug string / array
        // var_dump($data);
        dd($data);

        $data = array_merge($data, $data2);

        $id = '111';
        return view('users/user', compact('data', 'id'));

    }

    public function post() {

    }









    public function getDataUser(Request $request) {


    }

    public function createDataUser(Request $request) {
        $post = $request->post();
        $arr = [];
        $arr['username'] = $request->post('username');
        $arr['email'] = $request->post('email');
        $arr['no_telp'] = $request->post('no_telp');

        $isValid = self::cekUser($arr['username']);
        if ($isValid){
            $res['status'] = true;
            $res['message'] = 'Username Valid!';
            $code = 200;
        } else {
            $res['status'] = false;
            $res['message'] = 'Username Tidak Valid!';
            $code = 401;
        }

        //Contoh response json
        return response()->json($res, $code);
    }

    private static function cekUser($username) {
        if ($username == 'ilman') {
            return true;
        } else {
            return false;
        }
    }

    public function updateDataUser(Request $request) {
        $post = $request->post();
        $arr = [];
        $arr['username'] = $request->post('username');
        $arr['email'] = $request->post('email');
        $arr['no_telp'] = $request->post('no_telp');

        //Buat response seperti ketika insert, silahkan improve sendiri

        return response()->json($arr, 200);
    }

    public function deleteDataUser(Request $request) {
        $arr = [];
        $arr['username'] = $request->get('username');

        $isValid = self::cekUser($arr['username']);
        if ($isValid){
            $res['status'] = true;
            $res['message'] = 'Data berhasil dihapus!';
            $code = 200;
        } else {
            $res['status'] = false;
            $res['message'] = 'Data tidak ditemukan / username tidak valid!';
            $code = 401;
        }

        return response()->json($res, $code);
    }
}