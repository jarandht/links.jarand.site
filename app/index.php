<?php
// Get the current page from the request URI
$current_page = rtrim($_SERVER['REQUEST_URI'], '/');

$hostname = $_SERVER['SERVER_NAME'];

$current_year = date('Y');
?>


<!DOCTYPE html>
<html lang="en">

<head id="head">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=.9">
</head>

<script src="/js/site_config.js"></script>
<script src="/js/links.js"></script>

<body>
    <section >
        <div id="profile"></div>
        <div id="jsonContainer"></div>
        <p class="copyright">© - <?php echo $hostname; ?> - <?php echo $current_year; ?></p>
    </section>
</body>
</html>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

    :root{
        --dark00: #000;
        --dark10: #111;
        --dark20: #222;
        --light00: #ffffff;
        --light10: #A9A9A9;
    }

    *{
        margin: 0;
        padding: 0;
        text-align: center;
        color: var(--light10);
        font-family: quicksand;
    }
    html{
        height: 100%;
    }
    body{
        height: 100%;
        background: url(https://img.gamehub.community/stars-28.png), linear-gradient(45deg, #111, #111) no-repeat fixed;
    }
    section{
        height: max-content;
        min-height: 100%;
        padding: 0 20px;
        outline: 1px solid var(--dark00);
        margin-inline: auto;
        width: 350px;
        background-color: var(--dark20);
    }
    #profile{
        padding-top: 20px;
    }
    .profileImg{
        margin-inline: auto;
        border-radius: 100%;
        height: 10rem;
        width: 10rem;
        border: 5px solid var(--dark10);
        background-position: center;
        background-size: 100px;
    }
    h1{
        font-weight: 900;
        font-size: 2.3em;
        margin: 20px 0 30px 0;
    }
    a{
        width: 1fr;
        height: 30px;
        padding: 15px;
        margin: 10px 0;
        display: flex;
        align-items: center;
        transition: .1s;
        opacity: .9;
        border-radius: 5px;
        gap: 20px;
        text-decoration: none;
    }
    .copyright{
        padding: 20px;
    }
    #jsonContainer p{
        color: var(--light00);
        font-weight: 900;
        font-size: 20px;
    }
    a img{
        height: 25px;
        width: 25px;
        aspect-ratio: 1 / 1;
        object-fit: contain;
        object-position: 50% 50%;
    }
    a:hover{
        opacity: 1;
        box-shadow: 0 0 2px 0px var(--light10);
    }
</style>