<?php

class Application_Model_Stats
{

    protected $countryList;
   
    
    
    public function addCountry($country = null)
    {
        
        if($country == null)
        {
            $this->_clearList();
        }
        elseif(is_array($this->countryList))
        {
            if(array_key_exists($country, $this->countryList))
            {
                $this->countryList[$country]++;
            }
            else {
                $this->countryList[$country] = 1;
            }
        }else{
            $this->countryList[$country] = 0;
        }
        
    }
    
    public function getCountries()
    {
        if(is_array($this->countryList))
        {
            return array_keys($this->countryList);
        }else{
            return array();
        }
    }
    
    private function _clearList()
    {
        $this->countryList = array();
    }        
    
}

