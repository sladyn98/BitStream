<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\indexController;
use Storage;

class compileSourceController extends Controller 
{



    public function compile($hackerearth,$config){
        // Get cURL resource
        $curl = curl_init();
        // Seting some options
        curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.hackerearth.com/v3/code/compile/',
        CURLOPT_POST => 1,
        CURLOPT_CAINFO => 'cacert.pem',
        CURLOPT_SSL_VERIFYPEER => 'true',
        CURLOPT_ENCODING => 'UTF-8',
        CURLOPT_POSTFIELDS => array(
                            'client_secret' => $hackerearth['client_secret'],
                            'time_limit' => $hackerearth['time_limit']||$config['time'],
                            'memory_limit' => $hackerearth['memory_limit']||$config['memory'],
                            'source' => $config['source'],
                            'input' => $config['input'],
                            'lang' => $config['language']
        )
        ));
        // Send the request & returning response 
        return json_decode(curl_exec($curl), true);
    }
    public function compile_with_file($hackerearth,$config){
           // Get cURL resource
        $curl = curl_init();
        // Seting some options
        $myfile = fopen($config['file'], "r") or die("Unable to open file!");
        curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.hackerearth.com/v3/code/compile/',
        CURLOPT_POST => 1,
        CURLOPT_CAINFO => 'cacert.pem',
        CURLOPT_SSL_VERIFYPEER => 'true',
        CURLOPT_ENCODING => 'UTF-8',
        CURLOPT_POSTFIELDS => array(
                            'client_secret' => $hackerearth['client_secret'],
                            'time_limit' => $hackerearth['time_limit']||$config['time'],
                            'memory_limit' => $hackerearth['memory_limit']||$config['memory'],
                            'source' => fread($myfile,filesize($config['file'])),
                            'input' => $config['input'],
                            'lang' => $config['language']
        )
        ));
        // Send the request & returning response 
        return json_decode(curl_exec($curl), true);
    }
    public function run($hackerearth,$config){
        // Get cURL resource
        $curl = curl_init();
        // Seting some options
        curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.hackerearth.com/code/run/',
        CURLOPT_POST => 1,
        CURLOPT_CAINFO => 'cacert.pem',
        CURLOPT_SSL_VERIFYPEER => 'true',
        CURLOPT_ENCODING => 'UTF-8',
        CURLOPT_POSTFIELDS => array(
                            'client_secret' => $hackerearth['client_secret'],
                            'time_limit' => $hackerearth['time_limit']||$config['time'],
                            'memory_limit' => $hackerearth['memory_limit']||$config['memory'],
                            'source' => $config['source'],
                            'input' => $config['input'],
                            'lang' => $config['language']
        )
        ));
        // Send the request & returning response 
        return json_decode(curl_exec($curl), true);
    }
    public function run_with_file($hackerearth,$config){
        // Get cURL resource
        $curl = curl_init();
        // Seting some options
        $myfile = fopen($config['file'], "r") or die("Unable to open file!");
        curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => 'https://api.hackerearth.com/v3/code/run/',
        CURLOPT_POST => 1,
        CURLOPT_CAINFO => 'cacert.pem',
        CURLOPT_SSL_VERIFYPEER => 'true',
        CURLOPT_ENCODING => 'UTF-8',
        CURLOPT_POSTFIELDS => array(
                            'client_secret' => $hackerearth['client_secret'],
                            'time_limit' => $hackerearth['time_limit']||$config['time'],
                            'memory_limit' => $hackerearth['memory_limit']||$config['memory'],
                            'source' => fread($myfile,filesize($config['file'])),
                            'input' => $config['input'],
                            'lang' => $config['language']
        )
        ));
        // Send the request & returning response 
        return json_decode(curl_exec($curl), true);
    }

  /*
    public function check()
    {

        $code = $_GET['value'];
        //Import the SDK 
      //  require_once('public\index.php');
//Setting up the Hackerearth API
$hackerearth = Array(
		'client_secret' => '2b56ecbd93d70c73f54315108a3fba64354ce4bd', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);
//Feeding Data Into Hackerearth API
$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262144'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['source']=$code;    	//(REQUIRED) Your properly formatted source code for which you want to use hackerEarth api
$config['input']='1 2 5 6 7 8 0 0';     	//(OPTIONAL) Properly Formatted Input against which you have to test your source code, leave this empty if you are using file
$config['language']='C';   //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY
//Sending request to the API to compile and run and record JSON responses
$response = $this->compile($hackerearth,$config); // Use this $response the way you want , it consists data in PHP Array
//Printing the response

echo $response['compile_status'];
//echo"<pre>".print_r($response,1)."</pre>";
    }

*/

    
    public function code(){

        $code = $_GET['value'];
        //Import the SDK 
      //  require_once('public\index.php');
//Setting up the Hackerearth API
$hackerearth = Array(
		'client_secret' => '2b56ecbd93d70c73f54315108a3fba64354ce4bd', //(REQUIRED) Obtain this by registering your app at http://www.hackerearth.com/api/register/
        'time_limit' => '5',   //(OPTIONAL) Time Limit (MAX = 5 seconds )
        'memory_limit' => '262144'  //(OPTIONAL) Memory Limit (MAX = 262144 [256 MB])
	);
//Feeding Data Into Hackerearth API

$config = Array();
$config['time']='5';	 	//(OPTIONAL) Your time limit in integer and in unit seconds
$config['memory']='262143'; //(OPTIONAL) Your memory limit in integer and in unit kb
$config['source']=$code;;    	//(REQUIRED) Your properly formatted source code for which you want to use hackerEarth api
$config['input']='';   	//(OPTIONAL) Properly Formatted Input against which you have to test your source code, leave this empty if you are using file
$config['language']='C';   //(REQUIRED) Choose any one of the below
						 	// C, CPP, CPP11, CLOJURE, CSHARP, JAVA, JAVASCRIPT, HASKELL, PERL, PHP, PYTHON, RUBY
//Sending request to the API to compile and run and record JSON responses
$response = $this->run($hackerearth,$config); // Use this $response the way you want , it consists data in PHP Array
//Printing the response


echo $response['run_status']['output'];
//echo"<pre>".print_r($response,1)."</pre>";
    }

    }
    
    
    