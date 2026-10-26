<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('is_admin_logged_in')) {
    /** Redirect all protected admin requests to login unless a valid admin session exists. */
    function is_admin_logged_in() {
        $CI =& get_instance();
        if (!$CI->session->userdata('admin_login')) {
            redirect('admin/login');
            exit;
        }
        return TRUE;
    }
}
