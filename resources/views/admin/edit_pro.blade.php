@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        cập nhật sản phẩm
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
        @foreach($edit_product as $key => $pro)
            <form role="form" method="post" action="{{URL::to('/update-pro/'.$pro->product_id)}}" enctype="multipart/form-data">
            {{csrf_field() }}
            <div class="form-group">
                <label for="pro_name">Tên sản phẩm</label>
                <input type="text" class="form-control" id="pro_name" name="pro_name" required value="{{$pro->product_name}}">
            </div>    
            <div class="form-group">
                <label for="pro_price">Giá sản phẩm</label>
                <input type="number" min="0" class="form-control" id="pro_price" name="pro_price" required value="{{$pro->product_price}}">
            </div>     
            <div class="form-group">
                <label for="pro_img">Hình sản phẩm</label>
                <div><img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" width="100px" height="100px"></div>
                <input type="file" accept="image/*" class="form-control" id="pro_img" name="pro_img">
            </div> 
            <div class="form-group">
                <label for="pro_cat">Danh mục</label>
                <select name="pro_cat" class="form-control input-sm m-bot15" required>
                    @foreach($pro_cat as $key => $cat)
                    @if($cat->category_id==$pro->category_id)
                    <option selected value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                    @else
                    <option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
                    @endif
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label for="pro_brand">Thương hiệu</label>
                <select name="pro_brand" class="form-control input-sm m-bot15" required>
                    @foreach($pro_brand as $key => $brand)
                    @if($brand->brand_id==$pro->brand_id)
                    <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                    @else
                    <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                    @endif
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label for="pro_content">Nội dung</label>
                <textarea style="resize: none" rows="4" class="form-control" id="pro_content" name="pro_content" required>{{$pro->product_content}}</textarea>
            </div>    
            <button name="add_pro" type="submit" class="btn btn-info">Sửa</button>
            @endforeach
        </form>
        </div>
    </div>
</section>
@endsection