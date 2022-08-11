<?php

namespace App\Http\Controllers;

use App\Models\SinhVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SinhVienController extends Controller
{
    public function add(Request $request){
        $rules = [
            'ten_sv' => 'required|string',
            'nam_sinh' => 'required|string',
            'email' => 'required|string',
            'dia_chi' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()->toArray()
            ]);
        }

        $student = new SinhVien([
            'ten_sv' => $request->input('ten_sv'),
            'nam_sinh' => $request->input('namsinh'),
            'email' => $request->input('email'),
            'dia_chi' => $request->input('dia_chi'),
        ]);

        $student->save();
        return response()->json([
            'status' => true,
        ]);
    }

}
