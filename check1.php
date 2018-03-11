<!DOCTYPE HTML>

<html>
	
	<head>
	
		<title> Τουριστικός Οδηγός Νάξου </title>
			
		<meta charset="UTF-8">
		<meta name="description" content="hotels,places,beaches">
		<meta name="keywords" content="naxos,beaches,hotels">
		<meta name="author" content="p15009">
			
		<!--External styles-->
		<!--same styles with html-->
		<link rel="stylesheet"
		href="styles.css" media="screen,handheld,tv,projector">
		
		<!--use of bootsrap for buttons-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
		<!--internal styles-->
		<style>
			table {
				border:1px solid black; 
				font-size: 20px;
				position: relative;
				left:200px;
			}
			td {
				height:25px;
				padding:15px;
				text-align:center;
				border-bottom: 2px solid #ddd;
			}
			tr:nth-child(even) {
				background-color: #f2f2f2;
			}
			.buttons {
				position:relative;
				left:290px;
				top:5px;
			}
			.btn-primary
			.btn-danger
		</style>
	</head>
	<body>
		<img id="bg-body" src="Naxos-Plaka.jpg"></img>
		
		<header> Προσωπικες πλροφοριες</header>
		
		<div class="wrapper">
			<div class="content">
				<!--php beginning-->
				<?php
					//first we set everyting to ""
					$uonoma=isset($_POST['name']) ? $_POST['name'] : '';
					$uemail=isset($_POST['mail']) ? $_POST['mail'] : '';
					$umuseum=isset($_POST['museum']) ? $_POST['museum'] : '';
					$udate1=isset($_POST['date']) ? $_POST['date'] : '';
					$upeople=isset($_POST['people']) ? $_POST['people'] : '';
					$uticket=isset($_POST['ticket']) ? $_POST['ticket'] : '';
					$upayment=isset($_POST['payment']) ? $_POST['payment'] : '';
					$ucardnumber=isset($_POST['cardnumber']) ? $_POST['cardnumber'] : '';
					$price=0;
					if (strcmp($uticket,"Κανονικό 8€") == 0) $price = 8*$upeople;
						elseif (strcmp($uticket,"Φοιτητικό 5€") == 0) $price = 5*$upeople;
		
					//everyting is represented in a table
					echo "<table>";
					echo "<tr><td>"; print "Το όνομα είναι:"; echo"</td><td>"; print $uonoma; echo "</td></tr>";
					echo "<tr><td>"; print "Το email είναι:"; echo "</td> <td>"; print $uemail; echo "</td></tr>";
					echo "<tr><td>"; print "Όνομα Μουσείου:"; echo "</td> <td>"; print $umuseum; echo "</td></tr>";
					echo "<tr><td>"; print "Ημερομηνία:"; echo "</td> <td>"; print $udate1; echo "</td></tr>";
					echo "<tr><td>"; print "Αριθμός ατόμων:"; echo "</td> <td>"; print $upeople; echo "</td></tr>";
					echo "<tr><td>"; print "Τύπος Εισητηρίου:"; echo "</td> <td>"; print $uticket; echo "</td></tr>";
					echo "<tr><td>"; print "Τύπος πληρωμής:"; echo "</td> <td>"; print $upayment; echo "</td></tr>";
					echo "<tr><td>"; print "Αριθμός κάρτας:"; echo "</td> <td>"; print $ucardnumber; echo "</td></tr>";
					echo "<tr><td>"; print "Τελική τιμή:"; echo "</td> <td>"; print $price; print "€"; echo "</td></tr>";
					echo "</table>";
					
				//php ending
				?>
				
			<!--buttons to sumbit or to cancel and get transfered back-->
			<div class="buttons">
			<button type="button" class="btn btn-primary" onClick='alert("Καταχωρήθηκε Επιτυχώς")'>Οριστική Υποβολή</button>
			<button type="button" class="btn btn-danger" onClick="window.history.go(-1);">Τροποποίηση</button>
			</div>
			</div>
		</div>
	</body>
</html>
