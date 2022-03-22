<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rules_controller extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('form');
        $this->load->model('rules_model');
        //	$this->load->library('session');
        //	$this->load->library('form_validation');


        //$this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('loginuser');
    }


    public function logincheck()
    {
        //echo "Hello";exit;
        $email = $this->input->POST('email');
        // echo $email;exit;
        $password = $this->input->POST('password');
        $query = $this->db->get_where('userdata', ['email' => $email, 'password' => $password]);
        $try = $query->result_array();
        // print_r($x[0]['id']); exit;
        $result = sizeof($try);
        //echo "<pre>"; print_r($try); exit;
        if ($result == 0) {
            echo "<h3><center><div style ='color:red;'>Incorrect Email/Password</div></center></h3>";
            $this->load->view('loginuser');
        } 
        else {
            $data = array('id' => $try[0]['id'], 'email' => $email);
            //echo "<pre>"; print_r($data); exit;
            $this->session->set_userdata($data);

            redirect('showDataOfQuepage');
        }
    }


    public function displaydata()
    {
        $abc =  $this->session->userdata('user');
        if (empty($abc)) {
            redirect('index');
        } else {
           // $this->load->view('displaydata',$result);
        }
    }


    public function logout()
    {
        $this->load->view('loginuser');
    }


    public function quepage()
    {
        $this->load->view('quepage');
    }


    public function addpoints()
    {
        $data['data'] = $this->rules_model->getDataForAddpoints();
        // echo"<pre>";  print_r($data); exit;
        $this->load->view('addpoints', $data);
    }

    public function addpoint()
    {

        $data = array(
            'rule' => $this->input->post('rules'),
            'points' => $this->input->post('points'),
        );

        // echo "<pre>"; print_r($data);exit;
        $this->rules_model->insertrules($data);
        redirect("addpoints");
    }


    public function addque()
    {

        $sessionGetForId =  $this->session->userdata('id');
        // echo "<pre>"; print_r($abc); exit;
        $id_sel = $sessionGetForId;
        //echo $id_sel;
        $que = array(
            'schoolname' => $this->input->post('schoolname'),
            'petname' => $this->input->post('petname'),
            'cricketer' => $this->input->post('cricketer'),
            'userid' => $id_sel,
        );
        // echo "<pre>";print_r($que);exit;
        $this->rules_model->insertque($que);
        redirect("showDataOfQuepage");
    }

    public function showDataOfQuepage()
    {
        $data['file'] = $this->rules_model->getDataForQuepage();
       
        $r=$this->session->userdata('user');
      //echo"<pre>";  print_r($this->session->userdata()); exit;
        $data['done']= $this->rules_model->user($this->session->userdata('id'));
        
        $this->load->view('displaydata', $data);
    }


    public function storePost()
    {
        $x = $this->input->post('rules');
        $y = $this->input->post('points');
       $z = array_replace_recursive($x,$y);
        echo "<pre>";print_r($x);exit;

        if(!empty($z)){
            foreach ($z as $key => $value)
            {
                $this->db->insert('rules',$value);
            }
        }
   
      //  print_r('Record Added Successfully.');
        redirect('addpoints');
    }


       /*  public function buttonOfQue()
        {
            $result['done'] = $this->rules_model->user();
		} */
        
}
