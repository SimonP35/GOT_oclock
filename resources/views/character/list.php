<?php
use Illuminate\Support\Facades\Route;
include __DIR__ . '/../layout/header.tpl.php';
?>

<?php if ($viewName == "index") : ?>

<main>
    <div class="wrapper">
        <ul class="characters-list">
            <?php foreach ($characters as $id => $character) : ?>
                <li class="character-card">
                    <a href="<?= route('character-item', ['id' => $id + 1]); ?>">

                    <?php foreach ($character->house as $house) : ?>

                        <div class="avatar" style="background: #<?= $house->colour ?>;">

                    <?php break 1; endforeach; ?>

                            <img src="/assets/img/<?= $character->image ?>" alt="<?= $character->first_name ?>">
                        </div>
                        <div class="name">
                            <?= $character->first_name ?> <?= $character->last_name ?>
                        </div>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
</main>

<?php elseif ($viewName == "house") : ?>

    <main>
    <div class="wrapper">
        <h2>Maison <?= $house->name ?></h2>
        <ul class="characters-list">

            <?php foreach ($house->character as $character) : ?>

                <li class="character-card">
                    <a href="<?= route('character-item', ['id' => $character->id ]); ?>">
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

<?php endif ?>

<?php

include __DIR__ . '/../layout/footer.tpl.php';
?>
