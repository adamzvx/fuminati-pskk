<?php

/**
 * 
 */
class Atur_model extends CI_Model
{
    // function __construct(argument)
    // {
    // 	# code...
    // }
    function isi($user)
    {
        //isi admin
        $query = $this->db->query("SELECT * FROM adm WHERE username = '$user' LIMIT 1");
        return $query;
    }
    // function getall()
    // {
    //     // $query = $this->db->query("SELECT * FROM `99user` WHERE  statusd =1 ORDER BY id DESC");
    //     $query = $this->db->query("SELECT * FROM `99user`  ORDER BY id DESC");
    //     return $query;
    // }
    function getsemuamahasiswa()
    {
        // $query = $this->db->query("SELECT * FROM `99user` WHERE  statusd =1 ORDER BY id DESC");
        $query = $this->db->query("SELECT * FROM `99mhs`  ORDER BY id DESC");
        return $query;
    }

    function getnoref()
    {
        $query =  $this->db->query("SELECT * FROM `user` WHERE  statusd =0 ORDER BY id DESC");
        return $query;
    }

    function getref()
    {
        // $query =  $this->db->query("SELECT * FROM `user` WHERE NOT ref = '' AND statussd =0");
        $query =  $this->db->query("SELECT * FROM `daftar` WHERE NOT ref = '' AND status =0 ORDER BY id DESC");
        return $query;
    }


    function getref2($id)
    {
        // $query =  $this->db->query("SELECT * FROM `user` WHERE NOT ref = '' AND status =0");
        $query =  $this->db->query("SELECT * FROM `daftar` WHERE id =$id");
        return $query;
    }



    function updateref($ref)
    {
        //UPDATE `user` SET `saldo`= +25000, `statusd`=1 WHERE kode_ref = 'adm';
        //UPDATE `user` SET `statusd`=1 WHERE username = 'agung1';
        // $ref = $this->db->query("SELECT ref FROM `user` WHERE `user` = '$user'");
        // return $ref;

        $query = $this->db->query("UPDATE `user` SET `saldo`= `saldo` + 25000,`point`=`point`+1 WHERE kode_ref = '$ref'");
        return $query;
    }
    function updateuser($user)
    {
        //UPDATE `user` SET `saldo`= +25000, `statusd`=1 WHERE kode_ref = 'adm';
        //UPDATE `user` SET `statusd`=1 WHERE username = 'agung1';
        $query = $this->db->query("UPDATE `user` SET `statusd`=1 WHERE username = '$user'");
        return $query;
    }

    function updateuserd($id)
    {
        //UPDATE `user` SET `saldo`= +25000, `statusd`=1 WHERE kode_ref = 'adm';
        //UPDATE `user` SET `statusd`=1 WHERE username = 'agung1';
        $query = $this->db->query("UPDATE `daftar` SET `status`=1 WHERE id = '$id'");
        return $query;
    }

    //////////WITHDRAW//////////
    function getwd()
    {
        $query =  $this->db->query("SELECT * FROM `wd` WHERE  status =0 ORDER BY id DESC");
        return $query;
    }
    function getwdall()
    {
        $query =  $this->db->query("SELECT * FROM `wd` WHERE  status =1 ORDER BY id DESC");
        return $query;
    }

    //AMBIL USER Withdraw menurut id
    function getwd2($id)
    {
        $query = $this->db->query("SELECT * FROM `wd` WHERE id = $id");
        return $query;
    }
    function prowd($id)
    {
        $query = $this->db->query("UPDATE `wd` SET `status`=1 WHERE id='$id' ");
        return $query;
    }

    function prowdsaldo($user, $saldowd)
    {
        $query = $this->db->query("UPDATE `user` SET `saldo`= `saldo`-'$saldowd' WHERE username = '$user' ");
        return $query;
    }

    function updatewd($value = '')
    {
        # code...
    }

    function riwayatwd($value = '')
    {
        $query =  $this->db->query("SELECT * FROM `wd` WHERE  status =1");
        return $query;
    }
}
