<?php defined('BASEPATH') or exit('No direct script access allowed');

class Artikel_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('artikel');
        if($id != null) {
            $this->db->where('artikel_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getArtikel($id = null)
    {
        $this->db->select('divisi.divisi_id, nama_divisi, artikel.artikel_id, judul_artikel, penulis_artikel,isi_artikel, keterangan_artikel, image_artikel, tanggal_dibuat ');
        $this->db->from('divisi');
        $this->db->join('artikel', 'artikel.divisi_id = divisi.divisi_id');
        if($id != null) {
            $this->db->where('artikel.artikel_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getArtikel3($id = null)
    {
        $this->db->select('ukm.ukm_id, artikel.artikel_id, judul_artikel, keterangan, penulis_artikel,isi_artikel, image_artikel, tanggal_dibuat ');
        $this->db->from('ukm');
        $this->db->join('artikel', 'artikel.ukm_id = ukm.ukm_id');
        $this->db->where('artikel.anggota_id', $this->session->userdata('anggotaid'));
        if($id != null) {
            $this->db->where('artikel.artikel_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function gethome($id = null)
    {
        $this->db->from('artikel');
        $this->db->order_by('artikel_id', 'desc');
        $this->db->limit(4);
        if($id != null) {
            $this->db->where('artikel_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'judul_artikel' => $post['judul_artikel'],
            'divisi_id' => $post['divisi_id'],
            'user_id' => $post['user_id'],
            'penulis_artikel' => $post['penulis_artikel'],
            'keterangan_artikel' => $post['keterangan_artikel'],
            'isi_artikel' => $post['isi_artikel'],
            'image_artikel' => $post['image_artikel'],
            'tanggal_dibuat' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('artikel', $params);
    }
    
    public function edit($post)
    {
        $params = [
            'judul_artikel' => $post['judul_artikel'],
            'isi_artikel' => $post['isi_artikel'],
            'keterangan_artikel' => $post['keterangan_artikel'],
        ];
        $this->db->where('artikel_id', $post['id']);
        $this->db->update('artikel', $params);
    }

    public function del($id)
	{
		$this->db->where('artikel_id', $id);
		$this->db->delete('artikel');
    }

}
