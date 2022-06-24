<?php 
if(!defined('_INCODE')) die('Access deined...');
function layout($layoutname='header',$data=[]){
    if(file_exists(_WEB_PATH_TEMPLATE.'/layouts/'.$layoutname.'.php')){
        require_once _WEB_PATH_TEMPLATE.'/layouts/'.$layoutname.'.php';
    }
}