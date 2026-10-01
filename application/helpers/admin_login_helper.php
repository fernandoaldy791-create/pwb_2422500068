<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Cek apakah administrator sudah login.
 */
function is_admin_login()
{
    $CI =& get_instance();
    return $CI->session->userdata('admin_login') === TRUE;
}

/**
 * Untuk halaman yang WAJIB login (dashboard, dll).
 * Jika belum login, arahkan ke halaman login.
 */
function is_admin_logged_in()
{
    if (!is_admin_login()) {
        redirect('admin/login');
    }
}

/**
 * Untuk halaman login.
 * Jika sudah login, tidak perlu login lagi, arahkan ke dashboard.
 */
function redirect_if_admin_logged_in()
{
    if (is_admin_login()) {
        redirect('admin');
    }
}