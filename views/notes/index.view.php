<?php require(__DIR__ . '/../partials/head.php');?>
<?php require(__DIR__ . '/../partials/nav.php');?>
<?php require(__DIR__ . '/../partials/banner.php');?>

 
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 h-fit">
      <ul class="flex flex-col gap-2" >
     
        <?php foreach($notes as $note):?>
          <a href="/note?id=<?= $note['id']; ?>" >
            <li class="text-blue-500 px-4 py-3 border-2 rounded-lg border-slate-200 hover:cursor-pointer hover:bg-slate-200">

                <?= htmlspecialchars($note['body']); ?>
            </li>
        </a>
        <?php endforeach; ?>
      </ul>
      <p class="mt-6">
        <a href="/notes/create" class="font-semibold p-2 border-indigo-600 text-sm rounded-md bg-indigo-600 hover:bg-indigo-500 text-white">Create Note</a>
      </p>
      
    </div>
  </main>
<?php require base_path('views/partials/footer.php');?>