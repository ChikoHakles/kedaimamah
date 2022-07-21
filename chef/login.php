<?php
include "../koneksi.php";
include "../tambahan.html";
?>
<body>
    <div class="container">
        <form method="post" action="input-login.php">
            <div class="well" style="margin-top: 10%">
                <h1 class="center-block"> LOGIN CHEF </h1>
                <hr>
                <input class="h3" style="width: 70%" type="text" name="username" required>
                <br>
                <input class="h3" style="width: 70%" type="password" name="pass1" required>
                <br> <br>
                <input type="submit" class="btn btn-lg btn-success" value="LOGIN">
            </div>
        </form>
    </div>
</body>