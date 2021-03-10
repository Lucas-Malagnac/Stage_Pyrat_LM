<?php  
function carte() {

  $carte =array(
      array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'texte1',
          'label' => 'Texte 1:',
          'obligatoire' => 'oui'
        ),
      ),
      array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'texte2',
          'label' => 'Texte 2:',
          'obligatoire' => 'oui'
        )

      ),
      array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'texte3',
          'label' => 'Texte 3:',
          'obligatoire' => 'oui'
        ),
      ),  );/*fin de carte*/
    return $carte;
}


function carte2(){
  $carte2 =array(  
  array( // le fieldset 
    'saisie' => 'fieldset',
    'options' => array(
      'nom' => 'commande',
      'label' => 'Commande'
    ),

    'saisies' => array(
      array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'nom',
          'label' => 'Nom :',
          'obligatoire' => 'oui'
        ),
      ),
      array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'email',
          'label' => 'Email:',
          'obligatoire' => 'oui'
        ),
        'verifier' => array(
          'type' => 'email',
    ),
      ),
       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'telephone',
          'label' => 'Téléphone :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 10,
        ),
        'verifier' => array(
          'type' => 'telephone',
    ),
      ), 

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'ville',
          'label' => 'Ville :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 30,
        ),
        'verifier' => array(
    ),
      ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'adresse',
          'label' => 'Adresse :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 30,
        ),
        'verifier' => array(
    ),
      ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'adresse_complement',
          'label' => 'Adresse de complement :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 30,
        ),
        'verifier' => array(
    ),
      ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'code_postal',
          'label' => 'Code Postal :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 5,
        ),
        'verifier' => array(
          'type' => 'code_postal'
        ),
      ),
    ),
  ),

);
  return $carte2;
}

function carte3(){
 $carte3 =array(  
 array( // le fieldset 
    'saisie' => 'fieldset',
    'options' => array(
      'nom' => 'facture',
      'label' => 'Coordonnées de facturation'
    ),

    'saisies' => array( // les champs dans le fieldset 
       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'fact_nom',
          'label' => 'Nom :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 30,
        ),
        'verifier' => array(
        ),
       ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'fact_societe',
          'label' => 'Société :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 30,
        ),
        'verifier' => array(
        ),
       ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'fact_adresse',
          'label' => 'Adresse :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 30,
        ),
        'verifier' => array(
        ),
       ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'fact_adresse_complement',
          'label' => 'Adresse complément :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 30,
        ),
        'verifier' => array(
        ),
       ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'fact_code_postal',
          'label' => 'Code Postal :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 5,
        ),
        'verifier' => array(
          'type' => 'code_postal'
        ),
       ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'fact_ville',
          'label' => 'Ville :',
          'obligatoire' => 'oui',
          'size' => 20,
          'maxlength' => 30,
        ),
        'verifier' => array(
        ),
       ),
     ),
    ),
);
 return $carte3;
}

function formulaires_carte_charger_dist() {
// on charge les saisies et les champs qui nécessitent un accès par les fonctions
$valeurs = array(
   /*'texte1' => '',
    'texte2' => '',
    'texte3' => '',
    'nom' => '',
    'email' => '',
    'telephone' => '',
    'ville' => '',
    'adresse' => '',
    'code_postal' => '',
    'fact_nom' => '',    
    'fact_societe' => '',
    'fact_adresse' => '',
    'fact_code_postal' => '',
    'fact_ville' => '',*/           
    'carte' => carte(),
    'carte2' => carte2(),
    'carte3' => carte3(),
    '_etapes' => 3,
  );
return $valeurs;


}

function formulaires_carte_verifier_1_dist() {
  // on va chercher le pipeline saisies_verifier() dans son fichier
  include_spip('inc/saisies');
 
  // on charge les saisies
  $carte = carte();
  // saisies_verifier retourne un tableau des erreurs s'il y en a, sinon traiter() prend le relais
  return saisies_verifier($carte);
}

function formulaires_carte_verifier_2_dist() {
  // on va chercher le pipeline saisies_verifier() dans son fichier
  include_spip('inc/saisies');
 
  // on charge les saisies
  $carte2 = carte2();
  // saisies_verifier retourne un tableau des erreurs s'il y en a, sinon traiter() prend le relais
  return saisies_verifier($carte2);
}

function formulaires_carte_verifier_3_dist() {
  // on va chercher le pipeline saisies_verifier() dans son fichier
  include_spip('inc/saisies');
 
  // on charge les saisies
  $carte3 = carte3();
  // saisies_verifier retourne un tableau des erreurs s'il y en a, sinon traiter() prend le relais
  return saisies_verifier($carte3);
}

function formulaires_carte_traiter_dist() {
  // on charge les saisies, si besoin
  return array('message_ok'=>'Votre saisie a bien été prise en compte!');
}




?>