<?php 

namespace danielsonsilva\RpgSystem\Drogphia;

use danielsonsilva\RpgSystem\RpgSystemFactory;

class SystemDrogphia implements RpgSystemFactory
{
    // creates the Playable Character
    public function createPC()
    {
        $character = new PcCharacterDrogphia();
        $attr = ['str' => 0,
            'dex' => 0,
            'int' => 0,
            'wis' => 0,
            'cha' => 0,
            'hp' => 30,
            'mp' => 0];
        $character->setAttributes($attr);
        return $character;
    }
    
    // creates the Monsters
    public function createMonster()
    {
        $monster = new MonsterDrogphia();
        $attr = ['str' => 0,
            'dex' => 0,
            'int' => 0,
            'wis' => 0,
            'cha' => 0,
            'hp' => 30,
            'mp' => 0];
        $monster->setAttributes($attr);
        return $monster;
    }
    
    // creates Items
    public function createItem()
    {
        $item = new ItemDrogphia();
        return $item;
    }
    
    // creates Equipments
    public function createEquipment()
    {
        $equipment = new EquipmentDrogphia();
        return $equipment;
    }
}

