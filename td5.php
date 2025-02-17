<?php 

function listeHello() {
	$liste = "";
    for ($i = 1; $i <= 20; $i++) {
        $liste .= "<li>Hello numero " . $i . "</li>";
    }
    return $liste;
}

function conversion() {
	$value = "";
	$value .= "<p>0x41 en décimal : " . hexdec("41") . "</p>";
	$value .= "<p>65 en hexadécimal : " . dechex(65) . "</p>";
	$value .= "<p>65 en caractère ASCII : " . chr(65) . "</p>";
	$value .= "<p>A en code ASCII : " . ord('A') . "</p>";
	$value .= "<p>0x2B en décimal : " . hexdec("2B") . "</p>";
	$value .= "<p>43 en hexadécimal : " . dechex(43) . "</p>";
	$value .= "<p>43 en caractère ASCII : " . chr(43) . "</p>";
	$value .= "<p>+ en code ASCII : " . ord('+') . "</p>";
	
	return $value;
}

function listeHexa() {
	$liste = "";
    for ($i = 0; $i <= 15; $i++) {
        $liste .= "<li>" . dechex($i) . "</li>";
    }
    return $liste;
}

function listeTableau() {
	$liste = "";
    $liste = "<table>
			  <caption>Conversions en bases 2, 8, 10 et 16</caption>
				  <thead>
					  <tr>
						  <th>Binaire</th>
						  <th>Octal</th>
						  <th>Décimal</th>
						  <th>Hexadécimal</th>
					  </tr>
				  </thead>
				  <tbody>";

    for ($i = 0; $i <= 17; $i++) {
        $liste .= "<tr>
					   <td>" . sprintf("%08b", $i) . "</td>
					   <td>" . sprintf("%02o", $i) . "</td>
					   <td>" . sprintf("%02d", $i) . "</td>
					   <td>" . sprintf("%02X", $i) . "</td>
				   </tr>";
    }

    $liste .= "</tbody></table>";

    return $liste;
}
?>

<!DOCTYPE html>
<html lang = "fr">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>TD5</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="icon" type="image/x-icon" href="images/favicon.ico" />
		<style>
        table {
                    width: 100%;
                    border-collapse: collapse;
                    margin-top: 20px;
                }
        table caption {
            font-weight: bold;
            margin-bottom: 10px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f4f4f4;
        }
		</style>
	</head>
	<body>
		<header>
			<div class="header-content">
				<figure>
					<div class="image-zoom">
						<a href="td5.php"><img src="images/logo.png" alt="Logo"/></a>
					</div>
				</figure>
				<nav style="font-size: 1.2em; font-weight: bold; margin-left: 20px;">
					<ul>
						<li><a href="td5.php">Développement Web</a></li>
					</ul>
				</nav>
			</div>
		</header>
    <main>
		<section>
            <h1>TD5 : PHP - introduction aux pages dynamiques</h1>
			<p>Dans le cadre de notre apprentissage du développement web dynamique, nous allons créer une série d'exercices en PHP. Cette approche nous permettra de comprendre les bases de la programmation côté serveur et de générer du contenu HTML de manière dynamique. Notre objectif est de mettre en pratique les concepts fondamentaux du PHP tout en veillant à produire un code valide et conforme aux standards du web</p>
		</section>
        <section>
			<h2>Exercice 1 : fonction prédéfinie</h2>
			<?php echo "<p>Heure actuelle : " . date("H:i:s") . "</p>"; ?>
		</section>
		
		<section>
			<h2>Exercice 2 : fonction et boucles</h2>
			<?php echo "<ul>" . listeHello() . "</ul>"; ?>
		</section>
		
		<section>
			<h2>Exercice 3 : conversions ASCII</h2>
			<?php echo conversion(); ?>
		</section>
		
		<section>
			<h2>Exercice 4 : fonctions prédéfinies et boucles</h2>
			<?php echo "<ul class='liste-hex'>" . listeHexa() . "</ul>"; ?>
		</section>
		
		<section>
			<h2>Exercice 5 : boucles PHP, fonctions prédéfinies et tableau HTML</h2>
			<?php echo listeTableau(); ?>
		</section>
    </main>

    <footer>
		<p>&#169; 2025 - costa-matheo. Tous droits réservés.</p>
		<p>Créé par COSTA Mathéo le 11 février 2025 à Cergy</p>
	</footer>
	</body>
</html>
