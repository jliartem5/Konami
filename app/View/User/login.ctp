<h1>Inscription</h1>

<?php
echo $this->Form->create("Participant");
echo $this->Form->input("login", array('label' => 'Compte'));
echo $this->Form->input("password", array('label' => 'Mot de passe'));
echo $this->Form->end("Connexion");
?>