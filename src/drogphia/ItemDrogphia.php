<?php

namespace danielsonsilva\RpgSystem\Drogphia;

use danielsonsilva\RpgSystem\ItemFactory;

class ItemDrogphia implements ItemFactory
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
    
    public function useItem(PcCharacterDrogphia $character)
    {
        $this->function($character);
    }
    
    public function getProperties()
    {
        return $this->properties;
    }
}