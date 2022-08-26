<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once  getenv('DOLIBARR_APP') . 'master.inc.php';
require_once  getenv('DOLIBARR_APP').'product/class/product.class.php';
require_once  getenv('DOLIBARR_APP') . '/categories/class/categorie.class.php';

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		
		global  $dolibarr_main_url_root,$conf,$db, $mysoc;
		// echo '<pre>';var_dump($mysoc);exit;
		//modulepart=mycompany&file=logos/background_dolibarr.jpg
		// $product =  new Product($db);
		// $product->fetch(32);

		// if (!empty($conf->product->enabled)) {
		// 	$upload_dir = $conf->product->multidir_output[$product->entity] . '/' . get_exdir(0, 0, 0, 1, $product, 'product');
		// } elseif (!empty($conf->service->enabled)) {
		// 	$upload_dir = $conf->service->multidir_output[$product->entity] . '/' . get_exdir(0, 0, 0, 1, $product, 'product');
		// }
		// $filearray = dol_dir_list($upload_dir, "files", 0, '', '(\.meta|_preview.*\.png)$', $sortfield, (strtolower($sortorder) == 'desc' ? SORT_DESC : SORT_ASC), 1);
		// $this->smarty->assign('product',$product);
		// $this->smarty->assign('filearray', $filearray);
		$categstatic = new Categorie($db);
		$menu = $categstatic->get_full_arbo('product',31,1);
		$this->smarty->assign('menu',$menu);
		$this->smarty->assign('mysoc', $mysoc);
		$this->smarty->assign('bs5_extra_class', $bs5_extra_class = null);
		$this->smarty->assign('dol_url_root', $dolibarr_main_url_root);

		$this->smarty->view('welcome_message.tpl');
	}

	public function login(){
		
	}
}
