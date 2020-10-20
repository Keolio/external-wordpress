<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="icon" type="image/png" href="<?php echo get_asset_dir('images/favicon.png'); ?>" />
    <!-- Import Libs -->
    <script src="https://kit.fontawesome.com/1582bd6f0c.js" crossorigin="anonymous"></script>
    <!-- WP Head -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="header" id="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__inner__logo">
                    <?php $logo = get_field('logo', 'option'); ?>
                    <a href="/"><img src="<?php echo $logo['url'] ?>" alt="Logo"></a>
                </div>
                <div class="header__inner__burger d-xl-none">
                    <button type="button"><i class="fa fa-bars"></i></button>
                </div>
                <div class="header__inner__navigation d-xl-flex">
                    <?php wp_nav_menu(['theme_location' => 'main']); ?>
                </div>
                <div class="header__inner__contact d-none d-md-flex">
                    <a class="btn btn-secondary" href="#">Contact</a>
                </div>
            </div>
        </div>
    </header>
