<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('user');
        if($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function login($post)
    {
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function getUser($id = null)
    {
        $this->db->select('user.divisi_id, user_id, username, password, nama_user, level, divisi.divisi_id, divisi.nama_divisi');
        $this->db->from('user');
        $this->db->join('divisi', 'user.divisi_id = divisi.divisi_id');
        if($id != null) {
            $this->db->where('user.user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    
    public function add($post)
    {
        $params = [
            'username' => $post['username'],
            'divisi_id' => $post['divisi_id'],
            'password' => sha1($post['password']),
            'nama_user' => $post['nama_user'],
            'level' => $post['level'],
        ];
        $this->db->insert('user', $params);
    }
    
    public function edit($post)
    {
        $params = [
            'username' => $post['username'],
            'divisi_id' => $post['divisi_id'],
            'password' => sha1($post['password']),
            'nama_user' => $post['nama_user'],
            'level' => $post['level'],
        ];
        $this->db->where('user_id', $post['id']);
        $this->db->update('user', $params);
    }

    public function del($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('user');
    }

}
