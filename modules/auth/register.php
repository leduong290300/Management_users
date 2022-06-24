<?php 
if(!defined('_INCODE')) die('Access deined...');

$data = [
    'page_title'=>'Đăng ký tài khoản'
];

layout('header_login',$data);

?>
<div class="row">
    <div class="col-6" style='margin:20px auto;'>
        <h3 class='text-center text-uppercase '>Đăng ký tài khoản</h3>
        <form action='' method='post'>
            <div class="form-group">
                <label>Họ tên</label>
                <input type="text" class="form-control" placeholder='Họ tên...'>
            </div>
            <div class="form-group">
                <label>Điện thoại</label>
                <input type="email" class="form-control" placeholder='Điện thoại...'>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder='Địa chỉ email...'>
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" placeholder='Mật khẩu...'>
            </div>
            <div class="form-group">
                <label>Nhập lại mật khẩu</label>
                <input type="password" class="form-control" placeholder='Nhập lại mật khẩu...'>
            </div>
    
            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
            <hr>
            <div class='d-flex align-items-center justify-content-end'>
                <p><a href="?module=auth&action=login">Đăng nhập tài khoản</a></p>
            </div>
        </form>
    </div>
</div>
<?php
layout('footer_login');