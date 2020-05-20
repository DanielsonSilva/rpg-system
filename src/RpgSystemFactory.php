<?php 

namespace danielsonsilva\RpgSystem;

interface RpgSystemFactory
{
    // creates the Playable Character
    public function createPC(): PcCharacterFactory;
    
    // creates the Monsters
    public function createMonster();
    
    // creates Items
    public function createItem();
    
    // creates Equipments
    public function createEquipment();
}
