<?php

    class Cindex extends CI_Controller{
        
        function tampil(){
            $this->load->view('index');
        }

        function dashboard(){
            $this->load->view('admin/vadmin');
        }
    }

?>