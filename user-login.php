<?php require 'header.php'?>

    <div class="container">
        <div class="reg_form">
            <form action="" method="post">
            <h2>Log In</h2>
            <div class="form-group first">
                <input type="email" class="form-control" name="email" placeholder="Username" required>
            </div>
            <div class="form-group last">
                <input type="password" class="form-control" name="passcode" placeholder="Password" required>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="tnc" id="checkbox1">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-default" id="button1" disabled>Log In</button>
        </form>
            <div class="login_link">
                <p>Not Registered? <a href="user-registration.php">Signup</a></p>
            </div>
        </div>
    </div>

<?php require 'footer.php'?>