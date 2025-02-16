<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){

     $permissions = Permission::latest()->get();
     return view('backend.permission.index',compact('permissions'));
        
    }
    public function create(){
        return view('backend.permission.create');

    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:permissions|min:3',
        ]);

        if($validator->passes()){
            Permission::create($request->all());
            return redirect()->route('permission.index');
         }else{
            return redirect()->route('permission.create')->withInput()->WithErrors($validator);

        }

    }
    public function edit($id){
        echo $id;die;

    }
    
    public function update(){

    }

}
