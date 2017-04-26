
<script>
			navigator.geolocation.getCurrentPosition(onSuccess, onError);
			
           

			function onSuccess(position) {

				
				$data[] = array('latitude'=>position.coords.latitude, 'longitude'=>position.coords.longitude);
				header('Content-Type: application/json');
				echo json_encode($data);
				exit();
			}

			function onError($error) {
               
			   echo "Erreur";
				
                
			}
			

</script>
