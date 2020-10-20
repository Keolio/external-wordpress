<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php $logo = get_field('logo', 'option'); ?>
                <img src="<?php echo $logo['url'] ?>" alt="Logo">
            </div>
            <div class="col-12 col-md-6">
                <?php wp_nav_menu(['theme_location' => 'footer']); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>