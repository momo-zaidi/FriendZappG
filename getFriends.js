
  getFriends(1,'55 55.855','44 44.344');   // On Appelle la fonction en y introduisant les paramètres.
  function getFriends(id,lat,lng)
  {
    var donnees = {identifiant: id, latitude: lat, longitude: lng};
    document.write(JSON.stringify(donnees));
 
  }


