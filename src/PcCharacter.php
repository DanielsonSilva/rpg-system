<?php 

namespace danielsonsilva\RpgSystem;

interface PcCharacterFactory
{
    private $attributes;
    
    public function attack();
    
    public function useMagic();
    
    public function rollAttribute($AttributeName);
    
    public function isDead();
    
    public function isHit();
    
    public function gotHit($hitPoints);
}

