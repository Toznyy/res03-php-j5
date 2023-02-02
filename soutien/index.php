<?php 

require("operations.php");

$tab = [];

if (isset($_POST["nb1"])) {
    $tab["nb1"] = $_POST["nb1"];
};

if (isset($_POST["nb2"])) {
    $tab["nb2"] = $_POST["nb2"];
};

if (isset($_POST["operation"])) {
    $tab["operation"] = $_POST["operation"];
};

if ($tab["operation"] === "addition") {
    $result = add($_POST["nb1"], $_POST["nb2"]);
}


if ($tab["operation"] === "soustraction") {
    $result = substract($_POST["nb1"], $_POST["nb2"]);
}

if ($tab["operation"] === "multiplication") {
    $result = multiply($_POST["nb1"], $_POST["nb2"]);
}

if ($tab["operation"] === "division") {
    $result = divide($_POST["nb1"], $_POST["nb2"]);
}

if ($tab["operation"] === "modulo") {
    $result = modulo($_POST["nb1"], $_POST["nb2"]);
}

if ($tab["operation"] === "power") {
    $result = power($_POST["nb1"], $_POST["nb2"]);
}


require ("form.phtml");
?>