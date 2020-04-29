<?php defined("BASEPATH") or exit(); 

class Corelib {

	private $core = NULL;

	public function __construct() {
		$this->core =& get_instance();
	}

	public function rand_text_generator() {
		$output = "";
		$text = "ABCDEFG12345678";

		for($i = 0; $i < strlen($text) - 1; $i++) {
			$output .= $text[rand(0 , $i)];
		}

		return $output;
	}

	public function escape_string($data = []) {
		foreach($data as $key => $val) {

			if(is_array($data[$key])) {
				foreach($data[$key] as $key2 => $val2) {
					$data[$key][$key2] = htmlentities($val2);
					$data[$key][$key2] = htmlspecialchars($val2);
					$data[$key][$key2] = trim($val2);
					$data[$key][$key2] = strip_tags($val2);
				}
			}
			else {
				$data[$key] = htmlentities($val);
				$data[$key] = htmlspecialchars($val);
				$data[$key] = trim($val);
				$data[$key] = strip_tags($val);
			}
		}
		return $data;
	}

	public function view_loader($view) {
		return $this->core->load->view($view, [], false);
	}
}

?>