<?php
class Test_model extends CI_model{

  

    function all()
    {
       return $m_ujian = $this->db->get('m_ujian')->result_array(); //SELECT * FROM m_ujian


    }


}


?>