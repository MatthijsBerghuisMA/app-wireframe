<?php include 'private/includes/nav.php'; ?>
<div class="container">
    <span class="header">Reset Password</span>
<div class="contact_inputs">
        <form action="/patient.php" method="post">
            <div class="input-container">
                <input type="text" id="Email" name="Email" class="input" required>
                <label class="input_label" for="Email">Email</label>
                <div class="input_underline"></div>
            </div>
            <div class="input-container">
                <input type="password" name="Password" id="Password" class="input" required>
                <label class="input_label" for="Password">New Password</label>
                <div class="input_underline"></div>
            </div>

            <div class="input-container">
                <input type="repeat new password" name="repeat new password" id="repeat new password" class="input" required>
                <label class="input_label" for="repeat new password">Repeat new password</label>
                <div class="input_underline"></div>
            </div>
            <a class="forgot" href="forgot.php">Already have an account?</a>
            <a class="form_button" href="patient.php">Update Password</a>
        </form>
</div>
<?php include 'private/includes/footer.php'; ?>