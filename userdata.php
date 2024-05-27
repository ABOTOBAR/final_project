<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slutprojekt</title>
</head>

<body>
    <main>
        <form action="include/userdata.php" method="post">
            <label for="Namn">Namn</label>
            <input id="Namn" type="text" name="Namn" placeholder="Namn...">

            
            <label for="fSaldo">Saldo</label>
            <input id="Saldo" type="text" name="Saldo" placeholder="Saldo...">

            

            <label for="Bankkonto">Bankkontonummer</label>
            <input id="Bankkonto" type="text" name="Bankkonto" placeholder="Bankkonto...">


        

            <button type="submit">Submit</button>
        </form>
    </main>
</body>
</html>