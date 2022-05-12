<?php namespace App\Controllers;

use App\Model\UserModel;
use App\Models\ForumModel;
use App\Models\ForumReplyModel;
use App\Models\codesnippetstb;
class Search extends BaseController
{

    public function __contruct(){
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');
		// $autoload['helper'] = array('url');
	  }

    //   public function perform_http_request($method, $url, $data = false) {
		

	// 	//header
	// 	$headers = [
	// 		'X-TOKEN: 1234'
	// 	];
	// 	// perform_http_request();
	// 	$curl = curl_init();

	// switch ($method) {
	// 	case "POST":
	// 		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	// 		curl_setopt($curl, CURLOPT_POST, 1);

	// 		if ($data) {
	// 			curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	// 		}
			
	// 		break;
	// 	case "PUT":
	// 		curl_setopt($curl, CURLOPT_PUT, 1);
			
	// 		break;
	// 	default:
	// 		if ($data) {
	// 			$url = sprintf("%s?%s", $url, http_build_query($data));
	// 		}
	// }

	// curl_setopt($curl, CURLOPT_URL, $url);
	// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	// curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //If SSL Certificate Not Available, for example, I am calling from http://localhost URL

	// $result = curl_exec($curl);

	// curl_close($curl);
		
	// return $result;
	// }

    //   public function simrateApi($entry1,$entry2){
	// 	$url = "http://localhost:8000/api/similarity?entry1=".rawurlencode($entry1)."&entry2=".rawurlencode($entry2);
		
	// 	$test = json_decode($this->perform_http_request("POST",$url,false),true);
	// 	return $test;
	// }

    public function index()
    {
        
        $model = new ForumModel();
     
		$modelforum = $model->findAll();
        $data = [
        'forumresult' => $model->paginate(10),
          'pager' => $model->pager,
          'mod' => ""
        //   'forumresult' => $modelforum
          
      ];
      
      //print_r((new ForumModel)$model->paginate(10)[0]->id);
      //print_r($model->paginate(3));
        //echo $search;
        echo view('header-tags');
        echo view('navbar');
        echo view('search', $data);
        echo view('footer');  
    } 
    
    public function search_method(){
        $db = db_connect();
        $searchinput = $this->request->getVar('searchQueryInput');
		$data = [];
		helper(['form']);
        $fmodel = new ForumModel();
		$resfmodel = $fmodel->findAll();

       $sql = "SELECT * from forumquestion where forum_title LIKE '%".$searchinput."%'";
       $dbquery = $db->query($sql);
       $result = $dbquery->getResult();

     
        
		if($this->request->getMethod()=='post')
		{
			$query = $this->request->getVar('search_receiver');
		}

		$start_time = microtime(true);
		$a=1;
	
		//$url = "http://localhost:8000/api/similarity";
		
        
        $forumArrayResult = array();

        // print_r($this->simrateApi("apple","banana"));
        // foreach ($result as $var) {
        //     $temp = $var->forum_title." ".$var->forum_body;
            
        //     // echo $var->id."erjweorjhweorhweuorhweouh";

        //     if ($this->simrateApi($temp,$searchinput)['simrate2']>=.5) {
        //         array_push($forumArrayResult,$var);	
        //     }
           
        // }
        
		// $docType = "codedabble";
		// $vectorID = "hT7QuIAB8soKxOvlzkgY";
		// // $elast = $this->getElastic('codedabble','hT7QuIAB8soKxOvlzkgY');

		// // print_r($elast);
		// $url = "localhost:9200/".$docType."/_doc/".$vectorID."?pretty";
		
		// $vectors = json_decode($this->performBody_http_request("GET",$url,false),true);

		// print_r($vectors);

		// End clock time in seconds
		$end_time = microtime(true);
  
		// Calculate script execution time	
		$execution_time = ($end_time - $start_time);
        
		// echo " Execution time of script = ".$execution_time." sec";
        $data['forumresult'] = $forumArrayResult;
        
        echo view('header-tags');
        echo view('navbar');
        echo view('search', $data);
        echo view('footer');
    }


	public function performBody_http_request($method, $url, $data = false) {
		

		//header
		$headers = [
			'X-TOKEN: 1234',
			'Content-Type: application/json'
		];
		// perform_http_request();
		$curl = curl_init();


	switch ($method) {
		case "POST":
			echo "post";
			curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($curl, CURLOPT_USERPWD, "elastic:elastic");
			curl_setopt($curl, CURLOPT_POST, 1);

			if ($data) {
				curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
			}
			
			break;

		case "GET":
			echo "get";
			curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($curl, CURLOPT_POST, 1);
			curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
			curl_setopt($curl, CURLOPT_USERPWD, "elastic:elastic");
			break;

		case "PUT":
			curl_setopt($curl, CURLOPT_PUT, 1);
			
			break;
		default:
			if ($data) {
				$url = sprintf("%s?%s", $url, http_build_query($data));
			}
	}

	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); //If SSL Certificate Not Available, for example, I am calling from http://localhost URL

	$result = curl_exec($curl);

	curl_close($curl);
		
	return $result;
	}

      public function simrateApi2($entry1,$entry2){
		$url = "http://localhost:8000/api/similarity?entry1=".rawurlencode($entry1)."&entry2=".rawurlencode($entry2);
		
		$test = json_decode($this->performBody_http_request("POST",$url,false),true);
		return $test;
	}

	public function stringtoVec($entry1,$entry2){
		$url = "http://localhost:8000/api/similarity?entry1=".rawurlencode($entry1)."&entry2=".rawurlencode($entry2);
		
		$test = json_decode($this->performBody_http_request("POST",$url,false),true);
		return $test;
	}

	public function postElastic($docType){
		$url = "localhost:9200/".$docType."/_doc/?pretty";
		
		$elastic = json_decode($this->performBody_http_request("POST",$url,false),true);
		// print_r($elastic);
		return $elastic;
	}

	public function getElastic($docType,$vectorID){
		$url = "localhost:9200/".$docType."/_doc/".$vectorID."?pretty";
		
		$vectors = json_decode($this->performBody_http_request("GET",$url,false),true);
		return $vectors;
	}
}

