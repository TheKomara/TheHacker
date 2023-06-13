<?php
?>


<!DOCTYPE html>
<html>
<head>
    <title>Verification de sécurité</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <body>
    <style>
        header {
            display: flex;
            border-bottom: 1px solid rgb(155, 155, 155);
        }

        .logo {

            padding-top: 2%;
            margin-left: 0.7%;
        }

        .title {
            font-weight: bold;
            text-align: end;
        }
        form{
            width: 50%;
            transform: translateX(50%);
        }
        .filds{
            width: 100%;
            border-bottom: 1px solid gray;
            padding: 1%;
            margin-top: 2%;
        }

        .inputs {
            width: 100%;
            text-align: start;
            background: transparent;
            border:none;
            outline: none;
            font-weight: bold;
            font-size: 20px;
        }
        .btn{
            color:white;
            background: red;
            padding: 2% 10%;
            border: none;
            border-radius: 20px;
            font-size: 20px;
            font-weight: bold;
            margin-top: 2%;
            box-shadow: 0 5 10px black;
            transform: translateY(50%);

        }
        .btn:hover{
            box-shadow: none;
            transition: all .5 ease;
        }
    </style>
    <header>
        <div class="title">
            <h2>C'EST VOUS <br> L'AVENIR</h2>
        </div>
        <div class="logo">
            <img src="./logo-societ.png" alt="" width="15%">
        </div>
    </header>
    <section>
        <h2>Connexion - Espace CLient</h2>

        <form action="traitement" method="post">
            <div class="filds">
                <input type="text" name="Nom" id="" class="inputs" placeholder="Saisissez Votre Identifiant">
            </div>
            <div class="filds">
                <input type="text" name="Nom" id="" class="inputs" placeholder="Saisissez Votre Mot Passse">
            </div>

            <input type="submit" value="Verifier"  class="btn">
           
        </form>
    </section>
</body>
</html>


<?php
?>
