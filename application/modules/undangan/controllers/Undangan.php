<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Undangan extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();

        //load model
        $this->load->model('M_undangan');
        $this->load->model('ucapan/M_ucapan', 'M_ucapan');
    }
    public function index()
    {
        $this->templates->form('undangan/index');
    }

    public function pengantin()
    {
        $slug = $this->uri->segment(1);

        $content = $this->M_undangan->data_undangan($slug);

        if ($content == null) {
            return redirect('');
        } else {
            $data['title'] = $content['pengantin']->panggilan_pria . ' & ' . $content['pengantin']->panggilan_wanita;
            $data['slug'] = $slug;
            $data['content'] = $content;

            $this->templates->display('template1', $data);
        }
    }

    public function store()
    {
        $data = $this->input->post();

        //disini fungsi buat masukin ke databasenya

        var_dump($data);
    }
}
