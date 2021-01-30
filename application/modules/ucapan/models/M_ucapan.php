<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_ucapan extends CI_Model
{
    protected $table = 'ucapan';

    public function find($slug)
    {
        $this->db->where('slug_undangan', $slug);
        return $this->db->get($this->table)->result();
    }
}
