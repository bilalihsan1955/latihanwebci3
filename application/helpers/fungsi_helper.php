<?php

function check_alredy_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if($user_session){
        redirect(base_url('welcome'));
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('id_user');
    if (!$user_session) {
        redirect(base_url('auth'));
    }
}