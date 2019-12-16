<?php include 'private/includes/nav.php'; ?>

<div class="container">
    <span class="header">Login</span>

    <div class="contact_inputs">
        <form action="/GitHub/app-wireframe/patient.php" method="post">
            <div class="input-container">
                <input type="text" id="Username" name="Username" class="input" required>
                <label class="input_label" for="Username">Username</label>
                <div class="input_underline"></div>
            </div>
            <div class="input-container">
                <input type="password" name="Password" id="Password" class="input" required>
                <label class="input_label" for="Password">Password</label>
                <div class="input_underline"></div>
            </div>
            <input type="checkbox" class="test" name="remeberme" value="yes">Remeber me<br>
            <button type="submit" class="form_button">Login</button>
        </form>
        
    </div>
    <div></div>

    <?php include 'private/includes/footer.php'; ?>