<!DOCTYPE html>
<html lang="fr">

<head>
    <script src="https://kit.fontawesome.com/a82ab0d8d5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" href="./icons/apple-icon-180.png">
    <link rel="manifest" href="manifest.json">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <meta name="description" content="Site d'offre de stage du CESI.">
    <meta name="theme-color" content="#FFFFFF" />
    {block name="head"}{/block}
    <title>Home</title>
</head>

<body>
    {block name=navbar}{/block}
    <main>
        {block name=content}

        {/block}
    </main>
    <footer>
        {block name="footer"}

        {/block}
    </footer>
    <script type="text/javascript" src="service-worker.js"></script>
    {block name="script"}
        
    {/block}
</body>