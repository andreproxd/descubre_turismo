<<<<<<< HEAD
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Restaurantes extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/restaurantes/restaurantes_list'; 
        $this->load->view('admin/index',$data);
    }

=======
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Restaurantes extends CI_Controller {
 
  function __construct() {
    parent::__construct();
        $this->load->helper('url');
  }
   public function index() {
        $data['content'] = 'application/views/admin/admin/form'; 
        $this->load->view('admin/index',$data);
    }

}