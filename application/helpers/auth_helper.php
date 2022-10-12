<?php
defined('BASEPATH') or exit('No direct script access allowed');

function akses_login()
{
    $ci = &get_instance();

    if ($ci->session->userdata('status') != 'login') {
        redirect('login');
    }
}

function akses_admin()
{
    $ci = &get_instance();
    if ($ci->session->userdata('level') != 'admin') {
        redirect('blocked');
    }
}
