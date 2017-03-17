<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data = array();

        // Initialize all view contents to the data array
        $data['head'] = $this->load->view('theme/head', '', TRUE);
        $data['header'] = $this->load->view('theme/header', '', TRUE);
        $data['footer'] = $this->load->view('theme/footer', '', TRUE);
        $data['foot'] = $this->load->view('theme/foot', '', TRUE);

        $data['view_contents'] = $this->load->view('home_contents', $data, TRUE);

        // Call method to show home screen
        $this->load->view('home', $data);
    }
}