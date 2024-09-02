<?php require(view('partials/head.php')) ?>
<?php require(view('partials/nav.php')) ?>
<?php require(view('partials/banner.php')) ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h2>Welcome TO Notes Page</h2>

        <ul>
            <?php foreach ($notes as $note) : ?>

                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?php echo htmlspecialchars($note['title']) ?>
                    </a>
                </li>

            <?php endforeach; ?>
        </ul>

        <p class="mt-10">
            <a href="/notes/create" class="text-blue-500 p-2  border-2  border-blue-500 rounded  hover:text-white hover:bg-blue-500">Create Note</a>
        </p>
    </div>
</main>
<?php require(view('partials/footer.php')) ?>