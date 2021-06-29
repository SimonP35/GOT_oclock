<?php
include __DIR__ . '/../layout/header.tpl.php';
?>

<main>
    <div class="wrapper">
        <ul class="houses-list">
            
            <?php foreach ($houses as $id => $house) : ?>

                <li class="house-logo" style="background: #<?= $house->colour ?>;">
                    <a href="<?= route('house-list', ['id' => $id + 1 ]); ?>">
                        <img src="/assets/img/houses/<?= $house->image ?>" alt="<?= $house->name ?>">
                    </a>
                </li>

            <?php endforeach ?>

        </ul>
    </div>
</main>

<?php
include __DIR__ . '/../layout/footer.tpl.php';
?>
