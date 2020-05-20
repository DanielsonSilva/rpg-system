<?php 

namespace danielsonsilva\RpgSytem\Tests;

DEFINE('DS', DIRECTORY_SEPARATOR);

require_once(__DIR__ . DS . '..' . DS . 'vendor' . DS . 'autoload.php');

use PHPUnit\Framework\TestCase;
use danielsonsilva\RpgSystem\_3det;

final class RpgSystemTest extends TestCase
{
    
    private $hero;
    private $nonPlayableCharacter;
    private $monster;
    private $item;
    private $equipment;
    
    private function createSystemRpg($concreteClass)
    {
        $this->hero = $concreteClass->createPC();
        $this->nonPlayableCharacter = $concreteClass->createNPC();
        $this->monster = $concreteClass->createMonster();
        $this->item = $concreteClass->createItem();
        $this->equipment = $concreteClass->createEquipment();
    }

    public function testCreate3detRpgSystem(): void
    {
        $rpgSystem = $this->createSystemRpg(new System3det());
    }
}