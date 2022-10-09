<?php
$errors = [];
function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    (!isset($_POST['firstname']) || trim($_POST['firstname']) === '') ? $errors[] = "Une présentation serais de rigueur" : $firstName = test_input($_POST['firstname']);
    (!isset($_POST['lastname']) || trim($_POST['lastname']) === '') ? $errors[] = "Une présentation complète..." : $lastName = test_input($_POST['lastname']);
    (!isset($_POST['mail']) || trim($_POST['mail']) === '') ? $errors[] = "T'inquiète pas on t'enverra pas de lien de fishing" : $mail = test_input(stripslashes($_POST['mail']));
    (!isset($_POST['topic']) || trim($_POST['topic']) === '') ? $errors[] = "C'est à quel sujet ?" : $topic = test_input($_POST['topic']);
    (!isset($_POST['phone']) || trim($_POST['phone']) === '') ? $errors[] = "Hey miss aux cheveux lisses, t'as pas un 06 ?" : $phone = test_input($_POST['phone']);
    (!isset($_POST["message"]) || trim($_POST['message']) === '') ? $errors[] = "Un message c'est mieux pour se faire comprendre..." : $message = test_input($_POST["message"]);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo empty($errors) ? "Merci pour ton message !" : "Explosion dans 3... 2... 1..."; ?>
    </title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
        if (empty($errors)) { ?>
            <p>Merci <?= "$firstName $lastName"; ?>de nous avoir contacté à propos de "<?= $topic; ?>". </p>
            <p>Un de nos conseiller vous contactera à l’adresse <?= $mail; ?> ou par téléphone au <?= $phone; ?> dans les plus brefs délais pour traiter votre demande : </p>
            <p class=message><?= $message; ?></p>
    </div>
<?php
        } else { ?>
    <h1>Il va falloir recommencer !!!</h1>
    <p> Tu as fait les erreurs suivantes :</p>
    <ul>
        <?php
            foreach ($errors as $error) {
                echo "<li>" . $error . "</li>";
            }
        ?>
    </ul>
<?php
        }
?>
</body>

</html>