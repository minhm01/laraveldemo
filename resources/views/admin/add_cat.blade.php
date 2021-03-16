@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        thêm danh mục
    </header>
    <div class="panel-body">
        <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
        <div class="position-center">            
            <form role="form" method="post" action="{{URL::to('/save-category')}}">
            {{csrf_field() }}
            <div class="form-group">
                <label for="cat_name">Tên danh mục</label>
                <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Tên danh mục">
            </div>        
            <div class="form-group">
                <label for="cat_stt">Hiển thị</label>
                <select name="cat_stt" class="form-control input-sm m-bot15">
                    <option value="0">Ẩn</option>
                    <option value="1" selected>Hiển thị</option>                                
                </select>
            </div>    
            <button name="add_category" type="submit" class="btn btn-info">Thêm</button>
        </form>
        </div>
    </div>
</section>
@endsection