<?php
const _MODULE_DEFAULT = 'home';
const _ACTION_DEFAULT = 'lists';

const _INCODE = true; //* Ngăn chặn hành vi truy cập trực tiếp vào file

define('_WEB_HOST_ROOT','http://' . $_SERVER['HTTP_HOST']); //* Thiết lập host

define('_WEB_HOST_TEMPLATE',_WEB_HOST_ROOT.'/template');

//* Thiết lập path
define('_WEB_PATH_ROOT',__DIR__);
define('_WEB_PATH_TEMPLATE',_WEB_PATH_ROOT.'/template');

//* Thiết lập kết nối database
const _HOST = 'localhost';
const _USER = 'root';
const _PASS = 'Leduong@2903';
const _DB = 'management_users';
const _DRIVER = 'mysql';