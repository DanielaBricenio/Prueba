<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Angulars;



class AngularController extends Controller
{
    
    public function index()
    {
        return view('angular/angularView');
    }

 
    public function store(Request $request)
    {
        $nombre = new Angulars;
        $nombre->nombre = $request->nombre;
        $nombre->save();
    }

   
    public function update(Request $request)
    {
        
    }

    
    public function destroy($id)
    {
        $ang = Angular::findOrFail($id);
        $ang->delete();
    }
}
