<?php 

namespace danielsonsilva\RpgSystem\_3det;

use danielsonsilva\RpgSystem\RpgSystemFactory;

class System3det implements RpgSystemFactory
{
    // creates the Playable Character
    public function createPC(): PcCharacter3det
    {
        $character = new PcCharacter3det();
        $attr = [
            'strength' => 0,
            'ability' => 0,
            'endurance' => 0,
            'armor' => 0,
            'firepower' => 0,
            'hp' => 0,
            'mp' => 0,
        ];
        $character->setAttributes($attr);
        return $character;
    }
    
    // creates the Monsters
    public function createMonster()
    {
        $monster = new Monster3det();
        $attr = [
            'strength' => 0,
            'ability' => 0,
            'endurance' => 0,
            'armor' => 0,
            'firepower' => 0,
            'hp' => 0,
            'mp' => 0,
        ];
        $monster->setAttributes($attr);
        $monster->setAttackPrefered(0);
        $monster->setXpValue(0);
        return $monster;
    }
    
    // creates Items
    public function createItem()
    {
        
    }
    
    // creates Equipments
    public function createEquipment()
    {
        
    }
}

