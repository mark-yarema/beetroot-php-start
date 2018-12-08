<?php require "partials/header.views.php"; ?>
    <h1>Home</h1>
    <h1>
        <?= ComposerClass::status()?>
    </h1>

    <form action="save-name" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
<?php require 'partials/footer.views.php'; ?>

