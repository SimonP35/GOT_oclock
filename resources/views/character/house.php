<?php
include __DIR__ . '/../layout/header.tpl.php';
?>

<main>
    <div class="wrapper">
        <h2>Maison <?= $house->name ?></h2>
        <ul class="characters-list">
            <?php foreach ($house->character as $character) : ?>

                <li class="character-card">
                    <a href="#/character/10">

                        <div class="avatar" style="background: #<?= $house->colour ?>;">
                            <img src="/assets/img/<?= $character->image ?>" alt="<?= $character->first_name ?>">
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
