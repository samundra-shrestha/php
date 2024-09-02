<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h2>Welcome TO HomePage</h2>
        <ul>
            <?php foreach ($filteredBooks as $book) : ?>

                <li>
                    <a href="<?php echo $book['url'] ?>">
                        <?php echo $book['name'] ?> ( <?php echo $book['price'] ?>)
                    </a>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</main>
<?php require('partials/footer.php') ?>