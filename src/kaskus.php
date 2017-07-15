<?php
/**
* Hot-Thread KASKUS
* API by MuhBayu
* --------------------------
* https://github.com/MuhBayu
* https://api.bayyu.net
*/
namespace bayyunet;

class kaskus_api
{
	protected $api_host = 'https://api.bayyu.net/kaskus-hotthread/';
	protected $api_key;

	public function setApiKey($key) {
		$this->api_key = $key;
	}
	public function cURL($url) {
		$post = http_build_query(array('apikey'=>$this->api_key));
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url.'?'.$post);
		curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip,deflate'); // please compress data
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		// /curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
		$result 	 = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	public function Hot_Thread() {
		return $this->cURL($this->api_host);
	}
}

?>