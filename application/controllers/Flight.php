<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends CI_Controller {

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
/**
    * Get All Data from this method.
    *
    * @return Response
   */
function __construct()
{
        parent::__construct();
 
$this->load->database();
 
}
 
public function index()
{
echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
die();
}
}
