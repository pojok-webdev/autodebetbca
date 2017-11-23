<?php
class User extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function changepassword($userid,$password){
        $pass = $this->createpassword($password);
        $sql = "update users set ";
        $sql.= "salt='".$pass['salt']."',";
        $sql.= "password='".$pass['password']."' ";
        $sql.= "where id='".$userid."'";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return true;
    }
    function createpassword($upassword){
        $salt = random_string("alnum");
        $salted = $upassword.$salt;
        return array("salt"=>$salt,"password"=>hash("sha256",$salted));
    }
    function getUser($id){
        $sql = "select a.id,a.nname,a.password,a.email from users a ";
        $sql.= "where a.id=".$id;
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result()[0];
    }
    function getUsers(){
        $sql = "select a.id,a.nname,a.password,a.email from users a " ;
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $que->result();
    }
    function login($email,$password){
        $sql = "select id,nname,email,salt,password from users where email='".$email."' ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        $res = $que->result();
        if($que->num_rows()>0){
        $salted = $password.$res[0]->salt;
            if($res[0]->password===hash("sha256",$salted)){
                return array("message"=>"password benar","username"=>$res[0]->nname,"userid"=>$res[0]->id);
            }
            else{
                return array("message"=>"password tidak cocok");
            }
        }else{
            return array("message"=>"email tidak dikenali");
        }
    }
    function remove($id){
        $sql = "delete from users where id=".$id;
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $sql;
    }
    function save($params){
        $upassword = $this->createpassword($params["password"]);
        $sql = "insert into users (nname,email,password,salt,createuser) ";
        $sql.= "values ";
        $sql.= "(";
        $sql.= "'".$params['nname']."',";
        $sql.= "'".$params['email']."',";
        $sql.= "'".$upassword["password"]."',";
        $sql.= "'".$upassword["salt"]."',";
        $sql.= "'".$_SESSION["username"]."'";
        $sql.= ") ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $ci->db->insert_id();
    }
    function update($params){
        $sql = "update users set nname= '".$params["nname"]."',email='".$params["email"]."' ";
        $sql.= "where ";
        $sql.= "id='".$params['id']."' ";
        $ci = & get_instance();
        $que = $ci->db->query($sql);
        return $sql;
    }
    function getrole(){
        return "1";
    }
}