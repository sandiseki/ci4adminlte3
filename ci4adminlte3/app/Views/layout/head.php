<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <!-- CSS -->
    <?php foreach ($css as $c):?>
        <link rel="stylesheet" href='<?= $c ?>'>
    <?php endforeach;?>

</head>