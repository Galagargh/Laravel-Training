<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <title>Test</title>
</head>
<body>

    <?php foreach ($posts as $post) : ?>
    <article>
        <?php echo $post; ?>
    </article>
    <?php endforeach; ?>

</body>
</html>
