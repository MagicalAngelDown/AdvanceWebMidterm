<?php

function fetchPokeApi($endpoint) {
    $baseUrl = "https://pokeapi.co/api/v2/";
    $url = $baseUrl . $endpoint;

    $response = @file_get_contents($url);

    if ($response === false) {
        return null;
    }

    return json_decode($response, true);
}

function getPokemon($name) {
    $name = strtolower(trim($name));
    $name = rawurlencode($name);

    return fetchPokeApi("pokemon/" . $name);
}

function getPokemonList($limit = 20) {
    return fetchPokeApi("pokemon?limit=" . intval($limit));
}

function getPokemonType($type) {
    $type = strtolower(trim($type));
    $type = rawurlencode($type);

    return fetchPokeApi("type/" . $type);
}

function formatName($name) {
    return ucwords(str_replace("-", " ", $name));
}