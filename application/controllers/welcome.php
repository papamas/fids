<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 
	 */
	 
	  public function __construct()
    {
        parent::__construct();
		$this->load->library(array('form_validation'));				
		$this->load->helper(array('url','form'));		
		$this->load->model('cd_model');
    }
	
	public function index()
	{
		
		$data['list_cd'] = $this->cd_model->all()->result();
		$data['link'] = site_url()."/welcome/edit_cd?id";
		$this->load->view('welcome_message',$data);
	}
	
	public function edit_cd(){
	
	 
	 $cd= $this->cd_model->get_cd_by_id($this->input->get('id'));
	 $data['list_cd'] = $this->cd_model->all()->result();
	 $data['link'] = site_url()."/welcome/edit_cd?id";
	 $data['cd'] = $cd->row();
	 $this->load->view('welcome_message1',$data); 
	
	
	}
	
	public function save(){
	
	$data = array('interpret' => $this->input->post('artis'),
	              'titel' => $this->input->post('title'),
				  'jahr' => $this->input->post('year'),
	
	             );
				 
	$this->cd_model->save($data);	
	$data['list_cd'] = $this->cd_model->all()->result();
	$data['link'] = site_url()."/welcome/edit_cd?id";
	$this->load->view('welcome_message',$data);	 
	}
	
    public function update() {
	
	 
	 $data = array('interpret' => $this->input->post('artis'),
	              'titel' => $this->input->post('title'),
				  'jahr' => $this->input->post('year'),
	
	             );
				 
	$this->cd_model->update($data,$this->input->post('id'));	
	$data['list_cd'] = $this->cd_model->all()->result();
	$data['link'] = site_url()."/welcome/edit_cd?id";
	$this->load->view('welcome_message',$data);	 
	
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */