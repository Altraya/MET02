<?php

namespace App\Utilities;
/*
    Class required for global operation / method --> utilities
*/
class Utilities {

    public static function CheckIfNotNull($varToCheck)
    {
        
        if($varToCheck != "" && $varToCheck != NULL)
            return true;
        return false;
    }
    
    //for all fields, do an htmlspecialchars to dodge injection
    public static function Sanitize($parameters)
    {
        $sanitizedParameters = array();
        
        foreach($parameters as $key => $param)
        {
            $sanitizedParameters[$key] = htmlspecialchars($param);
        }
        return $sanitizedParameters;
    }
    
    /*
        check if all fields exist -> check if the user has filled all inputs
        @param $parameters : parameters from form which contains all variables
        @param $arrayOfFieldNameToCheck : array which contains all of NON NULL input name we want to check 
        
        for exemple for a login for :
            parameters :
                "login" => "toto"
                "pwd" => "123"
            arrayOfFieldNameToCheck :
                [ "login", "pwd" ]
                
            Because login et pwd fields are required for the form
        @return : Response object with if it's ok or not and a message
    */
    public static function CheckIfAllFieldsExists($parameters, $arrayOfFieldNameToCheck)
    {
        $ownResponse = new Response(["", ""]);
        $ownResponse->setIsGood(false);

        $msg = "Good job, your filled all the fields !";
        $ownResponse->setMessage($msg);
        
        foreach($arrayOfFieldNameToCheck as $fieldName)
        {
            //http://php.net/manual/fr/function.array-key-exists.php
            $isKeyExist = array_key_exists($fieldName , $parameters); //check if field exist
            
            if($isKeyExist)
            {
                //check for non null
                $fieldIsNull = Utilities::CheckIfNotNull($parameters[$fieldName]);
            
                if(!$fieldIsNull) //field is empty or null
                {
                    $msg = "The field ".$fieldName." is missing and it is required, please fill it and retry";
                    $ownResponse->setIsGood($fieldIsNull);
                    $ownResponse->setMessage($msg);
                    break;
                }
            }else{
                //key doesn't exist
                $ownResponse->setIsGood($isKeyExist);
                $msg = "The field ".$fieldName." is missing and it is required, please fill it and retry";
                $ownResponse->setMessage($msg);
                break;
            }
                
        }
        
        return $ownResponse;
    }
}