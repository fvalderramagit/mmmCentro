<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SitioWeb extends CI_Controller {

	
	public function inde()
	{
        $this->load->view('SitioWeb/layouts/head');
        $this->load->view('SitioWeb/layouts/head');
		$this->load->view('SitioWeb/sitioWeb');
        $this->load->view('SitioWeb/layouts/footer');
	}
    
    public function inicio()
	{
        $this->load->view('SitioWeb/layouts/head');
        $this->load->view('SitioWeb/includes/barraSocial-volver');
		$this->load->view('SitioWeb/inicio');
        $this->load->view('SitioWeb/layouts/footer');
	}
    
    public function escuelaDominical()
    {
        $this->load->view('SitioWeb/layouts/head');
        $this->load->view('SitioWeb/includes/barraSocial-volver');
		$this->load->view('SitioWeb/escuelaDominical');
        $this->load->view('SitioWeb/layouts/footer');
    }

    public function jovenes()
    {
        $this->load->view('SitioWeb/layouts/head');
        $this->load->view('SitioWeb/includes/barraSocial-volver');
		$this->load->view('SitioWeb/jovenes');
        $this->load->view('SitioWeb/layouts/footer');
    }

    public function adolecentes()
    {
        $this->load->view('SitioWeb/layouts/head');
        $this->load->view('SitioWeb/includes/barraSocial-volver');
		$this->load->view('SitioWeb/adolecentes');
        $this->load->view('SitioWeb/layouts/footer');
    }
    
    public function historia()
    {
        $this->load->view('SitioWeb/layouts/head');
		$this->load->view('SitioWeb/historia');
        $this->load->view('SitioWeb/layouts/footer');
    }
 
 
}

