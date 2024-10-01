<?php
$arrGameEngine = array("Unity", "Unreal Engine", "GameMaker", "CryEngine", "Phaser");
$arrFilms = array("The Godfather", "Fight Club", "Seven Samurai", "	Braveheart", "Die Hard");
$arrEigenKeuzen = array("Vinland Saga", "Tengoku Daimakyou", "Oshi no Ko", "Mashle", "Hell's Paradise");
$arrSerieGenre = array("Action & Adventure", "Comedie", "Drama", "Sci-Fi", "Fantasy");

$arrMaanden = array("Januari", "Februari", "Maart", "April", "Mei", "Juni", "Juli", "Augustus", "September", "Oktober", "November", "December");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/week3.css">
    <title>Document</title>
</head>

<body>
    <main>
        <!-- Films -->
        <div class="container">
            <form action="verwerk.php" method="post">
                <ul>
                    <li>
                        <label for="Film">Kies een Film:</label>
                        <select name="selTaal1" id="Film">
                            <? foreach ($arrFilms as $films): ?>
                                <?php echo '<option value="' . $films . '">' . $films . '</option>'; ?>
                            <? endforeach ?>
                        </select>
                    </li>
                </ul>
                <li>
                    <button type="submit">Verstuur</button>
                </li>
                </ul>
            </form>
        </div>
        <!-- Genre Serie Lijst -->
        <div class="container">
            <form action="verwerk.php" method="post">
                <ul>
                    <li>
                        <label for="Genre">Kies een serie genre:</label>
                        <select name="selGenre" id="Genre">
                            <? foreach ($arrSerieGenre as $genre): ?>
                                <?php echo '<option value="' . $genre . '">' . $genre . '</option>'; ?>
                            <? endforeach ?>
                        </select>
                    </li>
                </ul>
                <li>
                    <button  type="submit">Verstuur</button>
                </li>
                </ul>
            </form>
        </div>
        <!-- Engine Game Lijst -->
        <div class="container">
            <form action="verwerk.php" method="post">
                <ul>
                    <li>
                        <label for="GameEngine">Kies een Game Engine:</label>
                        <select name="selGameEngine" id="GameEngine">
                            <? foreach ($arrGameEngine as $game): ?>
                                <?php echo '<option value="' . $game . '">' . $game . '</option>'; ?>
                            <? endforeach ?>
                        </select>
                    </li>
                </ul>
                <li>
                    <button  type="submit">Verstuur</button>
                </li>
                </ul>
            </form>
        </div>
        <!-- Eigen Keuze Container -->
        <div class="container">
            <form action="verwerk.php" method="post">
                <ul>
                    <li>
                        <label for="Anime">Kies een anime:</label>
                        <select name="selAnime" id="Anime">
                            <? foreach ($arrEigenKeuzen as $Anime): ?>
                                <?php echo '<option value="' . $Anime . '">' . $Anime . '</option>'; ?>
                            <? endforeach ?>
                        </select>
                    </li>
                </ul>
                <li>
                    <button   type="submit">Verstuur</button>
                </li>
                </ul>
            </form>
        </div>
    </main>
</body>

</html>