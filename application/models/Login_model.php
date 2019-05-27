<?php
    class Login_model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
    

    public function inicioalumno($usuario, $password){
        $this->db->select('*');
        $this->db->from('alumno');
        $this->db->where('matricula', $usuario);
        $this->db->where('password', $password);
        $consulta = $this->db->get();
        $resultado = $consulta->row();

        if($resultado){
            return $resultado;
       }else{
              echo "<script>
              alert('Usuario y/o contraseña son incorrectos');
              window.location= 'iniciar_sesion'
              </script>";
       }
        
     }
     public function inicioprofesor($usuario, $password){
 
        $this->db->select('*');
        $this->db->from('profesor');
        $this->db->where('idprofesor', $usuario);
        $this->db->where('password', $password);
        $consulta = $this->db->get();
        $resultado = $consulta->row();

        if($resultado){
            return $resultado;
       }else{
            echo "<script>
            alert('Usuario y/o contraseña son incorrectos');
            window.location= 'iniciar_sesion'
            </script>";
       }
        
     }
     public function materias($idprofesor){
        $query = "SELECT * from cargaprofesor where idprofesor = '$idprofesor'";
            $sql = $this->db->query($query);
            return $sql->result_array();
     }
    }
?>