<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function list(){
        $cars=Car::all();
        return view('cars.list',[
            'ca'=>$cars    
        ]);
    }
    public function del($id){
        Car::destroy($id);
        if(!empty($model->plate_image)){
            $imgPath = str_replace('storage/', 'public/', $model->plate_image);
            Storage::delete($imgPath);
        }
        return redirect()->back();
        
    }
    public function addForm(){
        $cars=Car::all();
        return view('cars.add',[
            'ca'=>$cars  
        ]);
    }
    public function saveAdd(Request $request){
        $model= new Car();

        if($request->hasFile('plate_image')){
            $imgPath = $request->file('plate_image')->store('public/cars');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->plate_image = $imgPath;
        }
        
        $model->fill($request->all());
        $model ->save();
        return redirect(route('cars.list'));
    }
    public function editForm($id){
        $model= Car::find($id);
        
        return view('cars.edit',compact('model'));
    }
    public function saveForm(Request $request,$id){
        $model=  Car::find($id);
        
        if($request->hasFile('plate_image')){
            $oldImg = str_replace('storage/', 'public/', $model->plate_image);
            Storage::delete($oldImg);

            $imgPath = $request->file('plate_image')->store('public/cars');
            $imgPath = str_replace('public/', 'storage/', $imgPath);
            $model->plate_image = $imgPath;
        }
        
        $model->fill($request->all());
        $model ->save();
        return redirect(route('cars.list'));
    }
}