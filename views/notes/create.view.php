<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php require base_path('views/partials/banner.php') ?>
<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <form method="POST">
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-base font-semibold leading-7 text-gray-900">Profile</h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>

          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="col-span-full">
              <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
              <div class="mt-2">
                <input type="text" name="title" id="title" autocomplete="given-name" class="p-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" 
                value="<?= $_POST['title'] ?? '' ?>">
              </div>
              <?php if (isset($errors['title'])) : ?>
                <p class="mt-3 text-sm leading-6 text-red-600 text-capitalize"><?= $errors['title'] ?></p>
              <?php endif; ?>
            </div>
            <div class="col-span-full">
              <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
              <div class="mt-2">
                <textarea id="body" name="body" rows="3" class="block p-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $_POST['body'] ?? '' ?></textarea>
              </div>
              <?php if (isset($errors['body'])) : ?>
                <p class="mt-3 text-sm leading-6 text-red-600 text-capitalize"><?= $errors['body'] ?></p>
              <?php endif; ?>
            </div>


          </div>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/notes" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
        <button type="submit" name="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
      </div>
    </form>


  </div>
</main>
<?php require base_path('views/partials/footer.php') ?>