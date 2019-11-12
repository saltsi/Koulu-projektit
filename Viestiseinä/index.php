<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="tyylit.css">
</head>
<body>

<form class="my-form">
        <h2> viestiseinä </h2>
        <div class="form-group">
            <label for="nimi">Aihe:</label>
            <input type="text" id="aihe">
            <span id="id_error" class="error"></span>
        </div>
        <br>
        <div class="form-group">
            <label for="viesti">Viesti:</label>
            <input type="text" id="viesti">
            <span id="id_error" class="error"></span>
        </div>
        <br>
        <div class="form-group">
            <label for="lähettäjä">Lähettäjä:</label>
            <input type="text" id="lähettäjä">
            <span id="id_error" class="error"></span>
        </div>
        <br>
        <div class="form-group">
            <label for="pvm">Päivämäärä:</label>
            <input type="text" id="pvm">
            <span id="id_error" class="error"></span>
        </div>   
        
        <div class="form-group">
            <button>Lähetä</button>

        </div>
    </form>
</body>
</html>