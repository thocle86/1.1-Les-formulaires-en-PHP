<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style-form.css" rel="stylesheet">
    <title>Merci ;-)</title>
</head>
<body>
	<div>
		<h1>Merci <?php echo $_POST['user_firstname']; ?> <?php echo $_POST['user_lastname']; ?>
		de nous avoir contacté à propos de "<?php echo $_POST['type_message']; ?>".</h1>
		<p>Un de nos conseiller vous contactera soit à l’adresse "<?php echo $_POST['user_email']; ?>""
		ou par téléphone au "<?php echo $_POST['user_phone']; ?>" dans les plus brefs délais pour traiter votre demande : </p>
		<p>"<?php echo $_POST['user_message']; ?>"</p>
		<h1>A bientôt</h1>
	</div>
</body>
</html>