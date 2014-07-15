<?php

class iniparser {

    public $iniFile = null;
    public $Data = null;
    
    /*
     * Parses an INI file
     * 
     * @param bool $object
     * @return array or object
     */
    public function parseIniFile($object)
    { 
        if(file_exists($this->iniFile))
        {
            if($object)
            {
                $obj = json_decode(
                            json_encode (
                                parse_ini_file($this->iniFile, true)
                            ), FALSE
                        );
                $this->Data =  $obj;
            }
            else
            {
                $this->Data = parse_ini_file($this->iniFile, true);
            }
        }
       
    }
    
    /*
     * Ini File Location
     */
    public function setIniLocation($location)
    {       
        $this->iniFile = $location;
    }
    
    public function getIniFileData($object = false)
    {
        $this->parseIniFile($object);
        return $this->Data;
    }
}
