<?php
/**
 * Created by PhpStorm.
 * User: engineer
 * Date: 12/6/18
 * Time: 10:31 AM
 */
?>
<html>
<head>
    <title>My Form</title>
</head>
<body>

<h3>Your form was successfully submitted!</h3>
<p>
    <?php echo $username; ?>
</p>

<p><?php echo anchor('form', 'Try it again!'); ?></p>

</body>
</html>
