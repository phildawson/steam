<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->view('news/index');
	}

	public function month()
	{
		$this->load->view('news/month');
	}

	public function item()
	{
		$this->load->view('news/item');
	}

	public function conflict()
	{
		// this one should be the newer version
		$this->load->view('news/conflict');
	}
}