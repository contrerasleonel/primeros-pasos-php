<?php


//variables
    $name = "Leo"; //variables
    $isDev = true;
    $age = 60; 

    $isOld = $age > 40;

    
    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');


    $output = "Hola $name con una edad de $age";

    $outputAge = match (true){
        $age < 2 => "Eres un bebé, $name ",
        $age <10 => "Eres un niño, $name",
        $age < 18 =>"Eres un adolescente, $name ",
        $age == 18 => "Eres mayor de edad, $name",
        $age < 30 => "Eres un adulto joven, $name",
        $age < 40 => "Eres un adulto, $name",
        $age <60 => "Eres un adulto viejo, $name",
        default => "Hueles mas a madera que a fruta, $name",
    };

    $bestLenguages = ["PHP", "Javascript", "Pyhton", 1, 2];
    $bestLenguages[3] = "Java";  //sobresc
    $bestLenguages[] = "TypeScript"; //agregar datos


    $person = [
        "name" => "Miguel",
        "age" => 24,
        "isDev" => true, 
        "lenguages" => ["PHP", "Javascript", "Pyhton"]
    ];
    

    $person ["name"] = "Leonardo";
    $person ["lenguages"][] = "Java";

?>

<ul>
    <?php foreach ($bestLenguages as $key => $language) :?>
    <li><?= $key . " ". $language ?></li>
    <?php endforeach; ?>
</ul>

<h3>
    El mejor lenguaje es  <?= $bestLenguages[5] ?>
</h3>

<h2><?= $outputAge ?></h2>



<?php


    if($isOld){
 echo "<h2>Eres viejo, lo siento<h2>";
    } elseif ($isDev) {
        echo "<h2>Eres dev, estas jodido<h2>";
    }
    else{
        echo "<h2>Eres joven!!<h2>";}
?>


<?php if($isOld) :?>
    <h2>Eres viejo, lo siento<h2>
<?php elseif ($isDev): ?>
    <h2>Eres dev, estas jodido<h2>
<?php else : ?>
    <h2>Eres joven!!<h2>
<?php endif ;?>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="200">
<h1>
    <?= $output  ?>
</h1>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>