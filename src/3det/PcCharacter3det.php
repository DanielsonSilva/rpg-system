<?php

namespace danielsonsilva\RpgSystem\_3det;

use danielsonsilva\RpgSystem\PcCharacterFactory;
use danielsonsilva\DiceRoller\DiceRoller;

/**
 * Class that specifies what a Playable Character will have using the
 * 3D&T RPG Rule System.
 * @author Danielson Silva
 */
class PcCharacter3det implements PcCharacterFactory
{
    /** 
     * @var array Represents the attributes from the character
     * This attributes are: Strength, Ability, Endurance, Armor and Fire Power
     */
    private $attributes;
    
    /** @var int Represents the experience points from the character */
    private $xp;
    
    /**
     * Gets the attributes array from the character
     * @return array Attributes array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    
    /**
     * Sets the attributes to a new array if they are valid
     * @param array $attr Array attributes to be set
     */
    public function setAttributes($attr)
    {
        if ($this->validateAttributes($attr)) {
            $this->attributes = $attr;
        }
    }

    /**
     * Represents the attack action with the 3D&T Ruleset
     * @param $attackType Represents if it was a physical attack or a shoot attack
     * {@inheritDoc}
     * @see \danielsonsilva\RpgSystem\PcCharacterFactory::attack()
     */
    public function attack($attackType)
    {
        $roller = $this->getAttackRoll($attackType);
        return $roller->roll();
    }
    
    /**
     * Get the attack roll used to an attack type
     * @param $attackType Represents if it was a physical attack or a shoot attack
     * {@inheritDoc}
     * @see \danielsonsilva\RpgSystem\PcCharacterFactory::getAttackRoll()
     * @return DiceRoller A DiceRoller object for that type of attack
     */
    public function getAttackRoll($attackType): DiceRoller
    {
        $dice = new DiceRoller();
        switch($attackType) {
            case 1:
                $dice->addDice($this->attributes['strength'], 6);
                break;
            case 2:
                $dice->addDice($this->attributes['firepower'], 6);
                break;
            default:
                break;
        }
        return $dice;
    }
    
    public function useMagic($options)
    {
        
    }
    
    public function getMagicRoll($options)
    {
        
    }
    
    /**
     * Rools an attribute from this character
     * @param string $attributeName Name of the attribute that is going to be rolled
     * {@inheritDoc}
     * @see \danielsonsilva\RpgSystem\PcCharacterFactory::rollAttribute()
     * @return The result of the roll of that attribute
     */
    public function rollAttribute($attributeName)
    {
        $roller = $this->getRollAttribute($attributeName);
        return $roller->roll();
    }
    
    /**
     * Get the dice roller from certain attribute
     * {@inheritDoc}
     * @see \danielsonsilva\RpgSystem\PcCharacterFactory::getRollAttribute()
     */
    public function getRollAttribute($attributeName): DiceRoller
    {
        $dice = new DiceRoller();
        $dice->addDice($this->attributes[$attributeName], 6);
        return $dice;
    }
    
    /**
     * Check if the character is dead
     * {@inheritDoc}
     * @see \danielsonsilva\RpgSystem\PcCharacterFactory::isDead()
     */
    public function isDead()
    {
        
    }
    
    /**
     * Check if the character was hit
     * {@inheritDoc}
     * @see \danielsonsilva\RpgSystem\PcCharacterFactory::isHit()
     */
    public function isHit()
    {
        
    }
    
    /**
     * Update character after got hit
     * {@inheritDoc}
     * @see \danielsonsilva\RpgSystem\PcCharacterFactory::gotHit()
     */
    public function gotHit($hitPoints)
    {
        
    }
    
    /**
     * Validate if the list of all attributes are correctly inserted and any values are negative
     * @param array $attributes Attributes array
     * @return boolean True if the attributes are valid, False otherwise
     */
    private function validateAttributes($attributes)
    {
        $attributesArray = ['strength', 'ability', 'endurance', 'armor', 'firepower', 'hp', 'mp'];
        $attributesKeysReceived = array_keys($attributes);
        $attributesValueReceived = array_values($attributes);
        $negativeValues = array_filter($attributesValueReceived, function ($value) {
            return $value <= 0;
        });
        return ($attributesArray == $attributesKeysReceived) && (empty($negativeValues));
    }
}
