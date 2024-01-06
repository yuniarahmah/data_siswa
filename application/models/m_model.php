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
    public function getByUsername($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('admin'); // Gantilah 'admin' sesuai dengan nama tabel yang digunakan
        return $query->row_array();
    }
    
    public function checkEmailExists($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('admin'); // Gantilah 'nama_tabel' dengan nama tabel yang sesuai

        return $query->row_array();
    }
}

        // public function getDataKaryawan()
        // {
        //     $this->db->select('user.*, user.username');
        //     $this->db->where('role', 'karyawan');
        //     $this->db->join('user', 'user.id = absen.id_karyawan', 'left');
        //     $query = $this->db->get('absen');
        //     return $query->result();
        // }
        // function get_absensi()
        // {
        //     $this->db->select('absen.*, user.username');
        //     $this->db->from('absen');
        //     $this->db->join('user', 'absen.id_karyawan = user.id', 'left');
        //     $query = $this->db->get();
        //     return $query->result();
        // }
        // public function getAbsensiLast7Days()
        // {
        //     $this->load->database();
        //     $end_date = date('Y-m-d');
        //     $start_date = date('Y-m-d', strtotime('-7 days', strtotime($end_date)));
        //     $query = $this->db->select('absen.*, user.nama_depan, user.nama_belakang, date, kegiatan, jam_masuk, jam_pulang, keterangan, status, COUNT(*) AS total_absences')
        //         ->from('absen')
        //         ->join('user', 'absen.id_karyawan = user.id', 'left')
        //         ->where('date >=', $start_date)
        //         ->where('date <=', $end_date)
        //         ->group_by('date, kegiatan, jam_masuk, jam_pulang, keterangan, status')
        //         ->get();
        //     return $query->result();
        // }
        // public function getbulanan($bulan)
        // {
        //     $this->db->from('absen');
        //     $this->db->where("DATE_FORMAT(absen.date, '%m') =", $bulan);
        //     $db = $this->db->get();
        //     $result = $db->result();
        //     return $result;
        // }
        // //utnuk mengambil semua data
        // public function get_harian()
        // {
        //     $this->db->select('absen.*, user.nama_depan, nama_belakang');
        //     $this->db->from('absen');
        //     $this->db->join('user', 'absen.id_karyawan = user.id', 'left');
        //     $this->db->where('date', date('Y-m-d'));
        //     $db = $this->db->get();
        //     return $db->result();
        // }
        // public function get_by_karyawan($table, $field, $id)
        // {
        //     $this->db->select('*');
        //     $this->db->from($table);
        //     $this->db->where($field, $id);
        //     $query = $this->db->get();
        //     return $query;  // Pastikan hasil query dikembalikan sebagai objek
        // }
        // public function get_izin($table, $id)
        // {
        //     return $this->db->where('id', $id)
        //         ->where('kegiatan', '-')
        //         ->get($table);
        // }
        // public function absensi($data)
        // {
        //     $this->db->insert('absen', $data);
        // }
        // public function getlast($table, $where)
        // {
        //     $this->db->select('*');
        //     $this->db->from($table);
        //     $this->db->where($where);
        //     $this->db->order_by('id', 'DESC');
        //     $this->db->limit(1);
        //     return $this->db->get()->row();
        // }
        // function get_karyawan()
        // {
        //     $this->db->select('absensi.*, user.nama_depan, user.nama_belakang');
        //     $this->db->from('absensi');
        //     $this->db->join('user', 'absensi.id_karyawan = user.id', 'left');
        //     $query = $this->db->get();
        //     return $query->result();
        // }
        ?>