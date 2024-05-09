<?php

$bestLanguages = ['PHP', 'JavaScript', 'Python', 'Java', 'C#'];
$bestLanguages[] = 'TypeScript';
$bestLanguages[3] = 'JS';


echo '<pre>';
print_r($bestLanguages);
echo '</pre>';
?>

<ul>
    * Interar con índice
        <?php foreach ($bestLanguages as $key=>$language) : ?>
        <li><?= $key." - ". $language ?></li>
    <?php endforeach; ?>
</ul>

<?php
$person = [
    'name' => 'John',
    'lastname' => 'Doe',
    'age' => 30,
    'languages' => ['PHP', 'JavaScript', 'Python', 'Java', 'C#']
];
$person['age'] = 31;
$person['languages'][] = 'TypeScript';

?>