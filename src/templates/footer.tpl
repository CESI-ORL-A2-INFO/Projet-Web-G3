{extends file="index.tpl"}
{block name="head"}
    <link rel="stylesheet" href="./css/footer.css">
    {block name="navbarcss"}

    {/block}
{/block}

{block name="footer"}
    <div class="foot">
        <div class="text">
            <h2 id="join">Rejoignez nous</h2>
            <p id="message1">Venez nous rejoindre sur le réseau de votre choix pour</p>
            <p id="message2">pouvoir suivre l'actualité CESI.</p>
        </div>
        <div class="social">
            <a href="./index.php?p=home" class="face"><i class="fa-brands fa-facebook fa-3x a face"></i></a>
            <a href="./index.php?p=home" class="twit"><i class="fa-brands fa-twitter fa-3x a twit"></i></a>
            <a href="./index.php?p=home" class="insta"><i class="fa-brands fa-instagram fa-3x a insta"></i></a>
            <a href="./index.php?p=home" class="linked"><i class="fa-brands fa-linkedin fa-3x a linked"></i></a>
        </div>
        <div class="bas">
            <p id="textbas">© 2023 C'Stage</p>
            <a href="" class="bot" id="centre">Centre de confidentialité</a>
            <a href="" class="bot" id="cookie">Cookies</a>
            <a href="" class="bot" id="condition">Conditions d'utilisations</a>
        </div>
    </div>
{/block}