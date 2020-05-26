<?php

namespace danielsonsilva\RpgSystem;

interface MonsterFactory
{
    private $attributes;
    
    /**
     * Represents the attack action
     * @param $options Represents the variable to work within the rule
     */
    public function attack($options);
    
    public function useMagic($options);
    
    public function rollAttribute($attributeName);
    
    public function isDead();
    
    public function isHit();
    
    public function gotHit($hitPoints);
}
