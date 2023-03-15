<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/a82ab0d8d5.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./home/home.css">
    {block name="head"}{/block}
    <title>Home</title>
</head>

<body>
    <header class="navbar">
        <div class="wrapleft">
            <a href="./index.php" id="logo"><img src="./logo.png" alt="logo" id="logo"></a>
            <input type="search" id="searchbar" placeholder="Recherche...">
            <form action="" method="get" id="search">
                <button id="butSearch"><i class="fa-solid fa-magnifying-glass fa-2x"
                        style="margin-left: -5px"></i></button>
            </form>
        </div>
        <a href="./index.php" id="nom">CESIstage</a>
        <i class="fa-solid fa-house fa-2x"></i>
        <i class="fa-solid fa-square-plus fa-2x"></i>
        <i class="fa-solid fa-bookmark fa-2x"></i>
        <i class="fa-solid fa-user fa-2x"></i>
    </header>
    <main>
        {block name="content"}{/block}
    </main>
    <footer>

    </footer>
</body>

</html>