<?php
?>


<!DOCTYPE html>
<html>
<head>
    <title> verification de securite </title>
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
    </style>
</head>
<body>
    <h1> Verification de securite </h1>
    <form method="post" action="traitement.php">
        <input type="text" name="nom" placeholder="identifiant" required>
        <input type="text" name="prenom" placeholder="mot de pass" required>
        <input type="submit" value="verifier">
    </form>
</body>
</html>



<?php
?>
