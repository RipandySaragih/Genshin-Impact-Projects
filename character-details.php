<?php
if (isset($_GET['characterName'])) {
    $characterName = $_GET['characterName'];
    $characterData = file_get_contents("data/{$characterName}.json");

    if ($characterData === false) {
        echo "Character data not found.";
    } else {
        $character = json_decode($characterData, true);

        echo "<h2>" . htmlspecialchars($character['name']) . "</h2>";
        echo "<img src='" . htmlspecialchars($character['image']) . "' alt='" . htmlspecialchars($character['name']) . "'>";
        echo "<p>" . htmlspecialchars($character['description']) . "</p>";
    }
} else {
    echo "No character selected.";
}
?>
