<?php

namespace App\Http\Controllers;

use App\Models\negara;
use App\Models\peringkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function workSPK()
    {
        $data = negara::all();
        $response = Http::post('http://127.0.0.1:5000/post-rank',["negaras"=>$data]);
        
        // foreach (json_decode($response) as $rsp){
        //     print_r($rsp);
        // }

        // return $response;
        peringkat::truncate();
        
        // return $response;
        
        foreach (json_decode($response) as $rsp){
            peringkat::create([
                'negara_peringkat' => $rsp->negara_peringkat,
                'alternative' => $rsp->alternative,
                'score' => $rsp->score,    
            ]);
        }

        $datanegara= peringkat::all(); 
        return view('welcome',compact('datanegara'));
    }

    public function createnegara(Request $req){
        negara::create([
            "negara" => $req->negara,
            "C1" => $req->C1,
            "C2" => $req->C2,
            "C3" => $req->C3,
            "C4" => $req->C4,
            "C5" => $req->C5,
            "C6" => $req->C6,
        ]);

        return redirect()->intended('/');
    }

    public function hapus($id)
    {
        $data = negara::find($id);
        $data->delete();
        DB::statement('SET @var := 0');
        DB::statement('UPDATE negaras SET no = (@var := @var+1)');
        DB::statement('ALTER TABLE negaras AUTO_INCREMENT=1');
        return redirect()->intended('/');
    }

}
