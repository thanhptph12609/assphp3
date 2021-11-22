@extends('admin.layouts.main')
@section('content')
<form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <div >
                  <label for="">plate_number</label>
                  <input type="number" value="{{$model->plate_number}}" name="plate_number" class="form-control">
                  <label for="">owner</label>
                  <input type="text" name="owner" value="{{$model->owner}}" class="form-control">
                  <label for="">travel_fee</label>
                  <input type="number" name="travel_fee" value="{{$model->travel_fee}}" class="form-control" placeholder="" class="form-control">
                  <label for="">plate_image</label>
                  <input type="file" name="plate_image" value="{{$model->travel_fee}}" class="form-control" placeholder="" class="form-control">
                </div>  
            </div>
            <div >
                <br>
                <a class="btn btn-warning" href="{{route('cars.list')}}" >Hủy</a>
                &nbsp;
                <button class="btn btn-primary" type="submit" >Lưu</button>
            </div>
        </div>
    </form>    
@endsection