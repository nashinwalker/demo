<?php require(__DIR__ . '/../partials/head.php'); ?>
<?php require(__DIR__ . '/../partials/nav.php'); ?>
<?php require(__DIR__ . '/../partials/banner.php'); ?>



<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>
            <a href="/notes" class="text-blue-500 hover:underline">Go back...</a>
        </p><br>

        <p><?= htmlspecialchars($note['body']); ?></p>

        <form method="POST" class="mt-4">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button type="submit" class="bg-red-500 text-white p-2 rounded">Delete</button>
        </form>
    </div>
</main>

<?php require(__DIR__ . '/../partials/footer.php');?>