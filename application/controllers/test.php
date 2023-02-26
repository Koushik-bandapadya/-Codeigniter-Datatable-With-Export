<?php
class Test extends CI_Controller{

//   function __construct()
//     {
//         parent::__construct();
   
//         $this->load->model('Test_model');

//     } 
  
  function index()
    {
        $this->load->model('Test_model');
        $m_ujian = $this->Test_model->all();
        $data = array();
        $data['m_ujian'] = $m_ujian;
        $this->load->view('h.php',$data);
        
        
    
    }


    function pp(){

 
      
      $this-> load -> view('h.php');





    }

    function export(){

 
      
      $this-> load -> view('export.php');





    }


    function exportWithEdit(){

 
      
      $this-> load -> view('exportWithEdit.php');

    }

    function tableex(){

 
      
      $this-> load -> view('tableex.php');

    }




}
?>