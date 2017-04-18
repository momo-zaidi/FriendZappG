<?php
				
				if (isset($_POST['inscrire']))
				{
				
				IF    (empty($_POST['nom']) or empty($_POST['prenom']) or empty($_POST['password']) or empty($_POST['mail']) or empty($_POST['age']))
				{
					  
						
					print "<div class='alert alert-danger'>
                          <strong>Remplissez les champs !</strong>
                          </div>";
				}
