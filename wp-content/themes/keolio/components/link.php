<?php 
$link = get_sub_field('link');
$link_target = $link['target'] ? $link['target'] : '_self';
?>

<div class="link">
    <div class="container">
        <div class="row">
            <div class="col-12 link__link" style="text-align:<?= get_sub_field('button_align') ?>">
                <a target="<?= $link_target ?>" class="btn btn-<?= get_sub_field('type'); ?>" href="<?= $link['url']; ?>"><?php echo $link['title']; ?></a>
            </div>
        </div>
    </div>
</div>