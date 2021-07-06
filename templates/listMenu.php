<ul class="<?= $ulClass?>">
    <?php  foreach ($mainMenu as $elementMenu) {?>
        <li class="<?= isCurrentUrl($elementMenu['path'])? 'active' : ''?>">
            <a href="<?= $elementMenu['path']?>" class="btn"><?= cutString($elementMenu['title']) ?></a></li>

    <?php } ?>
</ul>
