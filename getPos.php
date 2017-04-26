<?php

			navigator.geolocation.getCurrentPosition(onSuccess, onError);
			$geocoder = new google.maps.Geocoder();
            

			function onSuccess($position) {

				
				$data[] = array('latitude'=>position.coords.latitude, 'longitude'=>position.coords.longitude);
				header('Content-Type: application/json');
				echo json_encode($data);
				exit();
			}

			function onError($error) {
               
			   echo "Erreur";
				
                
			}
			

?>
