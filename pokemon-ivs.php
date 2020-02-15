<!--- QJR - 12/11/18 - PHP Demonstration

	 -->
	 
	<html>
		<head>
		</head>
<body>

<?PHP
    $hpIV = $_POST['hpIV'];
	$attackIV = $_POST['attackIV'];
	$defenseIV = $_POST['defenseIV'];
	$speedIV = $_POST['speedIV'];
	$specialAttackIV = $_POST['specialAttackIV'];
	$specialDefenseIV = $_POST['specialDefenseIV'];
	
	$ivsFile = fopen("ivs.txt", "w");
	fputs($ivsFile, "$hpIV\r\n$attackIV\r\n$defenseIV\r\n$speedIV\r\n$specialAttackIV\r\n$specialDefenseIV\r\n");
	
	$result = ' ';
	$attackResult = ' ';
	$defenseResult = ' ';
	$speedResult = ' ';
	$spcAtkResult = ' ';
	$spcDefResult = ' ';
	
	echo("<h1>IV Judging</h1>");
		
		echo("<table border=\"1\">");
		echo("<tr><td>Stat</td><td>Value</td><td>How Does It Stack?</td></tr>");
		
		if ($hpIV == 31)
			$result = ($result."<strong>Perfect IVs!</strong>");
		elseif ($hpIV < 0 or $hpIV > 31)
		$result = $result."<strong>IVs must be between 0-31.</strong>";
		elseif ($hpIV == 0)
		$result = $result."<strong>No good.</strong>";
		elseif ($hpIV >=1 AND $hpIV <= 15)
		$result = $result."<strong>Decent.</strong>";
		elseif ($hpIV >=16 AND $hpIV <= 25)
		$result = $result."<strong>Pretty good.</strong>";
		else
			$result = $result."<strong>Outstanding!</strong>";
		
		if ($attackIV == 31)
			$attackResult = ($attackResult."<strong>Perfect IVs!</strong>");
		elseif ($attackIV < 0 or $attackIV > 31)
		$attackResult = $attackResult."<strong>IVs must be between 0-31.</strong>";
		elseif ($attackIV == 0)
		$attackResult = $attackResult."<strong>No good.</strong>";
		elseif ($attackIV >=1 AND $attackIV <= 15)
		$attackResult = $attackResult."<strong>Decent.</strong>";
		elseif ($attackIV >=16 AND $attackIV <= 25)
		$attackResult = $attackResult."<strong>Pretty good.</strong>";
		else
			$attackResult = $attackResult."<strong>Outstanding!</strong>";
		
		if ($defenseIV == 31)
			$defenseResult = ($defenseResult."<strong>Perfect IVs!</strong>");
		elseif ($defenseIV < 0 or $defenseIV > 31)
		$defenseResult = $defenseResult."<strong>IVs must be between 0-31.</strong>";
		elseif ($defenseIV == 0)
		$defenseResult = $defenseResult."<strong>No good.</strong>";
		elseif ($defenseIV >=1 AND $defenseIV <= 15)
		$defenseResult = $defenseResult."<strong>Decent.</strong>";
		elseif ($defenseIV >=16 AND $defenseIV <= 25)
		$defenseResult = $defenseResult."<strong>Pretty good.</strong>";
		else
			$defenseResult = $defenseResult."<strong>Outstanding!</strong>";
		
		if ($speedIV == 31)
			$speedResult = ($speedResult."<strong>Perfect IVs!</strong>");
		elseif ($speedIV < 0 or $speedIV > 31)
		$speedResult = $speedResult."<strong>IVs must be between 0-31.</strong>";
		elseif ($speedIV == 0)
		$speedResult = $speedResult."<strong>No good.</strong>";
		elseif ($speedIV >=1 AND $speedIV <= 15)
		$speedResult = $speedResult."<strong>Decent.</strong>";
		elseif ($speedIV >=16 AND $speedIV <= 25)
		$speedResult = $speedResult."<strong>Pretty good.</strong>";
		else
			$speedResult = $speedResult."<strong>Outstanding!</strong>";
		
		if ($specialAttackIV == 31)
			$spcAtkResult = ($spcAtkResult."<strong>Perfect IVs!</strong>");
		elseif ($specialAttackIV < 0 or $specialAttackIV > 31)
		$spcAtkResult = $spcAtkResult."<strong>IVs must be between 0-31.</strong>";
		elseif ($specialAttackIV == 0)
		$spcAtkResult = $spcAtkResult."<strong>No good.</strong>";
		elseif ($specialAttackIV >=1 AND $specialAttackIV <= 15)
		$spcAtkResult = $spcAtkResult."<strong>Decent.</strong>";
		elseif ($specialAttackIV >=16 AND $specialAttackIV <= 25)
		$spcAtkResult = $spcAtkResult."<strong>Pretty good.</strong>";
		else
			$spcAtkResult = $spcAtkResult."<strong>Outstanding!</strong>";
		
		if ($specialDefenseIV == 31)
			$spcDefResult = ($spcDefResult."<strong>Perfect IVs!</strong>");
		elseif ($specialDefenseIV < 0 or $specialDefenseIV > 31)
		$spcDefResult = $spcDefResult."<strong>IVs must be between 0-31.</strong>";
		elseif ($specialDefenseIV == 0)
		$spcDefResult = $spcDefResult."<strong>No good.</strong>";
		elseif ($specialDefenseIV >=1 AND $specialDefenseIV <= 15)
		$spcDefResult = $spcDefResult."<strong>Decent.</strong>";
		elseif ($specialDefenseIV>=16 AND $specialDefenseIV <= 25)
		$spcDefResult = $spcDefResult."<strong>Pretty good.</strong>";
		else
			$spcDefResult = $spcDefResult."<strong>Outstanding!</strong>";
			
		
	for ($count = 1; $count <= 6; $count = $count + 1)
	{
				
		echo ("<tr>");
		if ($count == 1)
			echo("<td>HP</td><td>$hpIV</td><td>$result</td>");
		elseif ($count == 2)
		echo("<td>Attack</td><td>$attackIV</td><td>$attackResult</td>");
		elseif ($count == 3)
		echo("<td>Defense</td><td>$defenseIV</td><td>$defenseResult</td>");
		elseif ($count == 4)
		echo("<td>Speed</td><td>$speedIV</td><td>$speedResult</td>");
		elseif ($count == 5)
		echo("<td>Special Attack</td><td>$specialAttackIV</td><td>$spcAtkResult</td>");
		else
			echo("<td>Special Defense</td><td>$specialDefenseIV</td><td>$spcDefResult</td>");
		
		
	}
	fclose($ivsFile);
	print("</table>");
	print(" <p><a href=\"pokemon-ivs.html\">Return to IV Judging Form</a></p>");
	
	?>

			</body>
	</html>