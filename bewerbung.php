<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bewerbung · FuturaByte Consulting</title>
    <meta name="description" content="Bewerben Sie sich bei FuturaByte Consulting. Wir freuen uns auf Ihre Unterlagen.">
    <link rel="stylesheet" href="/assets/styles.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="brand">
                <div class="logo" aria-hidden="true">FB</div>
                <div class="brand-text">
                    <strong>FuturaByte Consulting</strong>
                    <span>Bewerbung</span>
                </div>
            </div>
            <nav class="nav">
                <a href="/index.php">Start</a>
                <a class="button" href="/bewerbung.php">Bewerbung</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="section">
            <div class="container">
                <h1>Jetzt bewerben</h1>
                <p>
                    Bitte füllen Sie das Formular aus. Die konkreten Felder (z. B. Lebenslauf, Anschreiben)
                    passe ich an, sobald Sie mir die gewünschten Datenpunkte mitteilen.
                </p>
                <form class="form" action="#" method="post" onsubmit="alert('Vielen Dank! Das finale Formular wird ergänzt, sobald die Felder feststehen.'); return false;">
                    <div class="form-row">
                        <label for="vorname">Vorname</label>
                        <input id="vorname" name="vorname" type="text" placeholder="Ihr Vorname" required>
                    </div>
                    <div class="form-row">
                        <label for="nachname">Nachname</label>
                        <input id="nachname" name="nachname" type="text" placeholder="Ihr Nachname" required>
                    </div>
                    <div class="form-row">
                        <label for="email">E-Mail</label>
                        <input id="email" name="email" type="email" placeholder="name@beispiel.de" required>
                    </div>
                    <div class="form-row">
                        <label for="nachricht">Nachricht</label>
                        <textarea id="nachricht" name="nachricht" rows="5" placeholder="Kurze Vorstellung oder Motivation"></textarea>
                    </div>
                    <div class="form-row inline">
                        <label class="checkbox">
                            <input type="checkbox" required>
                            <span>Ich stimme der Verarbeitung meiner Daten gemäß Datenschutzhinweisen zu.</span>
                        </label>
                    </div>
                    <div class="form-actions">
                        <button class="button button-primary" type="submit">Bewerbung absenden</button>
                        <a class="button" href="/index.php">Zurück zur Startseite</a>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <small>© <?php echo date('Y'); ?> FuturaByte Consulting</small>
        </div>
    </footer>
</body>
</html>

