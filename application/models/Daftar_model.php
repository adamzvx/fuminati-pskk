<?php

/**
 * 
 */
class Daftar_model extends CI_Model
{
    // function __construct(argument)
    // {
    // 	# code...
    // }

    function cek_user($user)
    {
        $query = $this->db->query("SELECT username FROM user WHERE username = '$user' LIMIT 1 ");
        return $query;
    }

    function proses($nama,  $email, $instansi, $produk, $kat)
    {
        $query = $this->db->query("INSERT INTO user(nama,email,instansi,produk,kat) VALUES ('$nama','$email','$instansi','$produk','$kat')");
        return $query;
    }

    function getuser($id) //belum terkonfirmasi
    {
        // $query = $this->db->query("SELECT * FROM `99user` WHERE  statusd =1 ORDER BY id DESC");
        $query = $this->db->query("SELECT * FROM `user` WHERE id = '$id'");
        return $query;
    }

    function edituser($id, $nama,  $email, $instansi, $produk, $kat)
    {
        // $query = $this->db->query("INSERT INTO user(nama,email,instansi,produk,kat) VALUES ('$nama','$email','$instansi','$produk','$kat')");
        $query = $this->db->query("UPDATE `user` SET `nama`='$nama',`email`='$email',`instansi`='$instansi',`produk`='$produk',`kat`='$kat' WHERE `id`='$id'");
        return $query;
    }

    function getallu() //belum terkonfirmasi
    {
        // $query = $this->db->query("SELECT * FROM `99user` WHERE  statusd =1 ORDER BY id DESC");
        $query = $this->db->query("SELECT * FROM `user` WHERE ket=0 ORDER BY id DESC");
        return $query;
    }

    function getalluk() //sudah terkonfirmasi
    {
        // $query = $this->db->query("SELECT * FROM `99user` WHERE  statusd =1 ORDER BY id DESC");
        $query = $this->db->query("SELECT * FROM `user` WHERE ket=1 ORDER BY id DESC");
        return $query;
    }





    function updateket($id) // update status konfirmasi
    {
        //UPDATE `user` SET `saldo`= +25000, `statusd`=1 WHERE kode_ref = 'adm';
        //UPDATE `user` SET `statusd`=1 WHERE username = 'agung1';
        $query = $this->db->query("UPDATE `user` SET `ket`=1 WHERE id = '$id'");
        return $query;
    }

    function hapus($id) //hapus user
    {
        //UPDATE `user` SET `saldo`= +25000, `statusd`=1 WHERE kode_ref = 'adm';
        //UPDATE `user` SET `statusd`=1 WHERE username = 'agung1';
        $query = $this->db->query("DELETE FROM `user` WHERE id = $id");
        return $query;
    }








    function proses2($user, $ref, $tgl)
    {
        $query = $this->db->query("INSERT INTO daftar(username,ref,tgl) VALUES ('$user','$ref','$tgl')");
        return $query;
    }

    function adm($user, $pass)
    {
        $query = $this->db->query("INSERT INTO adm(username,pass) VALUES ('$user','$pass')");
        return $query;
    }

    function cek_ref($ref)
    {
        $query = $this->db->query("SELECT kode_ref FROM user WHERE kode_ref = '$ref' LIMIT 1 ");
        return $query;
    }

    // function cek_guru($user,$pass)
    // {
    // 	$query = $this -> db -> query("SELECT * FROM guru WHERE nip = '$user' AND pass='$pass' LIMIT 1");
    // 	return $query;
    // }

    // function cek_murid($user,$pass)
    // {
    // 	$query = $this -> db -> query("SELECT * FROM murid WHERE nis='$user' AND pass='$pass'LIMIT 1");
    // 	return $query;
    // }
}
