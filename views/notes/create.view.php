<?php require(__DIR__ . '/../partials/head.php');?>
<?php require(__DIR__ . '/../partials/nav.php');?>
<?php require(__DIR__ . '/../partials/banner.php');?>
  <main>
      <?php if(!empty($errors)): ?>
          <?php foreach($errors as $error): ?>
            <p class="w-full bg-red-200	p-4 text-sm	font-medium border border-red-300"><?= $error; ?></p>
          <?php endforeach; ?>
      <?php endif; ?>
      <?php if(!empty($sucess)): ?>
          <?php foreach($sucess as $msg): ?>
            <p class="w-full bg-green-200	p-4 text-sm	font-medium border border-green-300"><?= $msg; ?></p>
          <?php endforeach; ?>
      <?php endif; ?>
      
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            
        <form method="POST" action="/notes">
          <div class="space-y-12">

                <div class="col-span-full">
                  <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                  <div class="mt-2">
                    <textarea 
                    id="body" 
                    name="body" 
                    rows="8" 
                    required
                    placeholder="Here's an idea for a note..."
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    ><?= $_POST['body'] ?? '' ?></textarea>

                 
                  </div>
                </div>
        
            </div>


          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
          </div>
        </form>

      
    </div>
  </main>
  <?php require base_path('views/partials/footer.php');?>