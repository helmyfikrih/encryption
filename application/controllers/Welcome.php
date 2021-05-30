<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function to_encrypt()
	{
		$words = array(
			array('q', 'w', 'e', 'r', 't', 'y', 'u', 'i', 'o', 'p'),
			array('a', 's', 'd', 'f', 'g', 'h', 'j', 'k', 'l'),
			array('x', 'c', 'v', 'b', 'n', 'm'),
		);
		$str = $this->input->post('text');
		$type = $this->input->post('type');
		$arr_str = str_split($str);
		foreach ($arr_str as $string) {
			$string = strtolower($string);
			if (!preg_match("/^[a-z]$/", $string)) {
				print_r($string);
			} else {
				foreach ($words as $key => $val) {
					if (array_search($string, $val) == 0 || array_search($string, $val)) {
						$key_string = array_search($string, $val);
						if ($key_string || $key_string === 0) {
							if ($type == 1) {
								$encrypted = isset($val[$key_string + 1]) ? $val[$key_string + 1] : $val[0];
								print_r($encrypted);
							} else {
								$encrypted = isset($val[$key_string - 1]) ? $val[$key_string - 1] : $val[count($val) - 1];
								print_r($encrypted);
							}
						}
					}
				}
			}
		}
	}
}
