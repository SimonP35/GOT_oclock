<?php
include __DIR__ . '/../layout/header.tpl.php';
?>

<main>
    <div class="wrapper">
        <section class="character-page">
            <div class="col-8">
                <h2><?= $character->first_name ?> <?= $character->last_name ?></h2>
                <div class="bio">
                    <h3>Biographie</h3>
                    <p><?= $character->biography ?></p>
                </div>
            </div>
            <div class="col-4">

                <?php foreach ($character->house as $id => $house) : ?>
                    <div class="avatar" style="background: #<?= $house->colour; ?>">
                <?php break 1; endforeach; ?>

                    <img src="/assets/img/<?= $character->image ?>" alt="<?= $character->first_name ?>">
                    </div>
                    <div class="infos">
                        <h3>Maisons</h3>
                        <div class="houses">
                            <ul>

                                <?php foreach ($character->house as $id => $house) : ?>
                                    <li class="house-logo" style="background: #<?= $house->colour ?>;">
                                        <a href="<?= route('house-list', ['id' => $house->id]); ?>">
                                            <img src="/assets/img/houses/<?= $house->image ?>" alt="Stark">
                                        </a>
                                    </li>
                                <?php endforeach ?>

                            </ul>
                        </div>
                        <ul class="meta">
                            <li><span>Rang : </span> <?= $character->title->name ?></li>
                            <li><span>Mère : </span>
                                <?= (!empty($character->mother->last_name) ? $character->mother->last_name : "Mère inconnue") ?>
                                <?= (!empty($character->mother->first_name) ? $character->mother->first_name : "") ?>
                            </li>
                            <li><span>Père : </span>
                                <?= (!empty($character->father->last_name) ? $character->father->last_name : "Père inconnu") ?>
                                <?= (!empty($character->father->first_name) ? $character->father->first_name : "") ?>
                            </li>
                        </ul>
                    </div>
            </div>
        </section>
    </div>
</main>

<?php
include __DIR__ . '/../layout/footer.tpl.php';
?>
