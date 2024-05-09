<?php
// tipos estrictos evitamos tipos de datos incorrecto
declare(strict_types=1);

class SuperHero
{
    //** Version antigua */
    // // propiedades
    // public $name;
    // public $powers;
    // public $planet;
    // public $level;

    // // Constructor
    // public function __construct($name, $powers, $planet)
    // {
    //     $this->name = $name;
    //     $this->powers = $powers;
    //     $this->planet = $planet;
    //     $this->level = 0;
    // }

    // promoted properties --> PHP 8
    public function __construct(
       private string $name,
       private array $powers,
       private string $planet,
       private int $level = 0
    ) {
    }


    // métodos
    public function attack()
    {
        return "¡$this->name ataca con sus poderes";
    }

    public function show_all(){
        // recupera todas las variables del objeto en un array
        return get_object_vars($this);
    }

    public function description()
    {
        // convertimos el array en texto (separador,array)
        $powers = implode(", ", $this->powers);
        return "El superhéroe $this->name tiene los siguientes poderes: $powers y proviene del planeta $this->planet";
    }

public static function random(){
    $names = ['Thor', 'Iron Man', 'Spider-Man', 'Wonder Woman', 'Black Widow'];
    $powers = ['Super fuerza', 'Volar', 'Telarañas', 'Regeneración', 'Espionage'];
    $planets = ['Asgard', 'Tierra', 'Krypton', 'Themyscira'];
    
    $randomName = $names[array_rand($names)];
    $randomPowers = [array_rand($powers)];
    $randomPlanet = $planets[array_rand($planets)];
    
    return new self($randomName,$randomPowers,$randomPlanet);
}


}

// Sin uso del constructor declarado
// $hero = new SuperHero();    
// $hero->name = "Batman";
// $hero->powers = "Inteligencia, fuerza y tecnología";
// $hero->planet = "Tierra";
// echo $hero->description();

$batman = new SuperHero("Batman", ["Inteligencia", "Fuerza y tecnología"], "Tierra");
$superman = new SuperHero("Superman", ["Super fuerza", "Volar", "Visión laser"], "Krypton");

//llamada al método estatico
$randomHero= SuperHero::random();
echo $randomHero->description();
echo "<hr>";
//Llamada a métodos dinamicos
echo $batman->description();
echo "<hr>";
var_dump($superman->show_all());
echo "<hr>";

