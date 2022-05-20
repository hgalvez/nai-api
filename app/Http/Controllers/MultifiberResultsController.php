<?php

namespace App\Http\Controllers;

use App\Models\MultifiberResults;
use Illuminate\Http\Request;

class MultifiberResultsController extends Controller
{
    //
    //for index method
    public function index()
    {
        return MultifiberResults::all();
    }


    //for update
    public function update (Request $request, $serialnumber)
    {
        
        $MultifiberResults=MultifiberResults::where('serialnumber', '=',  $serialnumber)->first();
        $MultifiberResults->update($request->all());
        return $MultifiberResults;
    }

     //for store
     public function store (Request $request)     {
         $request ->validate([
             'serialnumber'=>'required|unique:MultifiberResults,serialnumber', 
             'partnumber'=>'required'
         ]);
         
         return MultifiberResults::create($request->all());
     }

    // public function delete($id)
    // {
    //     return MultifiberResults::destroy($id);
    // }

    public function delete($serialnumber)
    {
        return MultifiberResults::where('serialnumber', '=',  $serialnumber)->delete();
    }

    
    public function search($partnumber)
    {
        return MultifiberResults::where('partnumber', 'like', '%'.$partnumber.'%')->get();
    }



}
