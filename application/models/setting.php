<?php
class Setting extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function update($params){
        $sql = "update settings set kodeperusahaan= '".$params["kodeperusahaan"]."',matauang= '".$params["matauang"]."' ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $sql;
    }    
    function getcurrentyear(){
        $sql = "select currentyear from settings  ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result()[0]->currentyear;
    }
    function getdata(){
        $sql = "select id,kodeperusahaan,matauang,totaldata,";
        $sql.= "totalnominal,tanggalefektifad,filler from settings ";
        $que = $this->db->query($sql);
        $res = $que->result();
        return $res[0];
    }
}