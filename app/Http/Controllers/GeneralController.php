<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GeneralController extends Controller
{
    public function alldata()
    {
        $data=DB::table('generals')->get();
        $keyl='';

        foreach ($data as $key => $value) {
            if ($value->grub!=$keyl) {
                $keyl=$value->grub;
            }
            $bin[$keyl][$value->key]=$value;
        }
        $binding=array(
            'data1'=>$data,
            'data2'=>$bin
        );

        if (empty($_GET['naulamantikor'])) {
            return $binding;            
        }else{
            $binding=json_encode($binding);
            return response()->json($binding);

        }
    }
    public function index()
    {
        $data=$this->alldata();
        // dd($data);
        return view('dev/index',['data'=>$data]);
    }
    public function gal()
    {
        $data=$this->alldata();
        $dar=DB::table('headitems')->get();
        foreach ($dar as $key => $value) {
            $darl=DB::table('bodyitems')
            ->where('id_head', $value->id)
            ->get();
            $data['data3'][$key]['list']=$darl;
            $data['data3'][$key]['data']=$value;
        }
        // dd($data);
        return view('dev/adora',['data'=>$data]);
    }
    public function mas()
    {
        $data=$this->alldata();
        $dar=DB::table('headitems')->get();
        foreach ($dar as $key => $value) {
            $darl=DB::table('bodyitems')
            ->where('id_head', $value->id)
            ->get();
            $data['data3'][$key]['list']=$darl;
            $data['data3'][$key]['data']=$value;
        }
        $data['data4']=DB::table('bodyitems')->get();
        // dd($data);
        return view('dev/masonary',['data'=>$data]);
    }
    public function con()
    {
        $data=$this->alldata();
        // dd($data);
        return view('dev/contac',['data'=>$data]);
    }
}
