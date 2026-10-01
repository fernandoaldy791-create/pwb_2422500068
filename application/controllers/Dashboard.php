<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        echo "<h1>SELAMAT DATANG DI WEBSITE KAMI</h1>";
        echo '<p><a href="' . site_url('admin') . '">Masuk sebagai Administrator</a></p>';
    }
}