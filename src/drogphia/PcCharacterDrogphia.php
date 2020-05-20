<?php
namespace danielsonsilva\RpgSystem\Drogphia;

use danielsonsilva\RpgSystem\PcCharacterFactory;
use danielsonsilva\DiceRoller\DiceRoller;

class PcCharacter3det implements PcCharacterFactory
{
    private $attributes;
    
    private $xp;
    
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    public function setAttributes($attr)
    {
        $this->attributes = $attr;
    }
    
    public function attack($attackType)
    {
        
    }
    
    public function useMagic($options)
    {
        
    }
    
    public function rollAttribute($attributeName)
    {
        
    }
    
    public function getRollAttribute($attributeName): DiceRoller
    {
        
    }
    
    public function isDead()
    {
        
    }
    
    public function isHit()
    {
        
    }
    
    public function gotHit($hitPoints)
    {
        
    }
}