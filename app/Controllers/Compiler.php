<?php namespace App\Controllers;

class Compiler extends BaseController
{
        public function __contruct(){
            parent::__construct();
            $this->load->helper('html');
            $this->load->helper('url');
            // $autoload['helper'] = array('url');
          }
        public function index()
        {
            $url = "http://localhost:8080/fetchCode?fileName=Solution";
        
            $client = curl_init($url);
            curl_setopt($client,CURLOPT_POST,1);
            curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($client);
            
            $result = json_decode($response,true);
            $data['codeBody']=$result['codeBody'];
            // echo $result['codeBody'];
            // foreach ($result['codeBody'] as $key => $value) {
            // 	echo $value['codeBody'];
            // }
            
            $data['TOKEN']="1234";
            return view('myEditor',$data);
    
        }
}
