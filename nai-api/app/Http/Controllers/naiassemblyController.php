<?php

namespace App\Http\Controllers;

use App\Models\naiassembly;
use Illuminate\Http\Request;

class naiassemblyController extends Controller
{

    //for index method
    public function index()
    {
        return naiassembly::all();
    }


    //for update
    public function update (Request $request, $serialnumber)
    {

        $naiassembly=naiassembly::where('serialnumber', '=',  $serialnumber)->first();
        $naiassembly->update($request->all());
        return $naiassembly;
    }

     //for store
     public function store (Request $request)     {
         $request ->validate([
             'serialnumber'=>'required|unique:naiassembly,serialnumber',
             'partnumber'=>'required'
         ]);

         return naiassembly::create($request->all());
     }

    // public function delete($id)
    // {
    //     return naiassembly::destroy($id);
    // }

    public function delete($serialnumber)
    {
        return naiassembly::where('serialnumber', '=',  $serialnumber)->delete();
    }


    public function search($partnumber)
    {
        return naiassembly::where('partnumber', 'like', '%'.$partnumber.'%')->get();
    }

    public function searchsn($serialnumber)
    {
        return naiassembly::where('serialnumber', '=', $serialnumber)->get();
    }




}
