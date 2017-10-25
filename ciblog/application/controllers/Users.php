<?php
class Users extends CI_Controller {
   public function register(){



       $data['title']='Sign Up';

       $this->form_validation->set_rules('name','Name','required');
       $this->form_validation->set_rules('username','Username','required|callback_check_username_exists');
       $this->form_validation->set_rules('email','Email','required|callback_check_email_exists');
       $this->form_validation->set_rules('password','Password','required');
       $this->form_validation->set_rules('password2','Password2','matches[password]');


       if($this->form_validation->run()===FALSE){
           $this->load->view('templates/header');
           $this->load->view('user/register',$data);
           $this->load->view('templates/footer');
       }else{
           $enc_password=md5($this->input->post('password'));

           $config['upload_path']='./assets/images/profile';
           $config['allowed_types']='gif|jpg|png';
           $config['max_size']='5000';
           $config['max_width']='2000';
           $config['max_height']='2000';

           $this->load->library('upload',$config);

           if(!$this->upload->do_upload()){
               $errors=array('error'=>$this->upload->display_errors());
               $post_image='noimage.jpg';
           }
           else{
               $data=array('error'=>$this->upload->data());
               $post_image=$_FILES['userfile']['name'];
           }





           $this->session->set_flashdata('user_register','You are now registered and can log in ');

           $this->user_model->register($enc_password,$post_image);
           redirect('/');
       }
   }

   public function logout(){
       $this->session->unset_userdata('logged_in');
       $this->session->unset_userdata('user_id');
       $this->session->unset_userdata('username');

       $this->session->set_flashdata('user_loggedout','You are now log out ');

       redirect('users/login');

   }

    public function login(){



        $data['title']='Login Up';


        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');



        if($this->form_validation->run()===FALSE){
            $this->load->view('templates/header');
            $this->load->view('user/login',$data);
            $this->load->view('templates/footer');
        }else{


            $username=$this->input->post('username');
            $password=md5($this->input->post('password'));


            $user_id=$this->user_model->login($username,$password);





          if($user_id){

              $user_data=array(
                  'user_id'=>$user_id,
                  'username'=>$username,
                  'logged_in'=>true
              );

              $this->session->set_userdata($user_data);

                $this->session->set_flashdata('user_loggedin','You are now login ');

              redirect('posts');


            }else{
                $this->session->set_flashdata('login_failed','logig is fail! ');
                redirect('users/login');
            }

        }
    }

    public function check_username_exists($username){


       $this->form_validation->set_message('
       check_username_exists','That username is taken.Please choose a different one');

       if($this->user_model->check_username_exists($username)){
           return true;
       }else{
           return false;
       }
   }

   public function check_email_exists($email){
       $this->form_validation->set_message('
       check_email_exists','That email is taken.Please choose a different one');

       if($this->user_model->check_email_exists($email)){
           return true;
       }else{
           false;
       }
   }

   public function profile(){

       $user_id=$this->session->userdata('user_id');

       $user= $this->user_model->get_information_user($user_id);

       $data['user']=$user;



       $this->load->view('templates/header');
       $this->load->view('user/profile',$data);
       $this->load->view('templates/footer');

   }



}