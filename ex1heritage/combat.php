<?php
require_once 'classePokemon.php';
require_once 'classeAttackPokemon.php';

$pikachuAttack = new AttackPokemon(5, 15, 2, 60); 
$pikachu = new Pokemon("Pikachu", "484211333de05341e3ec2738ca5805de.jpg", 100, $pikachuAttack);
$bulbizarreAttack = new AttackPokemon(4, 12, 1.5, 40); 
$bulbizarre = new Pokemon("Bulbizarre", "images.jpg", 100, $bulbizarreAttack);

ob_start();
?>

<div class="combat-log">
<?php
$round = 1;
while (!$pikachu->isDead() && !$bulbizarre->isDead()) {
    echo "<div class='round'>";
    echo "<h3>Round $round</h3>";

    $damage1 = $pikachu->attackPokemon->calculAttack();
    $bulbizarre->setHp($bulbizarre->getHp() - $damage1);

    $damage2 = $bulbizarre->attackPokemon->calculAttack();
    $pikachu->setHp($pikachu->getHp() - $damage2);

    echo "<div class='score'>$damage1 - $damage2</div>";

    echo "<div class='pokemon-round'>";
    foreach ([$pikachu, $bulbizarre] as $poke) {
        echo "<div class='pokemon-card'>";
        echo "<img src='{$poke->getUrl()}' alt='{$poke->getName()}'>";
        echo "<h3>{$poke->getName()}</h3>";
        echo "<p>Points: {$poke->getHp()}</p>";
        echo "<p>Min Attack Points: {$poke->attackPokemon->getAttackMin()}</p>";
        echo "<p>Max Attack Points: {$poke->attackPokemon->getAttackMax()}</p>";
        echo "<p>Special Attack: {$poke->attackPokemon->getSpecial()}</p>";
        echo "<p>Probability Special Attack: {$poke->attackPokemon->getProbability()}</p>";
        echo "</div>";
    }
    echo "</div>";
    echo "</div>";

    $round++;
}
?>
<div class="result">
    Le vainqueur est :
    <?= $pikachu->isDead() ? $bulbizarre->getName() : $pikachu->getName(); ?>
</div>
</div>

<?php $combatHTML = ob_get_clean(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Combat Pokémon</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Les combattants</h2>
    <div class="pokemon-container">
        <div class="pokemon-card">
            <img src="<?= $pikachu->getUrl() ?>" alt="<?= $pikachu->getName() ?>">
            <h3><?= $pikachu->getName() ?></h3>
            <p>Points de vie: <?= $pikachu->getHp() ?></p>
            <p>Min Attack Points: <?= $pikachuAttack->attackmin ?></p>
            <p>Max Attack Points: <?= $pikachuAttack->attackmax ?></p>
            <p>Special Attack: <?= $pikachuAttack->special ?></p>
            <p>Probability Special Attack: <?= $pikachuAttack->probability ?>%</p>
        </div>
        <div class="pokemon-card">
            <img src="<?= $bulbizarre->getUrl() ?>" alt="<?= $bulbizarre->getName() ?>">
            <h3><?= $bulbizarre->getName() ?></h3>
            <p>Points de vie: <?= $bulbizarre->getHp() ?></p>
            <p>Min Attack Points: <?= $bulbizarreAttack->attackmin ?></p>
            <p>Max Attack Points: <?= $bulbizarreAttack->attackmax ?></p>
            <p>Special Attack: <?= $bulbizarreAttack->special ?></p>
            <p>Probability Special Attack: <?= $bulbizarreAttack->probability ?>%</p>
        </div>
    </div>

    <?= $combatHTML ?>
</div>
</body>
</html>




