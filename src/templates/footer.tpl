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
            <a href="https://www.facebook.com/CESIingenieurs/" class="face" title="Facebook"><i class="fa-brands fa-facebook fa-3x a face"></i></a>
            <a href="https://twitter.com/cesi_officiel?lang=fr" class="twit" title="Twitter"><i class="fa-brands fa-twitter fa-3x a twit"></i></a>
            <a href="https://www.instagram.com/cesi_officiel/?hl=fr" class="insta" title="Instagram"><i class="fa-brands fa-instagram fa-3x a insta"></i></a>
            <a href="https://fr.linkedin.com/school/cesi-officiel/" class="linked" title="LinkedIn"><i class="fa-brands fa-linkedin fa-3x a linked"></i></a>
        </div>

        <div class="bas">
            <p id="textbas">© 2023 C'Stage</p>
            <a href="index.php?p=CDC" class="bot" id="centre2">Centre de confidentialité</a>
            <a href="index.php?p=cookie" class="bot" id="cookie">Cookies</a>
            <a href="index.php?p=CGU" class="bot" id="condition">Conditions d'utilisations</a>
        </div>
    </div>
{/block}