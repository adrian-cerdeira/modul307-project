<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Reparaturauftrag erstellen</title>
    <link rel="stylesheet" href="public/styles/app.scss">
</head>

<body>

    <section class="section">
        <div class="container">
            <h1 class="title">Auftrag erstellen</h1>
            <form action="app/controllers/add-repair-process.controller.php" method="POST">
                <legend class="subtitle">
                    <strong>Allgemein<strong>
                </legend>
                <div class="field">
                    <label class="label" for="start-date">Start:</label>
                    <div class="control">
                        <input id="start-date" class="input" type="date" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="urgent">Dringlichkeit:</label>
                    <div class="control">
                        <div class="select">
                            <select id="urgent" required>
                                <option>sehr tief</option>
                                <option>tief</option>
                                <option>normal</option>
                                <option>hoch</option>
                                <option>sehr hoch</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="end-date">Ende:</label>
                    <div class="control">
                        <input id="end-date" class="input" type="date" value="" disabled>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="is-done">Status:</label>
                    <div class="control">
                        <div class="select">
                            <select id="is-done" required>
                                <option>Auftrag ist abgeschlossen</option>
                                <option>Auftrag ist pendent</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="tool">Werkzeug:</label>
                    <div class="control">
                        <div class="select">
                            <select id="tool" required>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <legend class="subtitle">
                    <strong>Auftraggeber<strong>
                </legend>
                <div class="field">
                    <label class="label" for="firstname">Vorname:</label>
                    <div class="control">
                        <input id="firstname" class="input" type="text" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="lastname">Nachname:</label>
                    <div class="control">
                        <input id="lastname" class="input" type="text" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="email">Email:</label>
                    <div class="control">
                        <input id="email" class="input" type="email" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label" for="tel">Telefon:</label>
                    <div class="control">
                        <input id="tel" class="input" type="tel">
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-link">Auftrag erstellen</button>
                    </div>
                    <div class="control">
                        <button class="button is-text">Abbrechen</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="public/js/app.js"></script>
</body>

</html>