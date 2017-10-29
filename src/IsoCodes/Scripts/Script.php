<?php

namespace Sokil\IsoCodes\Scripts;

class Script extends \Sokil\IsoCodes\Database\Entry
{
    public $alpha_4_code;
    
    public $numeric_code;
    
    public $name;
    
    public function getAlpha4()
    {
        return $this->alpha_4_code;
    }
    
    public function getNumericCode()
    {
        return $this->numeric_code;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function getLocalName()
    {
        return dgettext($this->_database->getIso(), $this->name);
    }
}