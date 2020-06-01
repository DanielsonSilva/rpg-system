<?php
namespace danielsonsilva\RpgSystem\Drogphia;

use danielsonsilva\RpgSystem\PcCharacterFactory;
use danielsonsilva\DiceRoller\DiceRoller;

class PcCharacterDrogphia implements PcCharacterFactory
{
    private $attributes;
    
    private $xp;
    
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    public function setAttributes($attr)
    {
        if ($this->validateAttributes($attr)) {
            $this->attributes = $attr;
        }
    }
    
    public function attack($attackType)
    {
        $roller = $this->getAttackRoll();
        return $roller->roll();
    }
    
    public function getAttackRoll($options = null)
    {
        $dice = new DiceRoller();
        $dice->addDice(1, 20);
        $dice->addValue($this->attributes['str']);
        return $dice;
    }
    
    public function useMagic($options)
    {
        
    }
    
    public function getMagicRoll($options)
    {
        $dice = new DiceRoller();
        $dice->addDice(1, 20);
        $dice->addValue($this->attributes['int']);
        return $dice;
    }
    
    public function rollAttribute($attributeName)
    {
        $roller = $this->getRollAttribute($attributeName);
        return $roller->roll();
    }
    
    public function getRollAttribute($attributeName): DiceRoller
    {
        $dice = new DiceRoller();
        $dice->addDice($this->attributes[$attributeName], 6);
        return $dice;
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

    public function rollToGetHit(): bool
    {
        false;
    }

    public function getRollGetHit(): DiceRoller
    {
        return new DiceRoller();
    }
    
    /**
     * Validate if the list of all attributes are correctly inserted and any values are negative
     * @param array $attributes Attributes array
     * @return boolean True if the attributes are valid, False otherwise
     */
    private function validateAttributes($attributes)
    {
        $attributesArray = ['str', 'dex', 'int', 'wis', 'cha', 'hp', 'mp'];
        $attributesKeysReceived = array_keys($attributes);
        $attributesValueReceived = array_values($attributes);
        $negativeValues = array_filter($attributesValueReceived, function ($value) {
            return $value <= 0;
        });
            return ($attributesArray == $attributesKeysReceived) && (empty($negativeValues));
    }

}