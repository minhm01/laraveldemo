@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        thêm thương hiệu
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
            <form role="form" method="post" action="{{URL::to('/save-brand')}}">
            {{csrf_field() }}
            <div class="form-group">
                <label for="brand_name">Tên thương hiệu</label>
                <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Tên thương hiệu">
            </div>        
            <div class="form-group">
                <label for="brand_stt">Hiển thị</label>
                <select name="brand_stt" class="form-control input-sm m-bot15">
                    <option value="0">Ẩn</option>
                    <option value="1" selected>Hiển thị</option>                                
                </select>
            </div>    
            <button name="add_brand" type="submit" class="btn btn-info">Thêm</button>
        </form>
        </div>
    </div>
</section>
@endsection