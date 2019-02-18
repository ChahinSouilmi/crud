<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="img/Etic.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action='inc/soc.inc.php' method='POST'>
                <form action='check.php' method='POST' class='signup-form'>
                    <input type='text' name='societe' placeholder='societe'>
                    <input type='text' name='responsable' placeholder='responsable'>
                    <input type='text' name='adresse' id='' placeholder='adresse'>
                    <input type='text' name='fax' placeholder='fax'>
                    <input type='text' name='mobile' placeholder='mobile'>
                    <input type='text' name='secAct' placeholder='secteur activité'>
                    <input type='text' name='produits' placeholder='produits'>
                    <input type='mail' name='email' placeholder='email'>
                    <input type='text' name='site' placeholder='siteweb'>
                    <p>Régime: </p>
                    <div class='radio'>
                        <label for='nEx'>
                                    <input type='radio' name='radio' id='nEx' name='drone' value='Non-Exp' checked>Non-exportatrice
                                </label>
                    </div>
                    <div class='radio'>
                        <label for='pEx'>
                                    <input type='radio' name='radio' id='pEx' name='drone' value='Partielement-Exp'>Partiellement
                                    Exp
                                </label>
                    </div>
                    <div class='radio'>
                        <label for='tEx'>
                                    <input type='radio' name='radio' id='tEx' name='drone' value='totalement-Exp'>totalement Exp
                                </label>
                    </div>
                    <br>
                    <p>forme juridique </p>
                    <select name='fJuri'>
                                <option value='Annonyme'>Annonyme</option>
                                <option value='Sarl'>Sarl</option>
                                <option value='Suarl'>suarl</option>
                                <option value='Individuel'>individuel</option>
                            </select>
                    <br>
                    <input type="submit" name="submit" class="fadeIn fourth" value="Save">
                </form>

                <!-- Remind Passowrd -->


        </div>
    </div>

</body>

</html>