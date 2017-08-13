<?php require 'header.php'?>

    <div class="container">
        <div class="reg_form">
            <form action="" method="post">
            <h2>Sign Up</h2>
            <div class="form-group first">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="mobile" placeholder="Mobile No." required>
            </div>
            <div class="form-group last">
                <input type="password" class="form-control" name="passcode" placeholder="Password" required>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="tnc" id="checkbox1" onclick="buttontoggle();">By clicking 'Sign Up' you will agree ApunkaGhar's <a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a>.</label>
            </div>
            <button type="submit" class="btn btn-default" id="button1" disabled>Sign Up</button>
        </form>
            <div class="login_link">
                <p>Already Registered? <a href="user-login.php">Login</a></p>
            </div>
        </div>
    </div>
<?php require 'config.php'?>

<?php
    if(isset($_POST['button1']) && isset($_POST['tnc'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $m_no = $_POST['mobile'];
    $psw = $_POST['passcode'];
    
    $sql = "INSERT INTO signup (name, email_id, mobile_no, password)
    VALUES ('$name', '$email', '$m_no', '$psw')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }
    $conn->close();
?>

<?php require 'footer.php'?>