<?php
class ChiAndRuFilterHelper{
   public static function isChineseOrRussian($str){
      return (bool)preg_match ( "/(\p{Han})|(\p{Cyrillic})+/u", $str );
   }

  public static function checkPostRequests(){
     if(get_request_method() != "POST"){
        return false;
     }
     foreach($_POST as $key=>$value){
        if(is_string($_POST[$key]) and self::isChineseOrRussian($_POST[$key])){
	         return true;
	        }
     }
	return false;
}
}
