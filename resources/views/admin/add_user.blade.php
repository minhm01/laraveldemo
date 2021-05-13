@extends('admin_layout')
@section('admin_content')
<section class="panel">
    <header class="panel-heading">
        tạo tài khoản
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
            <form role="form" method="post" action="{{URL::to('/save-user')}}">
            {{csrf_field() }}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Tên đăng nhập">
            </div>        
            <div class="form-group">
                <label for="pass">Mật khẩu</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Mật khẩu">
            </div>        
            <button name="add_user" type="submit" class="btn btn-info">Tạo</button>
        </form>
        </div>
    </div>
</section>
@endsection