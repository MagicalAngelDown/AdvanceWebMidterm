<?php
$pageTitle = "Pokémon Details";
include "includes/header.php";
include "includes/nav.php";
include "includes/functions.php";

$name = $_GET["name"] ?? "";
$pokemon = null;

if (!empty($name)) {
    $pokemon = getPokemon($name);
}
?>

<main class="container my-5">

    <?php if (!$pokemon): ?>
        <div class="alert alert-warning">
            Pokémon not found.
        </div>
        <a href="pokemon.php" class="btn btn-primary">Back to Search</a>
    <?php else: ?>

        <div class="row">
            <div class="col-md-4">
                <img 
                    src="<?php echo htmlspecialchars($pokemon["sprites"]["front_default"]); ?>" 
                    class="img-fluid bg-light rounded p-4 shadow-sm"
                    alt="<?php echo htmlspecialchars($pokemon["name"]); ?>"
                >
            </div>

            <div class="col-md-8">
                <h1><?php echo formatName($pokemon["name"]); ?></h1>

                <p><strong>ID:</strong> #<?php echo $pokemon["id"]; ?></p>
                <p><strong>Height:</strong> <?php echo $pokemon["height"]; ?></p>
                <p><strong>Weight:</strong> <?php echo $pokemon["weight"]; ?></p>

                <h3>Types</h3>
                <?php foreach ($pokemon["types"] as $type): ?>
                    <span class="badge bg-primary">
                        <?php echo formatName($type["type"]["name"]); ?>
                    </span>
                <?php endforeach; ?>

                <h3 class="mt-4">Abilities</h3>
                <ul>
                    <?php foreach ($pokemon["abilities"] as $ability): ?>
                        <li><?php echo formatName($ability["ability"]["name"]); ?></li>
                    <?php endforeach; ?>
                </ul>

                <h3 class="mt-4">Stats</h3>
                <ul>
                    <?php foreach ($pokemon["stats"] as $stat): ?>
                        <li>
                            <?php echo formatName($stat["stat"]["name"]); ?>:
                            <?php echo $stat["base_stat"]; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <a href="pokemon.php" class="btn btn-outline-primary mt-3">Back to Search</a>
            </div>
        </div>

    <?php endif; ?>

</main>

<?php include "includes/footer.php"; ?>