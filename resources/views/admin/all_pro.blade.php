@extends('admin_layout')
@section('admin_content')
<section id="container">
		<div class="table-agile-info">
  <div class="panel panel-default">
  <?php
        $message = Session::get('message');
        if($message){
            echo '<span class="text-alert">'.$message.'</span>';
            Session::put('message',null);
        }
        ?>
    <div class="panel-heading">
      sản phẩm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Thương hiệu</th>
            <th>Danh mục</th>
            <th>Nội dung</th>
            <th>Hiển thị</th>            
            <th style="width:60px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$pro->product_name}}</td>
            <td>{{$pro->product_price}}</td>
            <td><img src="public/upload/product/{{$pro->product_image}}" height="100px" width="100px"></td>
            <td>{{$pro->brand_name}}</td>
            <td>{{$pro->category_name}}</td>
            <td>{{$pro->product_content}}</td>
            <td><span class="text-ellipsis">
            <?php
            if($pro->product_stt==0){ ?>
            <a href="{{URL::to('/active-pro/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
            <?php }else{ ?>
            <a href="{{URL::to('/unactive-pro/'.$pro->product_id)}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
            <?php } ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-pro/'.$pro->product_id)}}" class="active" ui-toggle-class=""><i class="fa fa-pencil-square"></i></a>
              <a onclick="return confirm('Xóa?')" href="{{URL::to('/del-pro/'.$pro->product_id)}}" class="active" ui-toggle-class=""><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection