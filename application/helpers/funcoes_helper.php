<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('set_msg')) {
    /*seta uma mensagem via session para ser lida posteriormente*/
    function set_msg($msg = null) {
        $ci = & get_instance();
        $ci->session->set_userdata('imo_aviso', $msg);
    }
}

if (! function_exists('get_msg')) {
    /*pega uma mensagem via session e destroi a session*/
    function get_msg($destroy = true) {
        $ci = & get_instance();
        $retorno = $ci->session->userdata('imo_aviso');
        if ($destroy) {
            $ci->session->unset_userdata('imo_aviso');
        }
        return $retorno;
    }
}

if (! function_exists('DatetimeNow')) {
    /*pega dia e hora atual*/
    function DatetimeNow() {
        $tz_object = new DateTimeZone('Brazil/East');
        $datetime = new DateTime();
        $datetime->setTimezone($tz_object);
        return $datetime->format('Y\-m\-d\ h:i:s');
    }
}

if (! function_exists('set_sts')) {
    /*seta uma mensagem via session para ser lida posteriormente*/
    function set_sts($msg = null) {
        $ci = & get_instance();
        $ci->session->set_userdata('imo_status', (object) $msg);
    }
}

if (! function_exists('get_sts')) {
    /*pega uma mensagem via session e destroi a session*/
    function get_sts($destroy = true) {
        $ci = & get_instance();
        $retorno = $ci->session->userdata('imo_status');
        if ($destroy) {
            $ci->session->unset_userdata('imo_status');
        }
        return $retorno;
    }
}

if (! function_exists('del_ses')) {
    /*pega uma mensagem via session e destroi a session*/
    function del_ses($destroy = true) {
        $ci = & get_instance();
        if ($destroy) {
            $ci->session->sess_destroy();
        }
    }
}

if (! function_exists('carregaImg')) {
    /*pega uma imagem via $_FILE salva na pasta*/
    function carregaImg($file_input){
        $CI = & get_instance();

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 4096;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
        $config['encrypt_name'] = TRUE;

        $image_data = array();

        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0775);
        }

        $CI->load->library('upload',$config);
        if(!$CI->upload->do_upload($file_input)){
            return array(false, $this->upload->display_errors());
        }else{
            $image_data = $CI->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $image_data['full_path'];
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 500;
            $config['height'] = 500;
            $CI->load->library('image_lib', $config);
            if (!$CI->image_lib->resize()) {
                return array(0, $this->image_lib->display_errors());
            }
            return array(1, 'uploads/'.$image_data['file_name']);
        }
    }
}