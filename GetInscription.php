$UserData['Nom'] = "testxxx";
$UserData['Mot de passe'] = "testmdp";
$UserData['Email'] = "no@email.com";
$UserData['Sexe'] = "m";
$UserData['Date de naissance'] = "";

// Sauvegarder l'utilisateur.
$UserModel = new UserModel();
$UserID = $UserModel->Save($UserData, array('ActivityType' => 'Join', 'CheckExisting' => TRUE));

}
