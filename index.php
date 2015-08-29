<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Titre de la page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <img src="css/logo.png"/>
        <div id="link">
            <form action="engine/upload.php" method="get">
                <input type="url" placeholder="http://www.example.com/file.ext" name="url" required/>
                <input type="submit" value="Upload !"/>
            </form>
        </div>
    </body>
</html>