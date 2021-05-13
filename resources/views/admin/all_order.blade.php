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
    <div class="panel-heading">danh sách đơn hàng</div>
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
            <th>Ngày đặt hàng</th>
            <th>Chi tiết</th>
            <th>Thành tiền</th>
            <th>Hình thức thanh toán</th>
            <th>Thông tin khách hàng</th>
            <th>Ghi chú</th>
            <th>Trạng thái</th>
            <th style="width:120px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_order as $key => $order)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$order->created_at}}</td>
            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#orderDetail{{$order->order_id}}">Chi tiết</button>
              <div class="modal fade" id="orderDetail{{$order->order_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body">
                      <table width="100%" id="cartarticles" class="table table-striped table-bordered table-hover">
                        <thead>
                          <tr>
                            <th width="5%"></th>
                            <th colspan="2">Sản phẩm</th>
                            <th align="center" width="8%">Sl</th>
                            <th align="right"width="14%">Giá tiền</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $num=1; foreach($ord_dets as $cart){
                          if(($cart->order_id)==($order->order_id)){ ?>
                            <tr id="tr_19810">
                            <td>{{$num}}</td>
                            <td width="40px"><a href="{{URL::to('sanpham/'.$cart->product_id)}}"><img src="{{URL::to('public/upload/product/'.$cart->product_image)}}"  width="40px" height="40px" alt="{{$cart->product_name}}"></a></td>
                            <td><a href="{{URL::to('sanpham/'.$cart->product_id)}}">{{$cart->product_name}}</a></td>
                            <td align="center">{{$cart->qty}}</td>
                            <td align="right">{{($cart->sum)}}</td>                            
                          </tr>
                          <?php } $num++;} ?>                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>{{$order->total}}</td>
            <td><?php            
            if($order->payment=='c'){echo 'Tiền mặt';}else{echo 'Chuyển khoản';}
            ?></td>
            <td>Tên: {{$order->c_name}}<br>Địa chỉ: {{$order->c_address}}<br>Điện thoại: {{$order->c_phone}}<br>Email: {{$order->c_email}}</td>
            <td>{{$order->note}}</td>
            <td><?php
            switch ($order->status) {
              case 1:
                echo 'Đã chuyển khoản';
                break;
              case 2:
                echo 'Đang giao hàng';
                break;
              case 3:
                echo 'Đã hoàn thành';
                break;
              default:
                echo 'Đang chờ';
            }
            ?></td>
           <td><span class="text-ellipsis">
            <a href="{{URL::to('/stt-order/'.$order->order_id.'/0')}}"><span class="fa-order-styling fa fa-hourglass"></span></a>            
            <a href="{{URL::to('/stt-order/'.$order->order_id.'/1')}}"><span class="fa-order-styling fa fa-money"></span></a>
            <a href="{{URL::to('/stt-order/'.$order->order_id.'/2')}}"><span class="fa-order-styling fa fa-truck"></span></a>
            <a href="{{URL::to('/stt-order/'.$order->order_id.'/3')}}"><span class="fa-order-styling fa fa-archive"></span></a>            
            </span></td>
            <td>              
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection