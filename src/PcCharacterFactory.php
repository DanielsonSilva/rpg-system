<?php 

namespace danielsonsilva\RpgSystem;

use danielsonsilva\DiceRoller\DiceRoller;

interface PcCharacterFactory
{
    private $attributes;
    
    /**
     * Represents the attack action
     * @param $options Represents the variable to work within the rule
     */
    public function attack($options);
    
    public function getAttackRoll($options);
    
    public function useMagic($options);
    
    public function getMagicRoll($options);
    
    public function rollAttribute($attributeName);
    
    public function getRollAttribute($attributeName);
    
    public function isDead();
    
    public function isHit($option);
    
    public function rollToGetHit(): bool;
    
    public function getRollGetHit(): DiceRoller;
    
    public function gotHit($hitPoints);
}

