<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <article>
            <h1><?= $post->title; ?></h1>
            <p><?= $post->body; ?></p>
        </article>

        <a href="/">На главную</a>
    </div>
    <script src="../assets/js/script.js"></script>
</body>

</html>