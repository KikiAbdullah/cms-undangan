<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Templates
{

    function __construct()
    {
        $this->CI = &get_instance();
    }

    function display($template = NULL, $data = NULL)
    {
        $this->CI->load->view('template/' . $template, $data);
    }

    function backend($template = NULL, $data = NULL)
    {
        if ($template != NULL) {
            $data['_content'] = $this->CI->load->view($template, $data, TRUE);
            $data['_header'] = $this->CI->load->view('backend/header', $data, TRUE);
            $data['_footer'] = $this->CI->load->view('backend/footer', $data, TRUE);
            $data['_sidebar'] = $this->CI->load->view('backend/sidebar', $data, TRUE);
            $this->CI->load->view('backend/template', $data);
        }
    }

    function form($template = NULL, $data = NULL)
    {
        if ($template != NULL) {
            // $data['_content'] = $this->CI->load->view($template, $data, TRUE);
            // $data['_header'] = $this->CI->load->view('frontend/header', $data, TRUE);
            // $data['_footer'] = $this->CI->load->view('frontend/footer', $data, TRUE);
            // $data['_sidebar'] = $this->CI->load->view('frontend/sidebar', $data, TRUE);
            $this->CI->load->view('form/template', $data);
        }
    }
}
