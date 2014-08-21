<?php

namespace utils;

class HttpRequest {
	private $request;
	
	public function __construct(){
		$header =array (
			"Content-type" => "text/xml"
		);
		 //定义content-type为xml
		$this->request = curl_init(); //初始化curl
		 
		curl_setopt($this->request , CURLOPT_RETURNTRANSFER, 1);//设置是否返回信息
		curl_setopt($this->request , CURLOPT_HTTPHEADER, $header);//设置HTTP头
		curl_setopt($this->request, CURLOPT_CONNECTTIMEOUT, 5 );//链接超时 5s
		
	}
	/**
	 * 
	 * @param unknown $url
	 * @param unknown $data KV-array or a string
 	 */
	public function get($url,$data = null){
		$query_string = '?';
		if(is_array($data)){
			foreach ($data as $key => $val){
				$query_string .=$key.$val."&";
			}
			$query_string = rtrim($query_string,'&');
		}
		curl_setopt($this->request , CURLOPT_URL, $url.$query_string);//设置链接
		return $this->execRequest();
	}
	
	public function post($url,$data){
		$post_data = '';
		if(is_array($data)){
			foreach ($data as $key => $val){
                $post_data .=$key.$val."&";
			}
			$post_data = rtrim($post_data,'&');
		}else if (is_string($data)){
			$post_data = $data;
		}
		curl_setopt($this->request , CURLOPT_URL, $url);//设置链接
		curl_setopt($this->request , CURLOPT_POST, 1);//设置为POST方式
		curl_setopt($this->request , CURLOPT_POSTFIELDS, $post_data);//POST数据
		return $this->execRequest();
	}
	
	
	private function execRequest(){
		$response = curl_exec($this->request );//接收返回信息
		if(curl_errno($this->request )){//出错则显示错误信息
			print curl_error($this->request );
		}
		curl_close($this->request); //关闭curl链接
		return $response;//显示返回信息
		 
	}
}
 
 