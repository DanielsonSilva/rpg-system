<?php

namespace danielsonsilva\RpgSystem;

interface ItemFactory
{
    private $properties;
    
    private $function;
    
    public function defineItemUsage($callback);
    
    public function setProperties($propertiesString);
    
    public function useItem(PcCharacterFactory $character);
    
    public function getProperties();
}
