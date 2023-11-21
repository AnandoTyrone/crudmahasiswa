<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller MahasiswaController
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */
require APPPATH.'libraries/RestController.php';
require APPPATH.'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class MahasiswaController extends RestController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model','mahasiswa');
  }
  public function index_get()
  {
    $mahasiswa = $this->mahasiswa->getMahasiswa();
    $id = $this->get('id_mhs');
      if($id == null){
      $mahasiswa = $this->mahasiswa->getMahasiswa();
      }
      else{
        $mahasiswa =$this->mahasiswa->getMahasiswa($id);
      }
    if($mahasiswa){
      $this->response([
        'status'=>true,
        'data' =>$mahasiswa
    ],RestController::HTTP_OK);
    }
    else{
      $this->response([
        'status'=>false,
        'message' =>'id not found'
    ],RestController::HTTP_NOT_FOUND);
    }
  }
}


/* End of file MahasiswaController.php */
/* Location: ./application/controllers/MahasiswaController.php */