<?php

require_once __DIR__ . "/../data.php";

?>

<section class="team-list">
    <?php foreach ($teams as $teamName => $teamData) { ?>
        <div class="team-card">
            <a href="<?= $teamData["url"]; ?>" target="_blank">
                <img src="<?= $teamData["logo"]; ?>" alt="<?= $teamName; ?>Logo"></a>
            <h2><?= $teamName; ?> </h2>
            <p> UEFA Ranking: <?= $teamData["uefa-coefficient-ranking"]; ?></p>
        </div>
    <?php } ?>
</section>