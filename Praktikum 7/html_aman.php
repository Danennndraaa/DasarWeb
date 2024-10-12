<html>
    <head>
        <title>Form Nama Lengkap dan Email</title>
    </head>
    <body>
            <h4>Form Input PHP</h4>
            
            <?php 
            $input = "";
            $output = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input = $_POST['input'];
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

                $output = "Nama : " . $input;
            }
            ?>

            <form method="post" action="">
                <label for="input">Nama:</label>
                <input type="text" name="input" id="input" value="<?php echo $input; ?>" required>
                <br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
            
            <?php 
            if (!empty($output)) {
                echo "<div class='output'>" . $output . "</div>";
            }
            ?>
    </body>
</html>