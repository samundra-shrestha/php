<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- <h2>Welcome TO Notes Page</h2> -->

        <h2 class="text-xl mb-5"> <?php echo htmlspecialchars($note['title']) ?></h2>
        <p>

            <?php echo htmlspecialchars($note['body']) ?>
        </p>
        <div class="flex gap-5">
            <p>
                <a href="/notes" class="mt-10 p-2 flex bg-blue-500 fit-width text-white rounded-md hover:bg-blue-100 text-red " style="width:fit-content"> GO BACK</a>
            </p>
            <form method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="mt-10 p-2 flex bg-red-500 fit-width text-white rounded-md hover:bg-red-300 text-red " style="width:fit-content"> Delete</button>
            </form>
            <p>
                <a href="/note/edit?id=<?= $note['id'] ?>" class="mt-10 p-2 flex bg-gray-500 fit-width text-white rounded-md hover:bg-gray-400 text-red "> Edit</a>
            </p>

        </div>


    </div>
</main>
<?php require base_path('views/partials/footer.php') ?>