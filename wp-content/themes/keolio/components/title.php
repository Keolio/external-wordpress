<div class="title">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title__title">
                    <?php if (!empty(get_sub_field('type'))): ?>
                    <<?php echo get_sub_field('type') ?> class="text-<?php echo get_sub_field('align'); ?>">
                    <?php echo get_sub_field('title') ?>
                </<?php echo get_sub_field('type') ?>>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
</div>
