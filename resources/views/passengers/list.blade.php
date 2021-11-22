@extends('admin.layouts.main')
@section('content')
<div class="card">
<div class="card-body">
<table class="table table-stripped">
    <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>car_id</td>
            <td>travel_time:</td>
            <td>avatar</td>
            <td><a href="{{route('passengers.add')}}">ADD</a></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($pass as $item)
           <tr><td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->car_id}}</td>
            <td>{{$item->travel_time}}</td>
            <td><img src="{{asset($item->avatar)}}" width="100" alt=""></td>
            <td><a href="{{route("passengers.del",['id'=>$item->id])}}">del</a>
            <a href="{{route('passengers.edit',['id'=>$item->id])}}">edit</a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>  
</div>
</div>  
@endsection