<?php

namespace danielsonsilva\RpgSystem\_3det;

use danielsonsilva\RpgSystem\MonsterFactory;
use danielsonsilva\DiceRoller\DiceRoller;

class Monster3det implements MonsterFactory
{
    private $attributes;
    
    private $xpValue;
    
    private $attackPrefered;
    
    private $armorRolled;
    
    /**
     * @return the $dmgDone
     */
    public function getArmorRolled()
    {
        return $this->armorRolled;
    }

    /**
     * @param field_type $xpValue
     */
    public function setXpValue($xpValue)
    {
        $this->xpValue = $xpValue;
    }

    /**
     * @param field_type $attackPrefered
     */
    public function setAttackPrefered($attackPrefered)
    {
        $this->attackPrefered = $attackPrefered;
    }

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

    /**
     * Represents the attack action
     * @param $options Represents the variable to work within the rule
     */
    public function attack($options)
    {
        $dice = new DiceRoller();
        switch($this->attackPrefered) {
            case 1:
                $dice->addDice($this->attributes['strength'], 6);
                break;
            case 2:
                $dice->addDice($this->attributes['firepower'], 6);
                break;
            default:
                break;
        }
        return $dice->roll();
    }
    
    public function useMagic($options)
    {
        
    }
    
    public function rollAttribute($attributeName)
    {
        $dice = new DiceRoller();
        $dice->addDice(1, 6);
        $dice->addValue($this->attributes['ability']);
        if ($attributeName != 'ability') {
            $dice->addValue($this->attributes[$attributeName]);
        }
        return $dice->roll();
    }
    
    public function isDead()
    {
        return ($this->attributes['hp'] <= 0);
    }
    
    public function isHit($option)
    {
        $dice = new DiceRoller();
        $dice->addDice(1, 6);
        $dice->addValue($this->attributes['ability']);
        $dice->addValue($this->attributes['armor']);
        $this->dmgDone = $dice->roll();
        return ($option['hit'] > $this->armorRolled);
    }
    
    public function gotHit($hitPoints)
    {
        $this->attributes['hp'] -= $hitPoints;
    }
}
