<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function __construct()
    {

        parent::__construct();

    }

     public function userExist($email)
    {

        $qry = $this->db->query("SELECT *  from users where email = '" . $email . " ' ");

        $rs = $qry->result_array();

        return $rs[0];

    }

 public function checkDuplicate($email)
    {

        $this->db->select('email');

        $this->db->from('users');

        $this->db->like('email', $email);

        return $this->db->count_all_results();

    }








    public function get($nombre = false)
    {

        if ($nombre === false) {

            $this->db->order_by('id', 'asc');

            $query = $this->db->get('users');

            return $query->result_array();

        }

        $this->db->order_by('id', 'asc');

        $query = $this->db->get_where('users', array('nombre' => $nombre));

        return $query->result_array();

    }

    public function get_user_id($id)
    {

        $this->db->where('id', $id);

        $query = $this->db->get('users');

        return $query->result_array();

    }

     public function get_modulo()
    {

        
        $query = $this->db->get('tbl_modulo');

        return $query->result_array();

    }

    public function guardar_permisos() {
        $dateTime = new DateTime('now', new DateTimeZone('America/Bogota'));

    
    $idmodulo = $this->input->post('id_modulo');
    $new=$this->input->post('new');
    $edit=$this->input->post('edit');
    $delet=$this->input->post('delet');
    $query=$this->input->post('query');
    $apro=$this->input->post('apro');

//----------------------------------------------------------
for ($i = 0; $i <count($idmodulo);$i++) 
        {
        if (empty($new[$i]) ) {$new[$i]=0;}
        if (empty($edit[$i]) ) {$edit[$i]=0;}
        if (empty($delet[$i]) ) {$delet[$i]=0;}
        if (empty($query[$i]) ) {$query[$i]=0;}
        if (empty($apro[$i]) ) {$apro[$i]=0;}



     //   echo "<br>". $new[$i]. "-". $idmodulo[$i] ;
     //   echo "*". $edit[$i]. "-". $idmodulo[$i] ;
      //  echo "*". $delet[$i]. "-". $idmodulo[$i] ;
     //   echo "*". $query[$i]. "-". $idmodulo[$i] ;
      //  echo "*". $apro[$i]. "-". $idmodulo[$i] ;

        $campos = array(
            'id_usuario'=> '8431644',
            'id_rol'=> $this->session->rol,
            'id_modulo'=> $idmodulo[$i],
            'nuevo'=> $new[$i],
            'modificar'=>$edit[$i],
            'eliminar'=>$delet[$i],
            'consultar'=>$query[$i],
            'aprobar'=>$apro[$i],
            'usuario_modificacion'=>$this->session->nombre,
            'fecha_actualizacion' => $dateTime ->format("Y-m-d  H:i:s ")         
            );
        $this->db->insert('tbl_permiso',$campos);
    }
            
    }

   

    public function insertUser($data)
    {

        if ($this->db->insert('users', $data)) {

            return $this->db->insert_id();

        } else {

            return false;

        }

    }

   

    public function actualizar_usuario($id, $first_name, $last_name, $email, $rol, $estado)
    {

        $data = array(

            'first_name' => $first_name,

            'last_name'  => $last_name,

            'email'      => $email,

            'rol'        => $rol,

            'estado'     => $estado,

        );

        $this->db->where('id', $id);

        return $this->db->update('users', $data);

    }

    public function actualizar_contrasena($id, $hashPassword)
    {

        $data = array(

            'password' => $hashPassword,

        );

        $this->db->where('id', $id);

        return $this->db->update('users', $data);

    }

    public function delete($id)
    {

        $this->db->where('id', $id);

        $this->db->delete('users');

        if ($this->db->affected_rows() > 0) {

            return true;

        } else {

            return false;

        }

    }

    //funtion to get email of user to send password

    public function RecuperarPassword($email)
    {

        $this->db->select('email');

        $this->db->from('users');

        $this->db->where('email', $email);

        $query = $this->db->get();

        return $query->row_array();

    }



    public function sendpassword($data)
    {

        $email = $data['email'];

        $query1 = $this->db->query("SELECT *  from users where email = '" . $email . "' ");

        $row = $query1->result_array();

        if ($query1->num_rows() > 0) {

            $passwordplain = "";

            $passwordplain = rand(999999999, 9999999999);

            $options = array("cost" => 4);

            $hashPassword = password_hash($passwordplain, PASSWORD_BCRYPT, $options);

            $newpass['password'] = $hashPassword;

            $this->db->where('email', $email);

            $this->db->update('users', $newpass);

            //cargamos la libreria email de ci

            $this->load->library("email");

            //configuracion para gmail

            $configGmail = array(

                'protocol'  => 'smtp',

                'smtp_host' => 'ssl://smtp.gmail.com',

                'smtp_port' => 465,

                'smtp_user' => 'solucionentic@gmail.com',

                'smtp_pass' => '123*.qaz',

                'mailtype'  => 'html',

                'charset'   => 'utf-8',

                'newline'   => "\r\n",

            );

            //cargamos la configuración para enviar con gmail

            $this->email->initialize($configGmail);

            $this->email->from('solucionentic@gmail.com');

            $this->email->to($email);

            $this->email->subject('Restablecimiento de Contraseña Gestión de Ventas MUSA');

            $this->email->message('Gracias por Contactarnos ,<br> Su Nueva <b> Contraseña de acceso: </b> es <b>' . $passwordplain);

            $this->email->send();

            //con esto podemos ver el resultado

            $data['mensaje_error'] = 'Tu Nueva Contraseña se envío con éxito al correo ' . $email;

            //var_dump($this->email->print_debugger());

            $this->load->view('recuperar', $data);

        }

    }

}
