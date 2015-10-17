<?php
class YahooAPI {
      private $appid = '';
      public function __construct($appid) {
      	     $this->setAppid($appid);
      }
      public function setAppid($appid) {
      	     $this->appid = (string)filter_var($appid);
      }
      public function getAppid() {
      	     return $this->appid;
      }

      public function kousei($sentence) {
      	     $api = 'http://jlp.yahooapis.jp/KouseiService/V1/kousei';
      	     $params = array(
	     	     'sentence' => $sentence
	     );
	     $ch = curl_init($api.'?'.http_build_query($params));
	     curl_setopt_array($ch, array(
	        CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERAGENT => "Yahoo AppID: $this->appid"
	     ));

	     $result = curl_exec($ch);
	     curl_close($ch);

           return $result;
      }
}
?>