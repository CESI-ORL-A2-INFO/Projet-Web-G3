{extends file="index.tpl"}
{block name="head"}
    <link rel="stylesheet" href="navbar.css">
    {block name="include"}
        
    {/block}
{/block}

{block name=navbar}
    <header class="navbar">
        <div class="wrapleft">
            <a href="./index.php" class="logo"><img src="./logo.png" alt="logo" class="logo"></a>
            <form action="index.php?" method="get" id="search">
                <input type="search" id="searchbar" name="search" placeholder="Recherche...">
                <button id="butSearch" name="p" value="search"><i class="fa-solid fa-magnifying-glass fa-2x"
                        style="margin-left: -5px"></i></button>
            </form>
        </div>
        <a href="./index.php" id="nom">CESIstage</a>
        <i class="fa-solid fa-house fa-2x"></i>
        <i class="fa-solid fa-square-plus fa-2x"></i>
        <i class="fa-solid fa-bookmark fa-2x"></i>
        <i class="fa-solid fa-user fa-2x"></i>
    </header>
{/block}
