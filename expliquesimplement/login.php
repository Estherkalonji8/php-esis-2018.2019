<head>
		<meta charset="utf-8">
		 <link rel ="stylesheet " href="style.css" media= "screen" type="text/css"/>
	</head>
	<body>
		<div id="contenu">
		<form action="verification.php" method="POST">
		  <h1>se connecter</h1>
		  <label><b>pseudo:</b></label>
		  <input type ="text" placeholder="saisir le pseudo" name="username" required><br/>
		  
		  <label><b>mot de passe:</b></label>
		  <input type ="pass word" placeholder="saisir le mot de passe" name="password" required><br/>
		  
		 <input type="submit" id='submit' value='connexion'>
		
		  <h2>creer un compte</h2><br/>
		  <label><b>pseudo:</b></label>
		   <input type ="text" placeholder="saisir le pseudo" name="username" required><br/>
		   
		  <label><b>mot de passe:</b></label>
		  <input type ="pass word" placeholder="saisir le mot de passe" name="password" required><br/>
		  
		  
		   <label><b>confirmer:</b></label>
		     <input type ="confirm" placeholder="confirm" name="confirm" required><br/>
		   <label><b>email:</b></label>
		     <input type ="email" placeholder="saisir l email" name="email" required><br/>
		    <label><b>sexe:</b></label>
			  <input type ="sexe" placeholder="saisir le sexe" name="sexe" required><br/><br>
			   <input type="submit" id='submit' value='creer'>
	
		</form>
		</div>
		  </body>
</html>