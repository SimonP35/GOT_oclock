<?php
include __DIR__ . '/../layout/header.tpl.php';
?>

<main>
    <div class="wrapper">
        <h2>Maison <?= $house_has_characters->id ?></h2>
        <ul class="characters-list">
            <?php foreach ($characters as $character) : ?>

                <li class="character-card">
                    <a href="#/character/10">

                        <div class="avatar" style="background: #<?= $house->colour ?>;">
                            <img src="/assets/img/<?= $character->image ?>" alt="Cersei">
                        </div>
                        <div class="name">
                            <?= $character->first_name ?> <?= $character->last_name ?>
                        </div>
                    </a>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php
include __DIR__ . '/../layout/footer.tpl.php';
?>
