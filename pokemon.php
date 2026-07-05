<?php
$pageTitle = "Pokémon Search";
include "includes/header.php";
include "includes/nav.php";
include "includes/functions.php";

$search = $_GET["search"] ?? "";
$pokemon = null;
$error = "";

if (!empty($search)) {
    $pokemon = getPokemon($search);

    if (!$pokemon) {
        $error = "No Pokémon found. Try another name.";
    }
} else {
    $pokemonList = getPokemonList(20);
}
?>

<main class="container my-5">
    <h1>Pokémon Search</h1>
    <p>Search for a Pokémon by name to view live data from PokéAPI.</p>

    <form method="GET" class="mb-4">
        <div class="input-group">
            <input 
                type="text" 
                name="search" 
                class="form-control" 
                placeholder="Try pikachu, charizard, eevee..."
                value="<?php echo htmlspecialchars($search); ?>"
            >
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <?php if ($error): ?>
        <div class="alert alert-danger">
            <?php echo htmlspecialchars($error); ?>
        </div>
    <?php endif; ?>

    <?php if ($pokemon): ?>
        <div class="card shadow-sm" style="max-width: 400px;">
            <img 
                src="<?php echo htmlspecialchars($pokemon["sprites"]["front_default"]); ?>" 
                class="card-img-top p-4" 
                alt="<?php echo htmlspecialchars($pokemon["name"]); ?>"
            >

            <div class="card-body">
                <h2 class="card-title">
                    <?php echo formatName($pokemon["name"]); ?>
                </h2>

                <p><strong>Height:</strong> <?php echo $pokemon["height"]; ?></p>
                <p><strong>Weight:</strong> <?php echo $pokemon["weight"]; ?></p>
                <p><strong>Base Experience:</strong> <?php echo $pokemon["base_experience"]; ?></p>

                <a 
                    href="details.php?name=<?php echo urlencode($pokemon["name"]); ?>" 
                    class="btn btn-outline-primary"
                >
                    View Details
                </a>
            </div>
        </div>
    <?php elseif (!empty($pokemonList["results"])): ?>
        <div class="row">
            <?php foreach ($pokemonList["results"] as $item): ?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo formatName($item["name"]); ?>
                            </h5>
                            <a 
                                href="details.php?name=<?php echo urlencode($item["name"]); ?>" 
                                class="btn btn-sm btn-primary"
                            >
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>

<?php include "includes/footer.php"; ?>