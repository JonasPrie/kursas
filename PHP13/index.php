<?php

	class Human {
		public $name;
		public $surname;
		public $age;
		public $livingPlace;
		public $hi;


		public function greetings($hello) {
			return $this->hi = $hello;
		}

		public function setName($realName)
		{
			$this->name = $realName;
		}

		public function getName()
		{
			return $this->name;
		}

		public function setSurname($realSurname)
		{
			$this->surname = $realSurname;
		}

		public function getSurname()
		{
			return $this->surname;
		}

		public function age($yearOfBirth)
		{
			$this->age = date('Y') - $yearOfBirth;
			return $this->age;
		}

		public function placeOfBirth($realLivingPlace)
		{
			return $this->livingPlace = $realLivingPlace;
		}

	}
$woman = new Human();
$man = new Human();
$helloHi = new Human();

$helloHi->greetings('hello');
$woman->setName('Ruta');
$woman->setSurname('Olgovskaya');
$woman->placeOfBirth('Vilnius');
echo $helloHi->hi . ' ' . $woman->name . ' ' . $woman->surname . ' who is ' . $woman->age(1987) . ' years old and living in ' . $woman->livingPlace . '.';
$man->setName('Janis');
$man->setSurname('Diedalis');
$man->placeOfBirth('Rudamina');;
echo '<br>' . $helloHi->hi . ' ' . $man->name . ' ' . $man->surname . ' who is ' . $man->age(1964) . ' years old and living in ' . $man->livingPlace . '.';

?>
