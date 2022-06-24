<?php 
if(!defined('_INCODE')) die('Access deined...');

$data = [
  'page_title'=>'Đăng nhập hệ thống'
];

layout('header_login',$data);

?>
<div class="row">
    <div class="col-6" style='margin:20px auto;'>
        <h3 class='text-center text-uppercase '>Đăng nhập hệ thống</h3>
        <form action='' method='post'>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder='Địa chỉ email...'>
          </div>
          <div class="form-group">
            <label>Mật khẩu</label>
            <input type="password" class="form-control" placeholder='Mật khẩu...'>
          </div>
  
          <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
          <hr>
          <div class='d-flex align-items-center justify-content-between'>
            <p><a href="?module=auth&action=forgot">Quên mật khẩu?</a></p>
            <p><a href="?module=auth&action=register">Đăng ký tài khoản</a></p>
          </div>
        </form>
    </div>
</div>
<?php
layout('footer_login');