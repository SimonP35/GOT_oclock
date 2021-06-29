<?php
include __DIR__.'/../layout/header.tpl.php';
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
                <div class="avatar" style="background: #e3e3e3;">
                    <img src="/assets/img/<?= $character->image ?>" alt="<?= $character->first_name ?>">
                </div>
                <div class="infos">
                    <h3>Maisons</h3>
                    <div class="houses">
                        <ul>
                            <li class="house-logo" style="background: #e3e3e3;">
                                <a href="#/house/1">
                                    <img src="./Game of Thrones_files/stark.png" alt="Stark">
                                </a>
                            </li>
                            <li class="house-logo" style="background: #2b3aab;">
                                <a href="#/house/3">
                                    <img src="./Game of Thrones_files/tully.png" alt="Tully">
                                </a>
                            </li>
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
include __DIR__.'/../layout/footer.tpl.php';
?>
