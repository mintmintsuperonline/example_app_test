<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppliesRequest;
use App\Models\Applies;
use App\Models\Branches;
use Illuminate\Http\Request;

class AppliesFormController extends Controller
{
    public function index(){
        $branches = Branches::all();
        $applies = Applies::all();
        return view('appliesform',[
            'branches' => $branches,
            'applies'=>$applies
        ]);
    }

    public function create(){
        return view('appliesform');
    }

    public function store(AppliesRequest $request){
        $applies = new Applies();
        
    //     $request->validate([
    //         'image' => 'required|image|mimes:png,jpg',
    //     ],
    //     [   'image.required'=>'You must upload an image file',
    //         'image.mimes' =>'File upload an image file in PNG or JPG format'

    // ]);

        $file = $request->image;
        $fileName = time(). '-'. $file->getClientOriginalName();
        $applies->name = $request->name;
        $applies->address = $request->address;
        $applies->telephone = $request->telephone;
        $applies->branches_id = $request -> branches_id;
        $applies->image = $fileName;
        $applies -> save();
 
        $file->move(public_path('uploads/'),$fileName);

        

        return redirect()->route('index')->with('success','Create Product Successfull! ');

    }

    public function getBranchId(int $id){
        $branches = Branches::findOrFail($id);

        return $branches;

    }
}
