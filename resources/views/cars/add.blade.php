<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@extends('admin.layouts.main')
@section('content')
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div>
                <div >
                <div class="form-group">
                    <label for="">plate_number</label>
                  <input type="number" class="form-control" name="plate_number" >
                </div>
                  
                  <label for="">owner</label>
                  <input type="text" class="form-control" class="form-control" name="owner" >
                  <label for="">travel_fee</label>
                  <input type="number" name="travel_fee" class="form-control" placeholder="">
                  <label for="">plate_image</label>
                  <input type="file" name="plate_image" class="form-control" placeholder="">
                </div>  
            </div>
            <div >
                <br>
                <a  class="btn btn-warning" href="{{route('cars.list')}}" >Hủy</a>
                &nbsp;
                <button class="btn btn-primary" type="submit" >Lưu</button>
            </div>
        </div>
    </form>
</div>

@endsection