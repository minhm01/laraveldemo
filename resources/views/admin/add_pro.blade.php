@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        thêm sản phẩm
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
            <form role="form" method="post" action="{{URL::to('/save-pro')}}" enctype="multipart/form-data">
            {{csrf_field() }}
            <div class="form-group">
                <label for="pro_name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="pro_name" name="pro_name" placeholder="Tên sản phẩm" required>
            </div>    
            <div class="form-group">
                <label for="pro_price">Giá sản phẩm</label>
                <input type="number" min="0" class="form-control" id="pro_price" name="pro_price" required>
            </div>     
            <div class="form-group">
                <label for="pro_img">Hình sản phẩm</label>
                <input type="file" accept="image/*" class="form-control" id="pro_img" name="pro_img" required>
            </div> 
            <div class="form-group">
                <label for="pro_cat">Danh mục</label>
                <select name="pro_cat" class="form-control input-sm m-bot15" required>
                    <option value="" disabled selected hidden>Chọn danh mục</option>
                    @foreach($pro_cat as $key => $cat)
                    <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label for="pro_brand">Thương hiệu</label>
                <select name="pro_brand" class="form-control input-sm m-bot15" required>
                    <option value="" disabled selected hidden>Chọn thương hiệu</option>
                    @foreach($pro_brand as $key => $brand)
                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label for="pro_content">Nội dung</label>
                <textarea style="resize: none" rows="4" class="form-control" id="pro_content" name="pro_content" placeholder="Nội dung" required></textarea>
            </div> 
            <div class="form-group">
                <label for="pro_stt">Hiển thị</label>
                <select name="pro_stt" class="form-control input-sm m-bot15">
                    <option value="0">Ẩn</option>
                    <option value="1" selected>Hiển thị</option>                                
                </select>
            </div>    
            <button name="add_pro" type="submit" class="btn btn-info">Thêm</button>
        </form>
        </div>
    </div>
</section>
@endsection