<?php
// Tipos estrictos para que no castee los valores automaticamente
// solo se puede aplicar por archivo
// posicionado al inicio del archivo
declare(strict_types=1);

function render_template(string $template, array $data = [])
{
    // ?? Como le pasamos el data al template?
    // convierte todos los valores del array asociativo en variables
    // $data = ['title'=> 'Hola'];
    // -> extract($data)
    // $title ="Hola";

    extract($data);
    require "templates/$template.php";
}


function get_data(string $url): array
{
    // Solo hacer get
    // global $variable -> para acceder a una variable global, fuera de la funcion
    $result = file_get_contents($url);
    $data = json_decode($result, true);
    return $data;
}


function get_until_message(int $days): string
{
    return match (true) {
        $days < 0   => "Ya se estrenó",
        $days === 0 => "Hoy es el estreno",
        $days === 1 => "Se estrena mañana",
        $days < 7   => "Se estrena esta semana",
        $days < 30  => "Se estrena este mes",
        default     => "Faltan $days días"
    };
}
