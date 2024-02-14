<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<body>
<h2>Enter your date of birth:</h2>
<form method="post" action="<?php echo site_url('agecalculator_controller/calculate_age'); ?>">

    <label for="dob">Date of Birth:</label>
    <input type="text" name="dob" id="dob" required>
    <input type="submit" value="Calculate Age">
</form>
<?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
<?php endif; ?>
</body>
</html>