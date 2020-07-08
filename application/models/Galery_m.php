<?php defined('BASEPATH') or exit('No direct script access allowed');

class Galery_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('galery');
        if($id != null) {
            $this->db->where('galery_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function getGalery($id = null)
    {
        $this->db->select('divisi.divisi_id, nama_divisi, galery.galery_id, judul_galery, penulis_galery, keterangan_galery, image_galery, tanggal_dibuat ');
        $this->db->from('divisi');
        $this->db->join('galery', 'galery.divisi_id = divisi.divisi_id');
        $this->db->order_by('galery_id', 'desc');
        if($id != null) {
            $this->db->where('galery.galery_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }


    public function add($post)
    {
        $params = [
            'judul_galery' => $post['judul_galery'],
            'divisi_id' => $post['divisi_id'],
            'user_id' => $post['user_id'],
            'penulis_galery' => $post['penulis_galery'],
            'keterangan_galery' => $post['keterangan_galery'],
            'image_galery' => $post['image_galery'],
            'tanggal_dibuat' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('galery', $params);
    }
    
    public function edit($post)
    {
        $params = [
            'judul_galery' => $post['judul_galery'],
            'keterangan_galery' => $post['keterangan_galery'],
        ];
        $this->db->where('galery_id', $post['id']);
        $this->db->update('galery', $params);
    }

    public function del($id)
	{
		$this->db->where('galery_id', $id);
		$this->db->delete('galery');
    }

}
