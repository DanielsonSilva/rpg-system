<?php

namespace danielsonsilva\RpgSystem\Drogphia;

use danielsonsilva\RpgSystem\MonsterFactory;
use danielsonsilva\DiceRoller\DiceRoller;

class MonsterDrogphia implements MonsterFactory
{
    private $attributes;
    
    private $xpValue;
    
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    public function setAttributes($attr)
    {
        $this->attributes = $attr;
    }
    
    /**
     * Represents the attack action
     * @param $options Represents the variable to work within the rule
     */
    public function attack($options)
    {
        $roller = $this->getAttackRoll();
        $dice = new DiceRoller();
        $dice->addDice(1, 20);
        $dice->addValue($this->attributes['str']);
        return $dice->roll();
    }
    
    public function useMagic($options)
    {
        
    }
    
    public function rollAttribute($attributeName)
    {
        $roller = $this->getAttackRoll();
        $dice = new DiceRoller();
        $dice->addDice(1, 20);
        $dice->addValue($this->attributes[$attributeName]);
        return $dice->roll();
    }
    
    public function isDead()
    {
        return ($this->attributes['hp'] <= 0);
    }
    
    public function isHit($option)
    {
        $dc = $this->attributes['dex'] + 10;
        return ($option['result'] >= $dc);
    }
    
    public function gotHit($hitPoints)
    {
        $this->attributes['hp'] -= $hitPoints;
    }
}
