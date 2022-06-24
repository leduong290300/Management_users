<?php
if (!defined('_INCODE')) die('Access deined...');

//* Gán session
function setSession($key, $value)
{
    if (!empty(session_id())) {
        $_SESSION[$key] = $value;
        return true;
    }
    return false;
}

//* Đọc session
function getSession($key = '')
{
    if (empty($key)) {
        return $_SESSION;
    } else {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }
    return false;
}

//* Xóa session
function removeSession($key = '')
{
    if (empty($key)) {
        session_destroy();
        return true;
    } else {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
            return true;
        }
    }
    return false;
}

//* Gán flag data
function setFlagData($key, $value)
{
    $key = 'flag_' . $key;
    return setSession($key, $value);
}

//* Đọc flag data
function getFlagData($key)
{
    $key = 'flag_' . $key;
    $data = getSession($key);
    removeSession($key);
    return $data;
}
