<?php 


	try{
		throw new  Exception("Error Processing Request", 1);
		
	} catch(Exception $e){
		var_dump($e->getCode());
	}