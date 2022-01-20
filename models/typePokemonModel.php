<?php

require_once "models/helper/dbConnection.php";

function getTypes(){
    $query = conn()->prepare("SELECT * FROM types");

    try {
        $query->execute();
        $pokemons = $query->fetchAll();
        return $pokemons;
    } catch (PDOException $e) {
        return [];
    }
}

function getTypeOneByName($name){
    $query = conn()->prepare("SELECT * FROM types WHERE name = ?");

    try {
        $query->execute([$name]);
        $pokemons = $query->fetch();
        return $pokemons;
    } catch (PDOException $e) {
        return [];
    }
}

function getTypesByStrong($id) {
    $query = conn()->prepare("SELECT types.* FROM types JOIN (SELECT efect_types.typeDefense FROM efect_types WHERE efect_types.typeAttack = ? AND efect_types.effect = 2) AS effects WHERE types.id = effects.typeDefense; ");

    try {
        $query->execute([$id]);
        $pokemons = $query->fetch();
        return $pokemons;
    } catch (PDOException $e) {
        return [];
    }
}

function getTypesByWeak($id) {
    $query = conn()->prepare("SELECT types.* FROM types JOIN (SELECT efect_types.typeAttack FROM efect_types WHERE efect_types.typeDefense = ? AND efect_types.effect = 2) AS effects WHERE types.id = effects.typeAttack; ");

    try {
        $query->execute([$id]);
        $pokemons = $query->fetch();
        return $pokemons;
    } catch (PDOException $e) {
        return [];
    }
}