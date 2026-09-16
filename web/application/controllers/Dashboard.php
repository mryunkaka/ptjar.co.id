<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct() //akan selalu dijalankan ketika akses controlel
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('global');
        periksa_login();
    }

    public function index()
    {
        $data['tabtitle'] = 'Dashboard';
        $data['title'] = 'Dashboard';
        $this->load->view('backend/template/main/main_header', $data);
        $this->load->view('backend/template/main/main_sidebar');
        $this->load->view('backend/main/dashboard/dashboard');
        $this->load->view('backend/template/main/main_footer');
    }

    public function get_budget_real()
    {
        $data = $this->Dashboard_model->get_report_by_coa();
        $returnData = array(
            'status' => true,
            'data' =>  $data,

        );
        echo json_encode($returnData);
    }
    public function get_report_insentif()
    {
        $data = $this->Dashboard_model->get_report_insentif();
        $returnData = array(
            'status' => true,
            'data' =>  $data,

        );
        echo json_encode($returnData);
    }
}
