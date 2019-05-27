<?php
    class Prof_model extends CI_Model{
        public function __construct(){
            parent::__construct();
        }
    

    public function alta($idprofesor,$idmateria,$nombre,$idgrupo){
        //Alta materia
        $data = array( 
            'idmateria'=>$idmateria , 
            'nombre'=>$nombre, 
        );
        $result = $this->db->insert('materia', $data);
       if($result){
        //Alta profesor materia
        $data = array(
            'idprofesor'=>$idprofesor, 
            'idmateria'=>$idmateria , 
            'idprofesormateria'=>4, 
        );
        $resultpm = $this->db->insert('profesormateria', $data);
        if($resultpm){
        //Alta grupo
        $data = array( 
            'idmateria'=>$idmateria , 
            'idgrupo'=>$idgrupo, 
        );
        $resultg = $this->db->insert('grupo', $data);
        if($resulg){
        //carga profesor
        $data = array( 
            'idprofesor'=>$idprofesor, 
            'idmateria'=>$idmateria, 
            'idgrupo' => $idgrupo
        );
        $resultcp = $this->db->insert('cargaprofesor', $data);
        }else{//grupo
            echo "<script>
            alert('Error al insertar grupo');
            </script>";
        }
        }else{//profesormateria
            echo "<script>
            alert('Error al insertar profesormateria');
            </script>";
        }
       }else{ //materia
        echo "<script>
        alert('Error al insertar materia');
        </script>";
       }
    }


    public function alumnos(){

    }

}
?>