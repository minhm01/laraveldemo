@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        cập nhật danh mục
    </header>
    <div class="panel-body">
        @foreach($edit_cat as $key => $edit_value)
        <div class="position-center">            
            <form role="form" method="post" action="{{URL::to('/update-category/'.$edit_value->category_id)}}">
            {{csrf_field() }}
            <div class="form-group">
                <label for="cat_name">Tên danh mục</label>
                <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục" value="{{$edit_value->category_name}}">
            </div>     
            <button name="edit_category" type="submit" class="btn btn-info">Cập nhật</button>
        </form>
        </div>
        @endforeach
    </div>
</section>
@endsection