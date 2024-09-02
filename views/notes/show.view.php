<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- <h2>Welcome TO Notes Page</h2> -->

        <h2 class="text-xl mb-5"> <?php echo htmlspecialchars($note['title']) ?></h2>
        <p>

            <?php echo htmlspecialchars($note['body'])?>
        </p>
        <p>
            <a href="/notes" class="mt-10 p-2 flex bg-blue-500 fit-width text-white rounded-md hover:bg-blue-100 text-red " style="width:fit-content"> GO BACK</a>
        </p>
    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>