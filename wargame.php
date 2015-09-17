<?php

class Person {
	private $health = 100;
	private $name;
	public $weapon;
	public $weaponDamage;

	public function __construct($name){
		$this->name = $name;
	}

	public function speak(){
		echo "Hi my name is " . $this->name;
	}

	public function attack($victim){
		$victim->health = $victim->health - ( ($victim->health * .1) + $this->weaponDamage);
	}

	public function eat(){
		$this->health = 100;
	}

	public function equipWeapon($x) {
		$this->weapon = $x;
		$this->weaponDamage = $x->damageAmount;
	}

}

class Weapon extends Person {

	public $damageAmount;

}

class Crossbow extends Weapon {

	public $damageAmount = 20;

}

class Longsword extends Weapon {

	public $damageAmount = 10;

}

$Brian = new Person('Brian');
$Jordan = new Person('Jordan');

$crossbow = new Crossbow('Crossbow');
$longsword = new Longsword('Longsword');

//Simple print out of Brian below
print_r($Brian);
echo "<br>";
echo "<br>";

//Simple print out of Jordan below
print_r($Jordan);
echo "<br>";
echo "<br>";

//Brian attacks Jordan without a weapon
$Brian->attack($Jordan);
print_r($Jordan);
echo "<br>";
echo "<br>";

//Jordan eats food to regain health after attack
$Jordan->eat();
print_r($Jordan);
echo "<br>";
echo "<br>";

//Brian equips crossbow weapon
$Brian->equipWeapon($crossbow);
print_r($Brian);
echo "<br>";
echo "<br>";

//Brian attacks Jordan, includes weapon damage
$Brian->attack($Jordan);
print_r($Jordan);
echo "<br>";
echo "<br>";

//Brian attacks Jordan again to show the 10% attack
$Brian->attack($Jordan);
print_r($Jordan);
echo "<br>";
echo "<br>";
