<?php

// definir constantes
// Globales
define('USERNAME', 'César');
// locales
const APELLIDO = 'Fernández';

// Match
$age = 18;
$comentario = match ($age) {
    0, 1, 2 => "Eres un bebé, " . USERNAME,
    3, 4 => "Eres un niño, " . USERNAME,
    5, 6, 7, 8, 9 => "Eres un niño grande, " . USERNAME,
    10, 11, 12, 13, 14, 15, 16, 17, 18, 19 => "Eres un adolescente, " . USERNAME,
    20, 21, 22, 23, 24, 25, 26, 27, 28, 29 => "Eres un adulto joven, " . USERNAME,
    default => "Eres un adulto, " . USERNAME
};



$comentarioBis = match (true) {
    $age < 2 => "Eres un bebé, " . USERNAME,
    $age < 10 => "Eres un niño, " . USERNAME,
    $age < 18 => "Eres un adolescente, " . USERNAME,
    $age == 18 => "Eres mayor de edad, " . USERNAME,
    $age <18 => "Eres un adulto joven, " . USERNAME,
    default => "Eres un adulto, " . USERNAME
};
?>


<?php echo $comentario; ?>
<?php echo "<hr>";?>
<?php echo $comentarioBis; ?>