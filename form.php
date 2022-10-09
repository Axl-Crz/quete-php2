<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contactez-nous</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>
<form action="./thanks.php" method="post">
        <div>
            <label for="name">Prénom:</label>
            <input type="text" id="firstname" name="firstname" placeholder="Prénom">

            <label for="name">Nom:</label>
            <input type="text" id="lastname" name="lastname" placeholder="Nom">

            <label for="mail">E-mail&nbsp;:</label>
            <input type="email" id="mail" name="mail" placeholder="exemple@exemple.com">

            <label for="phone">Téléphone:</label>
            <input type="tel" id="phone" name="phone" placeholder="06 00 00 00 00">

            <label for="topic">Choisis un sujet:</label>

            <select name="topic" id="topic" required>
                <option value="" disabled selected>Séléctionne le sujet:</option>
                <option value="La reproduction des mouches en Alaska">La reproduction des mouches en Alaska</option>
                <option value="La fonte des glaciers en Afrique">La fonte des glaciers en Afrique</option>
                <option value="La difficulté de transition des poissons transexuels">La difficulté de transition des poissons transexuels</option>
            </select>

            <label for="msg">Message :</label>
            <textarea id="msg" name="message" placeholder="Raconte nous ta life"></textarea>

            <button type="submit">C'est mon dernier mot Jean-Pierre</button>
        </div>
    </form>

</body>

</html>