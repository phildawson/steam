<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->view('news/index');
	}

	public function item()
	{
		$this->load->view('news/item');
	}

}