<?php

namespace App\Http\Controllers;

use App\Models\multifiberresults;
use Illuminate\Http\Request;

class multifiberresultsController extends Controller
{
    //
    //for index method
    public function index()
    {
        return multifiberresults::all();
    }


    //for update
    public function update (Request $request, $serialnumber)
    {

        $multifiberresults=multifiberresults::where('serialnumber', '=',  $serialnumber)->first();
        $multifiberresults->update($request->all());
        return $multifiberresults;
    }

     //for store
     public function store (Request $request)     {
         $request ->validate([
             'serialnumber'=>'required',
             'partnumber'=>'required'
         ]);

         return multifiberresults::create($request->all());
     }

    // public function delete($id)
    // {
    //     return multifiberresults::destroy($id);
    // }

    public function delete($serialnumber)
    {
        return multifiberresults::where('serialnumber', '=',  $serialnumber)->delete();
    }


    public function search($partnumber)
    {
        return multifiberresults::where('partnumber', 'like', '%'.$partnumber.'%')->get();
    }

    public function searchsn($serialnumber)
    {
        return multifiberresults::where('serialnumber', '=',$serialnumber)->get();
    }



}
