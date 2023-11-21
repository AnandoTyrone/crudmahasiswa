<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Mahasiswa_model_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Mahasiswa_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function getMahasiswa($id= null)
  {
    if($id == null){
      return $this->db->get('mahasiswa')->result_array();
    }
    else{
      return $this->db->get_where('mahasiswa',['id_mhs' =>$id])->result_array();
    }
    
   
  }
 public function index()
  {
 
  }

  // ------------------------------------------------------------------------

}

/* End of file Mahasiswa_model_model.php */
/* Location: ./application/models/Mahasiswa_model_model.php */