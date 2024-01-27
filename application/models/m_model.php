<?php

class M_model extends CI_Model
{
    function get_data($table)
    {
        return $this->db->get($table);
    }
    //untuk menghubungkan data ke sql
    function getwhere($table, $data)
    {
        return $this->db->get_where($table, $data);
    }
    //untuk menghubungkan register ke sql
    function register($data)
    {
        return $this->db->insert("admin", $data);
    }
    //untuk menghapus data di dalam from juga sql
    public function delete($table, $field, $id)
    {
        $data = $this->db->delete($table, array($field => $id));
        return $data;
    }
    //untuk menambahkan data di dalam from dan sql
    public function tambah_data($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id($table);
    }

    public function ubah_data($tabel, $data, $where)
    {
        $data = $this->db->update($tabel, $data, $where);
        return $this->db->affected_rows();
    }

    public function get_by_id($tabel, $id_column, $id)
    {
        $data = $this->db->where($id_column, $id)->get($tabel);
        return $data;
    }

    public function get_foto_by_id($id)
    {
        $this->db->select('image');
        $this->db->from('user');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $result = $query->row();
            return $result->image;
        } else {
            return false;
        }
    }
    public function getBynama_siswa($nama_siswa)
    {
        $this->db->where('nama_siswa', $nama_siswa);
        $query = $this->db->get('user'); // Gantilah 'admin' sesuai dengan nama tabel yang digunakan
        return $query->row_array();
    }
    public function getBynama_guru($nama_guru)
    {
        $this->db->where('nama_guru', $nama_guru);
        $query = $this->db->get('guru'); // Gantilah 'admin' sesuai dengan nama tabel yang digunakan
        return $query->row_array();
    }

    public function checkEmailExists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('admin'); // Gantilah 'nama_tabel' dengan nama tabel yang sesuai

        return $query->row_array();
    }

    public function searchData($searchInput)
    {
        // Assuming you have a table named 'user'
        $this->db->like('nama_siswa', $searchInput);
        $this->db->or_like('nama_ibu', $searchInput);
        $this->db->or_like('nama_ayah', $searchInput);
        $this->db->or_like('alamat', $searchInput);
        $query = $this->db->get('user');

        return $query->result();
    }

    function get_pembayaran()
    {
        $this->db->select('pembayaran.*, user.nama_siswa');
        $this->db->from('pembayaran');
        $this->db->join('user', 'pembayaran.id = user.id', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_jenis_pembayaran()
    {
        // Replace 'your_table_name' with the actual table name
        $result = $this->db->get('pembayaran')->row();

        if ($result) {
            return $result->jenis_pembayaran;
        }

        // Return a default value or handle the case when the result is empty
        return "Default Value";
    }

    public function cek_data_exists($table, $where)
    {
        $this->db->where($where);
        $query = $this->db->get($table);

        return $query->num_rows() > 0;
    }

    public function get_user_data()
    {
        // Replace 'users' with your actual database table name
        $query = $this->db->get('user');

        // Assuming you want to return the result as an object
        return $query->result();
    }

    public function getUserById($userId)
    {
        // Replace 'users' with your actual table name
        $this->db->where('id', $userId);
        $query = $this->db->get('user');

        if ($query->num_rows() > 0) {
            return $query->row();
        }

        return null; // Return null if user is not found
    }
}
