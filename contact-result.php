<?php
    $pageName = 'Contanct result';
    include './templates/header.php';
?>
<main>

    <section>
        <article>
            <h1>Here is data come from the html form:</h1>
            Welcome
            <?php echo $_POST["first-name"]?> ,
            <?php echo $_POST["last-name"]?>.
            <br />
            <?php if ($_POST["email"] != "")
                echo "Yor email is: " . $_POST["email"] ?>
            <br />
            <?php
                  if ($_POST["comments"] != "")
                echo "Your comment: " . $_POST["comments"]; ?>
        </article>
    </section>

</main>
<?php
    include './templates/footer.php';
?>
