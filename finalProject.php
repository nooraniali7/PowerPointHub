<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
  		<link rel = "stylesheet" href="finalProject-style.css">
  		<title>Ali and Gurkirt</title>
  	</head>
	<body>
  		<body background="images/orange.jpg" >
  		<div class = "background">
		<img id="photo" src="images/title.jpg" alt = "Website Picture" height = "350">
		<img align = "right">
	  	</div>

	  	<div class="ol">
			<ol>
		  		<h1>Welcome! To continue, please select a major you would like to explore!</h1>
		  		<h2>Here, you see a list of all Majors... </h2>
			</ol>
	  	</div>

		<ul>
			<div class="compsci">
				<a href="artsAndSciences.html">
				<br>
					College of The Pacific (Arts and Sciences)
				</a>
			</div>

			<div class="compsci">
				<a href="music.html">
				<br>
					Conservatory of Music
				</a>
			</div>

			<div class="compsci">
				<a href="business.html">
				<br>
					Eberhardt School of Business
				</a>
			</div>

			<div class="compsci">
				<a href="education.html">
				<br>
					Gladys L. Benerd School of Education
				</a>
			</div>

			<div class="compsci">
				<a href="compClasses.html">
				<br>
					School of Engineering and Computer Science Courses
				</a>
			</div>

			<div class="compsci">
				<a href="iStudies.html">
				<br>
					School of International Studies
				</a>
			</div>

			<div class="compsci">
				<a href="pharmacy.html">
				<br>
					Thomas J. Long School of Pharmacy And Health Sciencs
				</a>
			</div>

			<div class="compsci">
				<a href="dentistry.html">
				<br>
					Arthur A. Dugoni School of Dentistry
				</a>
			</div>
		</ul>

		<?php

				$comment="";
				$commentError="";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
						if(empty($_POST["comment"])){
								$commentError = "Sorry, comment is required.";
						}
						else{
								$comment = testInput($_POST["comment"]);
								if(!preg_match("/^[a-zA-Z ]*$/",$comment)){
										$commentError = "Only letters and spaces are allowed.";
								}
						}
				}

				function testInput($value){
						$value = trim($value);
						$value = stripslashes($value);
						$value = htmlspecialchars($value);
						return $value;
				}
		?>
		<h2>Contact Me!</h2>

		<h3><span class="error">*required field.</span></h3>
		<form method="post">
				Comment: <input type="text" name="comment" value= "<?php echo $comment;?>">
				<span class="error">*<?php echo $commentError;?></span>
				<br>
				<br>
				<input type="submit" value = "Finish!">
		</form>
</body>
</html>
