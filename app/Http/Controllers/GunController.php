<?php

namespace App\Http\Controllers;

use App\Models\Gun;
use App\Models\Handgun;
use Illuminate\Http\Request;

class GunController extends Controller
{
     public function index()
     {
        $gun = Gun::all();
        return view('gun.index', compact('gun'));
     }

     public function create() {
   $brands = ['Glock', 'Colt', 'Beretta', 'Desert Eagle'];
    $calibers = ['9mm', '.357 Magnum', '.50 AE'];
    $magazines = ['17', '6', '15', '7'];

    return view('gun.create', compact('brands', 'calibers', 'magazines'));
     }
     public function store(Request $request)
     {
         $request->validate([
             'name' => 'required',
             'brand' => 'required',
             'caliber' => 'required',
             'magazine' => 'required',
             'price' => 'required|numeric',
             'description' => 'nullable',
         ]);
     
         Gun::create($request->all()); 
         return redirect()->route('gun.index')->with('success', 'New Gun Succesfully Created.');
     }
      

      public function show($id)
      {
         $gun = Gun::find($id);
         if (!$gun) {
             return redirect()->route('gun.index')->with('error', 'Gun not found.');
         }
         return view('gun.show', compact('gun'));
      }
      
      public function edit($id)
      {
         $gun = Gun::find($id);
         if (!$gun) {
             return redirect()->route('gun.index')->with('error', 'Gun not found.');
         }
         return view('gun.edit', compact('gun'));
      }
      
      public function update(Request $request, $id)
      {
         $gun = Gun::find($id);
         if (!$gun) {
             return redirect()->route('gun.index')->with('error', 'Gun not found.');
         }
         $request->validate([
             'name' => 'required',
             'brand' => 'required',
             'caliber' => 'required',
             'magazine' => 'required',
             'price' => 'required|numeric',
             'description' => 'nullable',
         ]);
         $gun->update($request->only(['name', 'brand', 'caliber', 'magazine', 'price', 'description']));
         return redirect()->route('gun.index')->with('success', 'Your Gun Successfully Updated.');
      }
      

   public function destroy($id)
   {
      $gun = Gun::find($id);
      $gun->delete();
      return redirect()->route('gun.index')->with('success', 'Your Gun Succesfully Deleted.');
   }

   


}

