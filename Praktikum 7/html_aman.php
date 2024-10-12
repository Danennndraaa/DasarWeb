<html>
    <head>
        <title>Form Nama Lengkap dan Email</title>
    </head>
    <body>
        <h4>Form Input PHP</h4>
        
            <?php 
            $input = "";
            $email = "";
            $output = "";
            $outputEmail = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input = $_POST['input'];
                $email = $_POST['email'];
                $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
                $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');

                // Validasi email
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $output = "Nama: " . $input . "<br>Email: " . $email;
                } else {
                    $outputEmail = "Email tidak valid, silakan masukkan email yang benar.";
                }
            }
            ?>
            
            <form method="post" action="">
                <label for="input">Nama:</label>
                <input type="text" name="input" id="input" value="<?php echo $input; ?>" required>
                <br><br>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="<?php echo $email; ?>" required>
                <br><br>
                <input type="submit" name="submit" value="Submit">
            </form>
            
            <?php 
            if (!empty($output)) {
                echo "<div class='output'>" . $output . "</div>";
            }
            if (!empty($outputEmail)) {
                echo "<div class='error'>" . $outputEmail . "</div>";
            }
            ?>
    </body>
</html>