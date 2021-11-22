@extends('admin.layouts.main')
@section('content')
<form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <div>
                <div >
                  <label for="">name</label>
                  <input type="text" name="name" value="{{$model->name}}" class="form-control">
                  <label for="">car_id</label>
                  <select name="car_id" class="form-control">
                        @foreach ($cars as $item)
                            <option @if($item->id == $model->car_id) selected @endif value="{{$item->id}}">{{$item->owner}}</option>
                        @endforeach
                    </select>
                  <label for="">travel_time</label>
                  <input type="datetime-local" name="travel_time" class="form-control" placeholder="" value="{{$model->travel_time}}">
                  <label for="">avatar</label>
                  <input type="file" name="avatar" value="{{$model->avatar}}" class="form-control" placeholder="">  
                </div>
                
            </div>
            
            <div >
                <br>
                <a href="{{route('passengers.list')}}" >Hủy</a>
                &nbsp;
                <button type="submit" >Lưu</button>
            </div>
        </div>
    </form>
@endsection