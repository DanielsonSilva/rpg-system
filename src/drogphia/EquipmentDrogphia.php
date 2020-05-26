<?php

namespace danielsonsilva\RpgSystem\Drogphia;

use danielsonsilva\RpgSystem\EquipmentFactory;

class Equipment3det implements EquipmentFactory
{
    private $attributes;
    
    /**
     * @return the $attributes
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    /**
     * @param array $attributes
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }
    
    public function useEquipment()
    {
        
    }
    
    public function check($options)
    {
        
    }
}