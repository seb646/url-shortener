<?php 

class Shortener{
	protected $db;

	public function __construct(){
		// Connect to MySQL Database
		$this->db = new mysqli('localhost', 'USERNAME', 'PASSWORD', 'surl');
	}

	protected function generateCode($num){
		// Generate unique code
		return base_convert($num, 10, 36);
	}

	public function makeCode($url){
		$url = trim($url);

		if(!filter_var($url, FILTER_VALIDATE_URL)){
			return '';
		}

		$url = $this->db->escape_string($url);

		// Check if URL is in the database
		$exists = $this->db->query("SELECT code FROM links WHERE url = '{$url}'");
		if($exists->num_rows){
			return $exists->fetch_object()->code;
		} else{
			// Check for and remove the trailing slash for every URL
			if(substr($url, -1) == '/'){
			    $url = substr($url, 0, -1);
			}

			// Insert the URL (without unique code)
			$this->db->query("INSERT INTO links (url, created) VALUES ('{$url}', NOW())");

			// Generate unique code based on item id
			$code = $this->generateCode($this->db->insert_id);

			// Update entry with unique code 
			$this->db->query("UPDATE links SET code = '{$code}' WHERE url = '{$url}'");

			return $code;
		}
	}

	public function getUrl($code){
		$code = $this->db->escape_string($code);

		// Get the URL from the unique code
		$code = $this->db->query("SELECT url FROM links WHERE code = '$code'");

		if($code->num_rows){
			return $code->fetch_object()->url;
		}

		return '';
	}
}