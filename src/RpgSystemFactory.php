<?php 

namespace danielsonsilva\RpgSystem;

interface RpgSystemFactory
{
    // creates the Playable Character
    public function createPC();
    
    // creates the Non Playable Character
    public function createNPC();
    
    // creates the Monsters
    public function createMonster();
    
    // creates Items
    public function createItem();
    
    // creates Equipments
    public function createEquipment();
}
