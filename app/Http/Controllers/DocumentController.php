<?php

namespace App\Http\Controllers;

use App\Resource;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function resouce(){
        return view('resource.insert');
    }
    public function resourceStore(Request $request){
        $request->validate([
            'title' => 'required|unique:resources',
            'description' => 'required',
        ]);
        DB::beginTransaction();
        try {
            $resource = new Resource();
            $resource->title = $request->title;

            if($request->link == ''){
                $resource->link = '#';
            }else{
                $resource->link = $request->link;
            }
            $resource->description = $request->description;
            $resource->save();
            DB::commit();
            return back()->with('status','Data inserted successfully');
        } catch (\Exception $e) {
            DB::rollback();
            return back()->with('error', 'Failed!'.$e->getMessage());
        }
    }
    public function resourceList(){
        $resouces = Resource::paginate(5);
        return view('resource.index',compact('resouces'));
    }
}

