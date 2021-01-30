<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_undangan extends CI_Model
{
    public function data_undangan($slug)
    {
        $this->db->where('slug_undangan', $slug);
        $undangan = $this->db->get('undangan', 1)->row();

        $this->db->where('slug_undangan', $slug);
        $pengantin = $this->db->get('pengantin', 1)->row();

        $this->db->where('slug_undangan', $slug);
        $foto_prewed = $this->db->get('foto_prewed', 1)->row();

        $this->db->where('slug_undangan', $slug);
        $resepsi = $this->db->get('resepsi', 1)->row();

        $this->db->where('slug_undangan', $slug);
        $akad = $this->db->get('akad', 1)->row();

        $this->db->where('slug_undangan', $slug);
        $moment = $this->db->get('moment', 1)->row();

        $this->db->where('slug_undangan', $slug);
        $ucapan = $this->db->get('ucapan')->result();

        return $data = [
            'undangan' => $undangan,
            'pengantin' => $pengantin,
            'foto_prewed' => $foto_prewed,
            'resepsi' => $resepsi,
            'akad' => $akad,
            'moment' => $moment,
            'ucapan' => $ucapan,
        ];
    }
}
