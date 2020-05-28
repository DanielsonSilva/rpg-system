<?php 

namespace danielsonsilva\RpgSystem\Drogphia;

use danielsonsilva\RpgSystem\RpgSystemFactory;

class SystemDrogphia implements RpgSystemFactory
{
    // creates the Playable Character
    public function createPC()
    {
        $character = new PcCharacterDrogphia();
        $attr = [];
        $character->setAttributes($attr);
        return $character;
    }
    
    // creates the Monsters
    public function createMonster()
    {
        
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

