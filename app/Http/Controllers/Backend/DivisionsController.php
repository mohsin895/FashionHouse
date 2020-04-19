<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\District;


class DivisionsController extends Controller
{
  public function index()
  {
    $divisions = Division::orderBy('priority','asc')->get();
    return view('admin.pages.divisions.index',compact('divisions'));
  }


  public function create()
  {
    return view('admin.pages.divisions.create');
  }
  public function store(Request $request)
  {
  $this->validate($request,[
      'name' => 'required',
      'priority' => 'required',
    ],
   [

     'name.required' => 'Please provide a division name',
      'priority.required' => 'Please provide a division priority ',
   ]);

   $division = new Division();
   $division->name = $request->name;
  $division->priority= $request->priority;
   $division->save();

   session()->flash('success', 'A new division has addad successfully');
   return redirect()->route('admin.divisions');
  }

  public function edit($id)
  {

  $division=Division::find($id);
  if (!is_null($division)) {
    return view('admin.pages.divisions.edit',compact('division'));
  }else {
    return redirect()->route('admin.divisions');
  }
  }

  public function update(Request $request,$id)
  {
  $this->validate($request,[
    'name' => 'required',
    'priority' => 'required',
  ],
 [

   'name.required' => 'Please provide a division name',
    'priority.required' => 'Please provide a division priority ',
 ]);

   $division =  Division::find($id);
   $division->name = $request->name;
  $division->priority = $request->priority;
   $division->save();

   session()->flash('success', 'Division has updated successfully');
   return redirect()->route('admin.divisions');
  }
  public function delete($id)
  {
    $division = Division::find($id);
    if(!is_null($division)){

      $district = District::where('division_id',$division->id)->get();
      foreach ($districts as $district) {
        $district->delete();
      }

        $division->delete();
    }
      session()->flash('success', 'A division has delete successfully');
    return back();
  }
}
