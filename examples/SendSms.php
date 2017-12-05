<?php
require_once '../lib/SendCloudSMS.php';
require_once '../lib/util/SMS.php';

function sendsms(){
	$SMS_USER = "***";
	$SMS_KEY = "***";
	$smsTemplateId = 1;
	$sendSms=new SendCloudSMS($SMS_USER, $SMS_KEY);
	$smsMsg=new SmsMsg();
	$smsMsg->addPhoneList(array("13871506390"));
	$smsMsg->addVars("code", "1234");
	$smsMsg->setTemplateId($smsTemplateId);
	$smsMsg->setTimestamp(time());
	$resonse= $sendSms->send($smsMsg);
	echo $resonse->body();
	
}


function sendMms(){
	$SMS_USER = "zabbix_sms";
	$SMS_KEY = "NnekorDknAJzqafGWitVS9DEjYb9NM2j";
	$mmsTemplateId = 8291;
	$sendSms=new SendCloudSMS($SMS_USER, $SMS_KEY);
	$smsMsg=new SmsMsg();
	$smsMsg->addPhoneList(array("15817496692d"));
	$smsMsg->addVars("code", "1234");
	$smsMsg->addVars("time", "2017/08/31");
	$smsMsg->setMsgType(0);
	
	$smsMsg->addMapVars(array("name"=>'xiao'));
	$smsMsg->setTemplateId($mmsTemplateId);
	$smsMsg->setTimestamp(time());
	$resonse=$sendSms->send($smsMsg);
	echo $resonse->body();
		
}
header("content-type:text/html;charset=utf-8");
sendMms();







 
//sendMms();
 
 

