<?php
class Hero extends Character

{
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    public function __construct($health = 100, $weapon = "Spatule", $weaponDamage = 25, $shield = "Couette", $shieldValue = 12)
    {
        parent::__construct($health);
        $this->weapon = $weapon;
        $this->weaponDamage = $weaponDamage;
        $this->shield = $shield;
        $this->shieldValue = $shieldValue;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }

    public function setWeaponDamage($weaponDamage)
    {
        $this->weaponDamage = $weaponDamage;
    }

    public function getShield()
    {
        return $this->shield;
    }

    public function setShield($shield)
    {
        $this->shield = $shield;
    }

    public function getShieldValue()
    {
        return $this->shieldValue;
    }

    public function setShieldValue($shieldValue)
    {
        $this->shieldValue = $shieldValue;
    }

    public function displayHero()
    {
        $br = "<br>";
        echo "<div class='hero'>🦸‍♀️ Race : Héros ${br}🔸 Vie : " . $this->health . $br
            . "🔸 Arme: " . $this->weapon . $br
            . "🔸 Dégats de l'arme: " . $this->weaponDamage . $br
            . "🔸 Bouclier: " . $this->shield . $br
            . "🔸 Protection du bouclier: " . $this->shieldValue . "</div>" . $br;
    }

    public function attacked($meanGuy)
    {
        if ($meanGuy instanceof Ennemy) {
            if ($meanGuy->getDamage() - $this->shieldValue > 0) {
                $this->setHealth($this->health - ($meanGuy->getDamage() - $this->shieldValue));
            }
            $this->rage += 30;
            $this->displayStats($meanGuy);
            if ($this->rage >= 100 && $meanGuy->getHealth() > 0 && $this->health > 0) {
                $this->strikesBack($meanGuy);
            }
        }
    }

    public function strikesBack($meanGuy)
    {
        if ($meanGuy instanceof Ennemy) {
            $br = "<br>";
            $meanGuy->attacked($this->weaponDamage);
            echo "💢 Le héros riposte! L'ennemi prend " . $this->weaponDamage . " de dégâts et a dorénavant une vie de "
                . $meanGuy->getHealth() . " PV." . $br . $br;
        }
    }

    private function displayStats($meanGuy)
    {
        if ($meanGuy instanceof Ennemy) {
            $br = "<br>";
            echo "<div class='fight'>💥 L'ennemi a attaqué notre héros avec succès! 💥" . $br
                . "🔸 Dégâts de l'ennemi: " . $meanGuy->getDamage() . $br
                . "🔸 Dégâts absorbés par le bouclier: " . $this->shieldValue . $br
                . "🔸 Dégâts non absorbés: " . ($meanGuy->getDamage() - $this->shieldValue) . $br
                . "🔸 Santé restante du Héros: " . $this->health . $br
                . "🔸 Rage actuelle du Héros: " . $this->rage . "</div>" . $br;
        }
    }
}
