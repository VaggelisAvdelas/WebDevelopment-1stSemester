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
				border-width:0px 1px 1px 0px;
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
						function time_staying ($arrival_date, $departure_date)
						{
							date_default_timezone_set ("Europe/Athens");
							$start = strtotime($arrival_date);
							$end = strtotime($departure_date);
							$days_of_stay = ceil($end-$start) / 86400;
							return $days_of_stay;
							/* The function returns result even when departure_date < arrival_date  , or even when they 
							are equal, so it's up to users to handle the data correctly*/
						}
					//first we set everyting to ""
					$uonoma=isset($_POST['name']) ? $_POST['name'] : '';
					$uemail=isset($_POST['mail']) ? $_POST['mail'] : '';
					$uhotel=isset($_POST['hotel']) ? $_POST['hotel'] : '';
					$udate1=isset($_POST['date']) ? $_POST['date'] : '';
					$udate2=isset($_POST['date2']) ? $_POST['date2'] : '';
					$urooms=isset($_POST['rooms']) ? $_POST['rooms'] : '';
					$upeople=isset($_POST['people']) ? $_POST['people'] : '';
					$uroomtype=isset($_POST['roomtype']) ? $_POST['roomtype'] : '';
					$upayment=isset($_POST['payment']) ? $_POST['payment'] : '';
					$ucardnumber=isset($_POST['cardnumber']) ? $_POST['cardnumber'] : '';
					$timestaying=time_staying($udate1,$udate2);
					$price=0;
					if (strcmp($uroomtype,"Μονόκλινο 35€") == 0) $price = 35*$urooms*$timestaying;
						elseif (strcmp($uroomtype,"Δίκλινο 50€") == 0) $price = 50*$urooms*$timestaying;
						elseif (strcmp($uroomtype,"Τρίκλινο 60€") == 0) $price = 60*$urooms*$timestaying;
						elseif (strcmp($uroomtype,"Σουίτα 100€") == 0) $price = 100*$urooms*$timestaying;

					//everyting is represented in a table
					echo "<table>";
					echo "<tr><td>"; print "Το όνομα είναι:"; echo"</td><td>"; print $uonoma; echo "</td></tr>";
					echo "<tr><td>"; print "Το email είναι:"; echo "</td> <td>"; print $uemail; echo "</td></tr>";
					echo "<tr><td>"; print "Όνομα Ξενοδοχείου:"; echo "</td> <td>"; print $uhotel; echo "</td></tr>";
					echo "<tr><td>"; print "Ημερομηνία Άφιξης:"; echo "</td> <td>"; print $udate1; echo "</td></tr>";
					echo "<tr><td>"; print "Ημερομηνία Αναχώρησης:"; echo "</td> <td>"; print $udate2; echo "</td></tr>";
					echo "<tr><td>"; print "Αριθμός δωματίων:"; echo "</td> <td>"; print $urooms; echo "</td></tr>";
					echo "<tr><td>"; print "Αριθμός ατόμων:"; echo "</td> <td>"; print $upeople; echo "</td></tr>";
					echo "<tr><td>"; print "Τύπος Δωματίου:"; echo "</td> <td>"; print $uroomtype; echo "</td></tr>";
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
