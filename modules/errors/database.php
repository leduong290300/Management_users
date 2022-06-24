<?php 
if(!defined('_INCODE')) die('Access deined...');
layout('header_login');
?>
<div class='error_database'>
    <h3 class='text-center'>Lỗi liên quan đến CSDL</h3>
    <hr>
    <p> 
        <i class="fa fa-exclamation-triangle error_icon" aria-hidden="true"></i> 
        <?php echo $e->getMessage(); ?>
    </p>
    <p> 
        <i class="fa fa-exclamation-triangle error_icon" aria-hidden="true"></i> 
        File :
        <?php echo $e->getFile(); ?>
    </p>
    <p> 
        <i class="fa fa-exclamation-triangle error_icon" aria-hidden="true"></i> 
        Line :
        <?php echo $e->getLine(); ?>
    </p>
</div>