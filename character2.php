<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact Characters</title>
    <style>
        <?php include 'style.css'; ?> <!-- Sisipkan style.css -->
    </style>
</head>
<body>
    <div class="header">
        <h1>Genshin Wiki</h1>
    </div>

    <div class="banner">
        <img src="Inazuma City.jpeg" alt="Banner">
    </div>

    <h2 class="characters-title">Characters</h2>

    <div class="character-container">
        <?php
        // Daftar karakter
        $characters = array(
            array(
                'name' => 'Hu Tao',
                'image' => 'https://i2.wp.com/genshinbuilds.aipurrjects.com/genshin/characters/hu_tao/image.png?strip=all&quality=100&w=140',
                'id' => 'HuTao'
            ),
            array(
                'name' => 'Raiden Shogun',
                'image' => 'https://i2.wp.com/genshinbuilds.aipurrjects.com/genshin/characters/raiden_shogun/image.png?strip=all&quality=100&w=140',
                'id' => 'RaidenShogun'
            ),
            array(
                'name' => 'Zhongli',
                'image' => 'https://i2.wp.com/genshinbuilds.aipurrjects.com/genshin/characters/zhongli/image.png?strip=all&quality=100&w=140',
                'id' => 'Zhongli'
            )
        );

        // Tampilkan karakter
        foreach ($characters as $character) {
            echo '<div class="character" onclick="openCharacterPage(\'' . $character['id'] . '\')">';
            echo '<img src="' . $character['image'] . '" alt="' . $character['name'] . '">';
            echo '<p class="character-name">' . $character['name'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

    <div id="character-details">
        <?php include 'character.php'; ?> <!-- Sisipkan character.php -->
    </div>

    <script>
        function openCharacterPage(characterName) {
            fetch(`data/${characterName.toUpperCase()}.JSON`)
                .then(response => response.text())
                .then(data => {
                    const characterDetailsDiv = document.getElementById('character-details');
                    characterDetailsDiv.innerHTML = `<pre>${data}</pre>`;
                })
                .catch(error => console.error('Error fetching character details:', error));
        }
    </script>
</body>
</html>
