<?php
class Ennemy extends Character

{
    private $damage;

    public function __construct($health, $damage)
    {
        parent::__construct($health);
        $this->damage = $damage;
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function setDamage($damage)
    {
        $this->damage = $damage;
    }

    public function displayOrc()
    {
        $br = "<br>";
        echo "<div class='orc'>🧟‍♂️ Race : Orc ${br}🔸 Vie : " . $this->health . $br
            . "🔸 Dégâts infligés: " . $this->damage . "</div>" . $br;
    }

    public function attack($heroGuy)
    {
        $this->damage = random_int(600, 800);
        if ($heroGuy instanceof Hero) {
            $heroGuy->attacked($this);
        }
    }
}
