<?php

class ancien_c extends CI_Controller
{
    public function affichage()
    {
       $message='fichier calcul ancien';
       $data["message"]=$message;

       $this->load->model('ancien_m'); 

       $calcul_ancien = $this->ancien_m->calcul_ancien();
       $data["calcul_ancien"]=$calcul_ancien;
   


       $calcul_page = $this->ancien_m->calcul_page($calcul_ancien);
            $data ["calcul_page"]=$calcul_page;

           $this->load->view('test',$data);

       
    }

    public function liste_ancien(){

       $this->load->helper('url');
       $message='liste ancien ';
       $data["message"]=$message;

       $this->load->model('ancien_m'); 

       $calcul_ancien = "";
       $data["calcul_ancien"]=$calcul_ancien;
   
       $calcul_page = "";
       $data ["calcul_page"]=$calcul_page;

       $result = $this->ancien_m->getAll();
 
       $data["req"]=$result;
      // print_r($result);

       $this->load->view('test',$data);


    }
}
?>