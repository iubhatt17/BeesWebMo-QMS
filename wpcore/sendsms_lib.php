<?php 
class sendsms
{
 	private $api_url;
 	private $time;
 	private $unicode;
	private $working_key;
	private $start;
	private $sender_id;
	public  $api;
	public  $wk;
	public  $sid;
	public  $to;

	/**function to set the working key
	 * 
	 * @param string_type $wk:helps to change the working_key
	 */
	function setWorkingKey($wk)
	{   
		$this->working_key=$wk;
	}
	
	/**function to set sender id
	 * 
	 * @param string_type $sid:helps to change sender_id
	 */
	function setSenderId($sid)
	{   
		$this->sender_id=$sid;
	}

	/**function to set API url
	 * 
	 * @param string_type $apiurl:it is used to set api url
	 */
	function setapiurl($apiurl)
	{		$this->api=$apiurl;
			$a=strtolower(substr($apiurl,0,7));
			 
			 if ($a=="http://") //checking if already contains http://
			 {
			 	$api_url=substr($apiurl,7,strlen($apiurl));
			 	$this->api_url=$api_url;
			 	$this->start="http://";
			 }
		    elseif ($a=="https:/") //checking if already contains htps://
			 {
			 	$api_url=substr($apiurl,8,strlen($apiurl));
			 	$this->api_url=$api_url;
			 	$this->start="https://";
			 }
			 else { 
			 			$this->api_url=$apiurl;
			       		$this->start="http://";
			 	  }
	}

	/** function to intialize constructor
	 * 
	 * @param string_type $wk: it is working_key
	 * @param string_type $sd: it is sender_id
	 * @param string_type $apiurl: it is api_url
	 *          used for intializing the parameter
	 */
	function __construct($apiurl,$wk,$sd)
	{
		$this->setWorkingKey($wk);
		$this->setSenderId($sd);
		$this->setapiurl($apiurl);
	}

	/**
	 * function to send sms
	 * 
	 */
	function send_sms($to,$message,$dlr_url,$type="xml")
	{
		return $this->process_sms($to,$message,$dlr_url,$type="xml",$time="null",$unicode="null");
	}

	/**
	 * function to schedule sms
	 * 
	 */
	function schedule_sms($to,$message,$dlr_url,$type="xml",$time)
	{ 
		return $this->process_sms($to,$message,$dlr_url,$type="xml",$time,$unicode='');
	}

	/**
	 * function to send unicode message
	 */
	function unicode_sms($to,$message,$dlr_url,$type="xml",$unicode)
	{  
		return $this->process_sms($to,$message,$dlr_url,$type="xml",$time='',$unicode);
	}

	/**
	 * function to send out sms
	 * @param string_type $to : is mobile number where message needs to be send
	 * @param string_type $message :it is message content
	 * @param string_type $dlr_url: it is used for delivering report to client
	 * @param string_type $type: type in which report is delivered
	 * @return output		$this->api=$apiurl;
	 */
	function process_sms($to,$message,$dlr_url="",$type="xml",$time='',$unicode='')
	{  
		$message	= urlencode($message);		
		$all_numbers= array();
		$arrayto	= array("9", "8" ,"7");
		
	 	if( is_array($to) && count($to) > 0 )
		{
			foreach($to as $to_number)
			{
				$to_number	= substr($to_number, -10) ;
				$to_check	= substr($to_number, 0, 1);	
					
				if( in_array($to_check, $arrayto) )
	 				$all_numbers[] = $to_number;
			}
		}
		else 
			return "Error";
		
		$to_string = "";
		if( count($all_numbers) > 0 )
		{
			foreach($all_numbers as $send_number)
			{
				$to_string	.= $send_number . ",";
			}	
		}
		else 
			return "Error";
		
		$to_string	= rtrim($to_string, ",");
				
		if($time=='null')
			$time='';
		else
			$time="&time=$time";
		
		if($unicode=='null')
			$unicode='';
		else
			$unicode="&unicode=$unicode";
	
	 	
	 	$url="$this->start$this->api_url/web2sms.php?workingkey=$this->working_key&sender=$this->sender_id&to=$to_string&message=$message&type=$type&dlr_url=$dlr_url$time$unicode";
		
	 	return $this->execute($url);
	}

	/**
	 * function to check message delivery status
	 * string_type $mid : it is message id 
	 */
	function messagedelivery_status($mid)
	{
		$url="$this->start$this->api_url/status.php?workingkey=$this->working_key&messageid=$mid";
		return $this->execute($url);
	}

	/**
	 * function to check group message delivery
	 *  string_type $gid: it is group id
	 */
	function groupdelivery_status($gid)
	{
		$url="$this->start$this->api_url/groupstatus.php?workingkey=$this->working_key&messagegid=$gid";
		return $this->execute($url);
		
	}

	/**
	 * function to request to clent url
	 */
	function execute($url)
	{
		$ch=curl_init();
		// curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$output=curl_exec($ch);
		curl_close($ch);
		//echo $output;
		return $output;
		
	}    
}
?>
