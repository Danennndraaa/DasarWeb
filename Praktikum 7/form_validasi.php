<!DOCTYPE html>
<html>
    <head>
        <title>Form Input Validasi Dengan AJAX</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    </head>
    <body>
        <h1>Form Input Validasi Dengan AJAX</h1>
        <form id="myForm" method="post" action="proses_validasi.php">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <span id="nama-error" style="color: red;"></span><br>

            <label for="email">Email:</label>
            <input type="text"  id="email" name="email">
            <span id="email-error" style="color: red;"></span><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <span id="password-error" style="color: red;"></span><br>

            <input type="submit" value="submit">
        </form>

        <div id="hasil"></div>

        <script>
             $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password === "") {
                    $("#password-error").text("Password harus diisi.");
                    valid = false;
                } else if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                } else {
                    $("#password-error").text("");
                }

                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            $("#hasil").html(response);
                        },
                        error: function() {
                            $("#hasil").html("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
        });
        </script>
    </body>
</html>