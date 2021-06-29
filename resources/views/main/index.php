<?php
include __DIR__.'/../layout/header.tpl.php';
?>

<main>
    <div class="wrapper">
        <ul class="characters-list">
            <?php foreach ($characters as $id => $character) : ?>
                <li class="character-card">
                    <a href="<?= route('character-item', ['id' => $id + 1 ]); ?>">
                        <div class="avatar" style="background: #e3e3e3;">
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

<?php
include __DIR__.'/../layout/footer.tpl.php';
?>
