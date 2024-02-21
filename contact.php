<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>telephone</th>
                <th>adresse</th>
                <th>postalCode</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                $nom=($_GET["nom"]);
                $Prenom=($_GET["prenom"]);
                $email=($_GET["email"]);
                $telephone=($_GET["telephone"]);
                $address =($_GET["adresse"]);
                $postalCode =($_GET["postalCode"]);


                echo "<tr>";
                echo "<td>" . htmlspecialchars($nom) . "</td>";
                echo "<td>" . htmlspecialchars($Prenom) . "</td>";
                echo "<td>" . htmlspecialchars($email) . "</td>";
                echo "<td>" . htmlspecialchars($telephone) . "</td>";
                echo "<td>" . htmlspecialchars($address) . "</td>";
                echo "<td>" . htmlspecialchars($postalCode) . "</td>";
                echo "</tr>";
            }
            else
            {
                echo 'Champs manquants';
            }
            ?>
        </tbody>
    </table>
</body>
</html>
