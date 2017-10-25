<?php
class User_model extends CI_Model {
    public function __construct(){
        $this->load->database();
    }

    public function register($enc_password,$post_image){
        $name=$this->input->post('name');
        $username=$this->input->post('username');
        $email=$this->input->post('email');
        $zipcode=$this->input->post('zipcode');
        $password=$enc_password;


        $data=array(
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'zipcode'=>$zipcode,
            'username'=>$username,
            'profile_image'=>$post_image
        );

        return $this->db->insert('users',$data);
    }
    public function login($username,$password){




        $result=$this->db->query('SELECT * FROM users WHERE username=\''.$username.'\'AND password=\''.$password.'\';');


        if($result->num_rows()==1){
           return $result->result_array()[0]['id'];
        }
        else{
            return false;
        }

    }
    public function get_information_user($user_id){
        $result=$this->db->query('SELECT * FROM users WHERE id=\''.$user_id.'\';');

       return $result->result_array()[0];
    }


    public function check_username_exists($username){

        $query=$this->db->get_where('users',array('username'=>$username));




        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }

    public function check_email_exists($email){
        $query=$this->db->get_where('users',array('email'=>$email));




        if(empty($query->row_array())){
            return true;
        }else{
            return false;
        }
    }
}