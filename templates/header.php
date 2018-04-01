<?php
if (!isset($pageName)) {
    $pageName = '';
}
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php echo $pageName; ?>
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./styles/styles.css">
    </head>

    <body>
        <div class="wrapper">
            <header>
                <div class="header-row-01">
                    <a href="./index.html"><img class="logo" src="./images/comp1950_logo.svg"></a>
                    <button class="hamburger">
                <span class="hamburger-content">
                    <span class="hamburger-icon" tabindex="-1">&#9776;</span>
                    <span class="hamburger-text">Menu</span>
                </span>
                </button>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="./index.html">home</a>
                        </li>
                        <li>
                            <a href="./about-the-course.html">about the course</a>
                        </li>
                        <li>
                            <a href="./schedule.html"> schedule</a>
                        </li>
                        <li>
                            <a href="./contact-us.html">contact us</a>
                        </li>
                    </ul>
                </nav>
            </header>
