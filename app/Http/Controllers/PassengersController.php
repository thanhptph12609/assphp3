<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
// use App\Http\Controllers\Storage;
use Illuminate\Http\Request;
use App\Models\Passenger;
use App\Models\Car;
class PassengersController extends Controller
{
    public function list(){
        $pass=Passenger::all();
        return view('passengers.list',compact('pass'));
    }
    public function del($id){
        Passenger::destroy($id);
        if(!empty($model->avatar)){
            $imgPath = str_replace('storage/', 'public/', $model->avatar);
            Storage::delete($imgPath);
        }
        return redirect()->back();
        
    }
    public function addForm(){
        $cars=Car::all();
        return view('passengers.add',compact('cars'));
    }
    public function saveAdd(Request $request){
        $model= new Passenger();

        if($request->hasFile('avatar')){
            $imgPath = $request->file('avatar')->store('public/passengers');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->avatar = $imgPath;
        }
        
        $model->fill($request->all());
        $model ->save();
        return redirect(route('passengers.list'));
    }
    public function editForm($id){
        $model= Passenger::find($id);
        if(!$model){
            return back();
        }
        $cars=Car::all();
        
        return view('passengers.edit',compact('model','cars'));
    }
    public function saveForm(Request $request,$id){
        $model=  Passenger::find($id);
        if(!$model){
            return back();
        }

        if($request->hasFile('avatar')){
            $oldImg = str_replace('storage/', 'public/', $model->avatar);
            Storage::delete($oldImg);

            $imgPath = $request->file('avatar')->store('public/passengers');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->avatar = $imgPath;
        }
        
        $model->fill($request->all());
        $model ->save();
        return redirect(route('passengers.list'));
    }
}