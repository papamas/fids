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
		$this->load->library('form_validation');
		$this->load->library('DX_Auth');			
		$this->load->helper('url');
		
		$this->load->helper('form');  
		$this->config->load('asuransi');
		$this->load->model('welcome_model');
		
    }
	   
	   
	public function index()
	{
		if(!$this->dx_auth->is_logged_in()){
		  // Redirect to homepage
		  redirect('', 'location');
		}
		
		$data['title'] = $this->config->item('sistem_title')." :: Dashboard";
		$data['footer_title'] = $this->config->item('sistem_footer');
		$data['role_name'] = $this->dx_auth->get_role_name();
		$data['profile'] = $this->dx_auth->get_profile()->row();
		$data['header_app'] = $this->load->view('welcome/header_app',$data);
		$data['harta_benda'] = $this->welcome_model->pendapatan_treaty('1')+$this->welcome_model->pendapatan_fakultatif('1');
		$data['kendaraan_bermotor'] = $this->welcome_model->pendapatan_treaty('2')+$this->welcome_model->pendapatan_fakultatif('2');
		$data['pengangkutan'] = $this->welcome_model->pendapatan_treaty('3')+$this->welcome_model->pendapatan_fakultatif('3');
		$data['rangka_kapal'] = $this->welcome_model->pendapatan_treaty('4')+$this->welcome_model->pendapatan_fakultatif('4');
		$data['rangka_pesawat'] = $this->welcome_model->pendapatan_treaty('5')+$this->welcome_model->pendapatan_fakultatif('5');
		$data['satelit'] = $this->welcome_model->pendapatan_treaty('6')+$this->welcome_model->pendapatan_fakultatif('6');
		$data['energi'] = $this->welcome_model->pendapatan_treaty('7')+$this->welcome_model->pendapatan_fakultatif('7');
		$data['rekayasa'] = $this->welcome_model->pendapatan_treaty('8')+$this->welcome_model->pendapatan_fakultatif('8');
		$data['tanggung_gugat'] = $this->welcome_model->pendapatan_treaty('9')+$this->welcome_model->pendapatan_fakultatif('9');
		$data['kecelakaan'] = $this->welcome_model->pendapatan_treaty('10')+$this->welcome_model->pendapatan_fakultatif('10');
		$data['kredit'] = $this->welcome_model->pendapatan_treaty('11')+$this->welcome_model->pendapatan_fakultatif('11');
		$data['suretyship'] = $this->welcome_model->pendapatan_treaty('12')+$this->welcome_model->pendapatan_fakultatif('12');
		$data['aneka'] = $this->welcome_model->pendapatan_treaty('13')+$this->welcome_model->pendapatan_fakultatif('13');
		$tahun_treaty = $this->welcome_model->tahun_treaty()->result();
		$tahun_fakultatif = $this->welcome_model->tahun_fakultatif()->result();			
		foreach($tahun_treaty as $key => $value){
			if(in_array($value,$tahun_fakultatif)){
				 unset($tahun_treaty[$key]);
			}
		
		}
		
        $data['tahun']= array_merge($tahun_treaty, $tahun_fakultatif);		
        $data['map'] = json_encode(array_merge($tahun_treaty, $tahun_fakultatif));
		$data['content'] = $this->load->view('welcome/content_view',$data); 
		$data['menu'] = $this->load->view('welcome/menu_view'); 		
		$data['footer_app'] = $this->load->view('welcome/footer_app'); 
		
		
		$this->load->view('welcome/welcome_view',$data);
	}
	
	
	
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */