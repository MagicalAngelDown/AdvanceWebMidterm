<?php
$pageTitle = "Browse by Type";
include "includes/header.php";
include "includes/nav.php";
include "includes/function.php";

$selectedType = $_GET["type"] ?? "";
$typeData = null;

if (!empty($selectedType)) {
    $typeData = getPokemonType($selectedType);
}

$types = [
    "normal",
    "fire",
    "water",
    "grass",
    "electric",
    "ice",
    "fighting",
    "poison",
    "ground",
    "flying",
    "psychic",
    "bug",
    "rock",
    "ghost",
    "dragon",
    "dark",
    "steel",
    "fairy"
];
?>

<main class="container my-5">
    <h1>Browse Pokémon by Type</h1>
    <p>Select a type to view Pokémon from that category.</p>

    <div class="mb-4">
        <?php foreach ($types as $type): ?>
            <?php
                $isSelected = ($selectedType === $type);
                $typeClass = "type-" . $type;

                if ($isSelected) {
                    $buttonClass = "btn type-btn selected-type " . $typeClass;
                } else {
                    $buttonClass = "btn btn-outline-primary type-btn";
                }
            ?>

            <a 
                href="types.php?type=<?php echo urlencode($type); ?>" 
                class="<?php echo htmlspecialchars($buttonClass); ?>"
            >
                <?php echo formatName($type); ?>
            </a>
        <?php endforeach; ?>
    </div>

    <?php if ($typeData): ?>
        <h2 class="mb-4">
            <?php echo formatName($selectedType); ?> Pokémon
        </h2>

        <div class="row">
            <?php 
                $pokemonEntries = array_slice($typeData["pokemon"], 0, 24);

                foreach ($pokemonEntries as $entry): 
                    $pokeName = $entry["pokemon"]["name"];
            ?>
                <div class="col-md-3 mb-3">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5><?php echo formatName($pokeName); ?></h5>

                            <a 
                                href="details.php?name=<?php echo urlencode($pokeName); ?>" 
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