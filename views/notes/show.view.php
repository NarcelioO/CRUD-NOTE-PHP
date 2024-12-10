<?php require(__DIR__ . '/../partials/head.php');?>
<?php require(__DIR__ . '/../partials/nav.php');?>
<?php require(__DIR__ . '/../partials/banner.php');?>

 
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <a href="/notes" class="text-blue-500 hover:underline">go back...</a>
         <p>
          <?= htmlspecialchars($note['body']) ?>
         </p>
         <form action="" class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id']?>">
            <button type="submit" class="text-sm text-red-500 font-semibold border-2 p-2 border-red-500 text-sm rounded-md hover:bg-red-500 hover:text-white">Delete</button>
         </form>
    </div>
  </main>
  <?php require base_path('views/partials/footer.php');?>