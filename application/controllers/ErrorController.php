<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once getenv('DOLIBARR_APP'). 'master.inc.php';
require_once getenv('DOLIBARR_APP'). '/categories/class/categorie.class.php';
class ErrorController extends CI_Controller
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('form_validation');
		global  $dolibarr_main_url_root, $conf, $db, $mysoc;
		$categstatic = new Categorie($db);
		$menu = $categstatic->get_full_arbo('product', 31, 1);
		$this->smarty->assign('base_url', base_url());
		$this->smarty->assign('menu', $menu);
		$this->smarty->assign('mysoc', $mysoc);
		$this->smarty->assign('bs5_extra_class', $bs5_extra_class = null);
		$this->smarty->assign('dol_url_root', $dolibarr_main_url_root);
	}
	public function error_401()
	{
	}

	public function error_404()
	{
		$this->smarty->assign('error', '404');
		$this->smarty->view('error.tpl');
	}

	public function error_500()
	{
	}
}
