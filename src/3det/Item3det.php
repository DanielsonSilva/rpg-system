<?php

namespace danielsonsilva\RpgSystem\_3det;

use danielsonsilva\RpgSystem\ItemFactory;

class Item3det implements ItemFactory
{
    private $properties;
    
    private $function;
    
    public function defineItemUsage($callback)
    {
        $this->function = $callback;
    }
    
    public function setProperties($propertiesString)
    {
        $this->properties = $propertiesString;
    }
    
    public function useItem(PcCharacter3det $character)
    {
        $this->function($character);
    }
    
    public function getProperties()
    {
        return $this->properties;
    }
}