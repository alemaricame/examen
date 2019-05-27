<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
   public function __construct() {
      parent::__construct();
      $this->removeCache();
      $this->load->model('Login_model');
      $this->load->model('Prof_model');

   }

  
   public function removeCache(){
   $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
   $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
   $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
   $this->output->set_header('Pragma: no-cache');
   }
   public function iniciar_sesion() {
      if($this->session->userdata('logueado')){
         //redirect('index.php/usuarios/logueado');
         $this->logueado();
      }
      else{
         $this->load->view('login');
      }
   }
   public function iniciar_sesion_post() {
      if($this->session->userdata('logueado')){
         redirect('index.php/login/logueadoprofesor');
      }else{
      if ($this->input->post()) {
       $tipo = $this->input->post('user');
       $usuario = $this->input->post('usuario');
       $password = $this->input->post('password');

       if($tipo=="profesor"){
         $result=$this->Login_model->inicioprofesor($usuario,$password);

            if($result){
               $result_data=array(
                  'idprofesor'=>$result->idprofesor,
                  'nombre'=>$result->nombre,
                  'password'=>$result->password,
                  'logueado'=>TRUE
               );
               $this->session->set_userdata($result_data);
               
               $this->logueadoprofesor();
            }else{
               echo 'error';
            }
         }else{
            if($tipo=="alumno"){
               $result=$this->Login_model->inicioalumno($usuario,$password);

               if($result){
                  $this->logueadoalumno();
               }else{
      
               }
            }
       }
      }else{
         $this->iniciar_sesion(); 
      }
   
   }
   }

   public function logueadoprofesor(){
      $datos = $this->session->userdata();

      $this->load->view('perfil_prof',$datos);
   }
   
   public function logueadoalumno(){
      $this->load->view('perfil_alum');
   }
   public function materias(){
      $idprofesor = $this->session->userdata('idprofesor');
      $result=$this->Login_model->materias($idprofesor);
      echo json_encode($result);
   }
   public function altamateria(){
      $idprofesor = $this->session->userdata('idprofesor');
      $idmateria = $this->input->post('idmateria');
      $nombre = $this->input->post('nombremat');
      $idgrupo = $this->input->post('idgrupo');

      $result = $this->Prof_model->alta($idprofesor,$idmateria,$nombre,$idgrupo);

      if($result){
         echo "<script>
          alert('Guardado');
          </script>";
      }else{
         echo "<script>
          alert('Error al guardar');
          </script>";
      }

   }      
}

