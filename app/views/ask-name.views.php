<?php require "partials/header.views.php"; ?>
    <h1>Ask your Name</h1>

    <form action="users" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
<?php require 'partials/footer.views.php'; ?>