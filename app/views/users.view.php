<?php require('partials/header.view.php'); ?>

    <h1>Users page</h1>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user->name; ?></li>
        <?php endforeach; ?>
    </ul>

    <h1>Submit Your name</h1>

    <form method="POST" action="/users">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>

<?php require('partials/footer.view.php'); ?>