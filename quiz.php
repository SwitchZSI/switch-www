<?php
	define("SITE_ID", 7);
	
	$questions = [
		["id" => 0, "content" => "Jaki jest tytuł tej piosenki?"],
		["id" => 1, "content" => "Kto jest wykonawcą tej piosenki?"]
	];
	
	// responseID - questionID
	$relations = [/*0*/0,/*1*/0,/*...*/0,0,1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1];

	$responsesOrg = [
		["id" => 0, [
			"Autobiografia",
			"Całkiem inny kraj",
			"Rzeczy do zrobienia"
		], "correct" => 1 ],
		
		["id" => 1, [
			"Biała flaga",
			"Gdzie oni są?",
			"Gdzie są moi przyjaciele?"
		], "correct" => 0 ],
		
		["id" => 2, [
			"Czerwone korale",
			"Siebie dam po ślubie",
			"W kinie, w Lublinie – kochaj mnie"
		], "correct" => 0 ],
		
		["id" => 3, [
			"Po co płakać?",
			"Pochód świętych",
			"Szli na ziemię święci"
		], "correct" => 1],
		
		["id" => 4, [
			"IRA",
			"Oddział Zamknięty",
			"Pidżama Porno"
		], "correct" => 0],
		
		["id" => 5, [
			"Nie zamieniaj serca w twardy głaz",
			"Póki jeszcze serce masz",
			"Przeżyj to sam"
		], "correct" => 2],
		
		["id" => 6, [
			"Nieważne kto jak tańczy",
			"Tango kat",
			"Ten taniec"
		], "correct" => 2],
		
		["id" => 7, [
			"Jesteśmy silni",
			"Jesteśmy śmiali",
			"Jesteśmy ze stali"
		], "correct" => 0],
		
		["id" => 8, [
			"Kołysanki – utulanki",
			"Wśród uliczek wąskich",
			"Niebezpieczne związki"
		], "correct" => 2],
		
		["id" => 9, [
			"Halina Frąckowiak",
			"Krystyna Giżowska",
			"Alicja Majewska"
		], "correct" => 0],
		
		["id" => 10, [
			"Wieża radości",
			"Wieża radości, wieża samotności",
			"Wieża samotności"
		], "correct" => 1],
		
		["id" => 11, [
			"Krąży, krąży złoty pieniądz",
			"Lepki jest ten miód",
			"Złudny jest ten miód"
		], "correct" => 0],
		
		["id" => 12, [
			"Jaka szkoda",
			"Młodość, choć już nie ta",
			"Także Ty"
		], "correct" => 0],
		
		["id" => 13, [
			"Lecę, bo chcę",
			"Wolność jak marzenia",
			"Bohema"
		], "correct" => 2],
		
		["id" => 14, [
			"Chłopcy z Placu Broni",
			"Kobranocka",
			"Sztywny Pal Azji"
		], "correct" => 1],
		
		["id" => 15, [
			"Tokszoł",
			"Wow!",
			"Wow! Talk show"
		], "correct" => 0],
		
		["id" => 16, [
			"Mam prawo",
			"Policemen",
			"To co moje jest moje"
		], "correct" => 1],
		
		["id" => 17, [
			"Na skrzydłach żagli",
			"Trzecia miłość żagle",
			"Wierna łódź – miłość ma"
		], "correct" => 1],
		
		["id" => 18, [
			"Już",
			"Kiedy mnie już nie będzie",
			"Obietnicy blask"
		], "correct" => 0],
		
		["id" => 19, [
			"DHM",
			"Golden Life",
			"Ziyo"
		], "correct" => 2]
	];
	
	$questionAmount = count($responsesOrg);
	
		
	//print_r($_POST);
	
	$responses = $responsesOrg;
	shuffle($responses);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Radio SWITCH | Quiz</title>
<link href='https://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" 
      type="image/png" 
      href="/images/favicon.png">
</head>
<body>

<?php require_once("./menu.php"); ?>

<div class="header">
  <div class="logo">
    <h1><img src="images/LOGO.png"></h1>
  </div>
  <div class="social">
    <ul>
      <li><a target="_blank" href="https://www.facebook.com/zsikielce/"><img src="images/facebook.png" alt="ZSI" /></a><font style="font-size:14px; color:#d13f31; font-family: 'Oswald', sans-serif; font-weight:normal; text-transform:uppercase;">/ ZSI</font></li>
      <li><a target="_blank" href="https://www.facebook.com/zsiswitch/"><img src="images/facebook.png" alt="SWITCH" /></a><font style="font-size:14px; color:#d13f31; font-family: 'Oswald', sans-serif; font-weight:normal; text-transform:uppercase;">/ SWITCH</font></li>
    </ul>
  </div>
</div>

<div class="pasek"></div>

<div class="page">
  <div class="generic">
    <div class="panel">

      <div class="content">
        <div>
          <div class="panel">
            <div class="title">
              <h1> Quiz muzyczny </h1>
            </div>
			<?php
					$wynik = 0;
					if (ISSET($_POST["submit"])) {
						
						// sprawdzajaca glowna petla
						foreach ($_POST as $key => $value) {
							// rozbija na czesci id radio buttona
							$result = explode("-", $key);
						
							// waruneczek poprawnych odpowiedzi
							if (count($result) == 2 && is_numeric($result[1]) && $result[1] >= 0 && $result[1] < $questionAmount) {
								$responseID = $result[1];
												
								if ($value == $responsesOrg[$responseID]["correct"])
									$wynik++;
							}
						}
						
						$procenty = round($wynik / $questionAmount * 100);
						echo "<h2>";
						if ($procenty >= 30)
							echo "Bravo! Zdałeś. ";
						echo "Uzyskane punkty: $wynik z ". $questionAmount ." ($procenty%).</h2>";
					}
				?>
			<div class="content">
				<?php
					echo "<form id='quiz' method='POST'>";
					foreach ($responses as $response) {
						echo "<div><h3>". $questions[$relations[$response["id"]]]["content"] ."</h3><audio controls><source src='sounds/". $response["id"] .".mp3'  type='audio/mpeg' /></audio>";
						
						$i = 0;
						foreach ($response[0] as $singleResponse) {
							echo "<div class='input-group'><input type='radio' id='response-". $response["id"] ."-$i' name='response-". $response["id"] ."' value='$i' /><label for='response-". $response["id"] ."-$i'>". $singleResponse ."</label></div>";
							$i++;
						}
						
						echo "</div>";
					}
					
					echo "<input name='submit' type='submit' value='Sprawdź!' /></form>";
				?>
			</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="clearing"></div>
<BR/>
  <div class="copyright-wrap">
    <div class="panel">
      <div class="content">
        <P>Copyright (c) Radio SWITCH | Designed by <a href="http://patryk.org/">Patryk Piotrowski</a>. </P>
      </div>
    </div>
  </div>
</div>

</body>
</html>
