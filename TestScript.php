<body>

	<h1>Aanmelding website Links</h1>
	
    <?php

			$naam=$_POST["naam"];
			$username=$_POST["username"];
			$email=$_POST["email"];
			$geslacht=$_POST["geslacht"];
			$leeftijd=$_POST["leeftijd"];
			
			$naam = strtoupper($naam); 
			
			$dagIndex = date("w");
			$dagNummer = date("d");
			$maandIndex = date("n");
			$jaar = date("Y");
			
			$dagArray=array("zondag","maandag","dinsdag","woensdag", "donderdag","vrijdag","zaterdag");
			$maandArray=array("december","januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november");
			
			$dag = $dagArray[$dagIndex];
			$maand = $maandArray[$maandIndex];
			
			if (($leeftijd >= 16) && ($leeftijd <= 20)) { $bedrag = 20; }
			else { $bedrag = 28; }
			
			$arrayGetal=range(0,9);
			$arrayLetters=range("a", "z");
			$arrayHLetters=range("A", "Z");
			$merge=array_merge($arrayGetal, $arrayLetters, $arrayHLetters);
			shuffle($merge);
			
			$key = array_rand ($merge, 9); 
						
			if (isset($_POST["naam"]) && $_POST["naam"]!="" 
			&& isset($_POST["username"]) && $_POST["username"]!="" 
			&& isset($_POST["email"]) && $_POST["email"]!="" 
			&& isset($_POST["leeftijd"]) && $_POST["leeftijd"]!=""
			&& isset($_POST["geslacht"]))
			{
			
  			if ($leeftijd < 16) { print("Het spijt ons maar u dient minimaal 16 jaar te zijn."); }
				
				else {
    			if ($geslacht == "man") { print("Geachte heer "); }
    			else										{ print("Geachte mevrouw "); }
    			
    			print("<b>$naam</b>,");
    			print("<p>U hebt vandaag $dag $dagNummer $maand $jaar de volgende gegevens verstuurd:</p>");
    			
    			print("<table><tr><td>Gebruikersnaam:</td><td><b>$username</b></td></tr>");
    			print("<tr><td>E-mailadres:</td><td><b>$email</b></td></tr>");
    			print("<tr><td>Gesclacht:</td><td><b>$geslacht</b></td></tr>");
    			print("<tr><td>Leeftijd:</td><td><b>$leeftijd</b></td></tr>");
    			print("<tr><td>Uw wachtwoord is:</td><td><b>");
					
					for($i=0; $i<9; $i++)        
					{         
					print $merge[$key[$i]];        
					}
					
					print("</b></td></tr>");
    			print("<tr><td>Uw abonnementskosten zijn:</td><td><b>€$bedrag,- per jaar.</b></td></tr></table>");						
										
				}
			} 
			else { print("Je moet eerst alles invullen!"); }
			
    ?>
</body>
