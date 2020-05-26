<?php

namespace danielsonsilva\RpgSystem;

interface EquipmentFactory
{
    private $attributes;
    
    public function useEquipment();
    
    public function check($options);
}
