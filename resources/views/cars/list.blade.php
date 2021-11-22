@extends('admin.layouts.main')
@section('content')
<div class="card">
    <div class="card-body">
<table class="table table-stripped">
    <thead >
        <tr>
            <td >id</td>
            <td  >plate_number</td>
            <td  >owner</td>
            <td  >travel_fee</td>
            <td  >plate_image</td>
            <td ><a href="{{route('cars.add')}}">ADD</a></td>    
        </tr>
    </thead>
    <tbody>
        @foreach ($ca as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->plate_number}}</td>
            <td>{{$item->owner}}</td>
            <td>{{$item->travel_fee}}</td>
            <td><img src="{{asset($item->plate_image)}}" width="100" alt=""></td>
            <td>
                <a href="{{route("cars.del",['id'=>$item->id])}}">del</a>
                <a href="{{route('cars.edit',['id'=>$item->id])}}">edit</a>
            </td>
        </tr>
            @endforeach
    </tbody>
</table>
    </div>
        </div>
@endsection