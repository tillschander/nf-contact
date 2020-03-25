<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h2>Kontaktiere<br><strong>deine digitale Zukunft.</strong></h2>

    <div class="success">
        Vielen Dank für dein Interesse, NAME.
        Wir werden uns in Kürze bei dir melden!
    </div>

    <form method="POST">
        <fieldset class="error">
            <label>Name</label>
            <input type="text" name="name" value="">
            <div class="error-text">Hier könnte Ihre Fehlermeldung stehen</div>
        </fieldset>

        <fieldset>
            <label>E-Mail-Adresse</label>
            <input type="text" name="email" value="">
            <div class="error-text">Hier könnte Ihre Fehlermeldung stehen</div>
        </fieldset>

        <fieldset>
            <label>Nachricht</label>
            <textarea name="message" rows="5"></textarea>
            <div class="error-text">Hier könnte Ihre Fehlermeldung stehen</div>
        </fieldset>

        <fieldset>
            <button>Absenden</button>
        </fieldset>
    </form>
</body>

</html>