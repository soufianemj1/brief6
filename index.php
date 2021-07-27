<?php


// Headers requis
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$params=explode('/',$_GET['p']);

if (isset($params[0]) & !empty($params[0])) 
{
	$controller=ucfirst($params[0]);
	if (file_exists("controller/".$controller.".php")) 
	{	
		require_once 'controller/'.$controller.".php";
		$obj=new $controller();
		// print_r($obj);
		if (isset($params[1]) & !empty($params[1])) 
		{
			if (method_exists($obj,$params[1] )) 
			{
				$action=$params[1];
				
				if (isset($params[2]) & !empty($params[2]))
				{
					$obj->$action($params[2]);
				}else
				{
					$obj->$action();
				}
			}else
			{
				echo "this methodfff doesn't exist";
			}
		}else
		{
			$action="index";
			$obj->$action();
		}

	}else
	{
		echo "this page doesn't exsit";
	}
	
}
else{
	echo "controller vide";
}