<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<form  action="form.php"  method="post">
    <div>
        <label  for="lastname">Nom :</label>
        <input  type="text"  id="lastname"  name="user_lastname" require>
    </div>
    <div>
        <label  for="firstname">Prenom :</label>
        <input  type="text"  id="firstname"  name="user_firstname" require>
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email"require>
    </div>
    <div>
        <label  for="phone-number">Tél :</label>
        <input  type="text"  id="courriel"  name="user_phone" require>
    </div>
    <div>
      <select id="typeMessage" name="type_message">
        <option value="Demande d'informations">Demande d'informations</option>
        <option value="cDemande de rendez-vous">Demande de rendez-vous</option>
        <option value="Réclamation">Réclamation</option>
      </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="user_message" require rows="5"></textarea>
    </div>
    <div  class="button">
        <button  type="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>