@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        cập nhật thương hiệu
    </header>
    <div class="panel-body">
        @foreach($edit_brand as $key => $edit_value)
        <div class="position-center">            
            <form role="form" method="post" action="{{URL::to('/update-brand/'.$edit_value->id)}}">
            {{csrf_field() }}
            <div class="form-group">
                <label for="brand_name">Tên thương hiệu</label>
                <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Tên thương hiệu" value="{{$edit_value->brand_name}}">
            </div>     
            <button name="edit_brand" type="submit" class="btn btn-info">Cập nhật</button>
        </form>
        </div>
        @endforeach
    </div>
</section>
@endsection