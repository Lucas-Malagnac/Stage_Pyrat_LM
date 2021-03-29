<?php

function police_choix(){
  $police_type = array(
     array( //liste déroulante
        'saisie' => 'selection',
        'options' => array(
          'nom' => 'police',
          'class' => 'police_select',
          'multiple' => 'multiple',
          'datas' => array(  // apparté : penser à ranger les choix par ordre alphabétique (ou numérique), c'est plus facile à trouver pour ceux qui utilisent le formulaire
            'time_new_roman' => 'Times New Roman',
            'verdana' => 'Verdana',
          )
        )
      ),
  );
  return $police_type;
}

function contenu() {  
  $contenu =array(
         array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'contenu1',
          'class' => 'carterie_contenu1'
        ),
      ), 
       array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'contenu2',
          'class' => 'carterie_contenu2'
        ),
      ), 
       array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'contenu3',
          'class' => 'carterie_contenu3',
        ),
      ),
    );
    return $contenu;
}


function carte() {

  $carte = array(
      array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'texte1',
          'label' => 'Texte 1:',
          'obligatoire' => 'oui',
          'class' => 'carterie_texte1'
        ),
      ),
    
      array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'texte2',
          'label' => 'Texte 2:',
          'obligatoire' => 'oui',
           'class' => 'carterie_texte2'
        )

      ),
      array(
        'saisie' => 'textarea',
        'options' => array(
          'nom' => 'texte3',
          'label' => 'Texte 3:',
          'obligatoire' => 'oui',
          'class' => 'carterie_texte3'
        ),
      ),    

    );/*fin de carte*/
    return $carte;
}


function carte2(){
  $carte2 =array(  
  array( // le fieldset 
    'saisie' => 'fieldset',
    'options' => array(
      'nom' => 'adresse_livraison',
      'label' => 'Adresse de livraison'
    ),

    'saisies' => array(
      array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'nom',
          'label' => 'Nom :',
          'obligatoire' => 'oui',
          'size' => 50,
          'class' => 'nom'
        ),
      ),
      array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'email',
          'label' => 'Email:',
          'obligatoire' => 'oui',
           'class' => 'email'
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
          'class' => 'telephone'
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
          'class' => 'ville'
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
          'class' => 'adresse'
        ),
        'verifier' => array(
    ),
      ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'adresse_complement',
          'label' => 'Adresse de complement :',
          'size' => 20,
          'maxlength' => 30,
          'class' => 'adresse_complement'
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
          'class' => 'code_postal'
        ),
        'verifier' => array(
          'type' => 'code_postal'
        ),
      ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'case',
          'type' => 'checkbox',
           'label' => 'Case :',
           'value' => 'a'
        ),
        'verifier' => array(
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
          'class' => 'fact_nom'
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
          'class' => 'fact_societe'
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
          'class' => 'fact_adresse'
        ),
        'verifier' => array(
        ),
       ),

       array(
        'saisie' => 'input',
        'options' => array(
          'nom' => 'fact_adresse_complement',
          'label' => 'Adresse complément :',
          'size' => 20,
          'maxlength' => 30,
          'class' => 'fact_adresse_complement'
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
          'class' => 'fact_code_postal'
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
          'class' => 'fact_ville'
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
           
    'carte' => carte(),
    'carte2' => carte2(),
    'carte3' => carte3(),
    '_etapes' => 3,

    'police_choix' => police_choix(),
    'police_type' => '',
    'contenu' => contenu(),
    'contenu1' => '',
    'contenu2' => '',
    'contenu3' => '',
    'case' => '',
    'texte1' => sql_fetsel('texte1', 'spipstage_modeles_textes'),
    'texte2' => sql_fetsel('texte2', 'spipstage_modeles_textes'),
    'texte3' => sql_fetsel('texte3', 'spipstage_modeles_textes'),
    'nom' => '',
    'email' => '',
    'telephone' => '',
    'ville' => '',
    'adresse' => '',
    'adresse_complement' => '',
    'code_postal' => '',
    'fact_nom' => '',    
    'fact_societe' => '',
    'fact_adresse' => '',
    'fact_code_postal' => '',
    'fact_adresse_complement' => '',
    'fact_ville' => '',
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

//$texte1 = _request('texte1');
$texte2 = _request('texte2');  
$texte3 = _request('texte3');
$nom = _request('nom');
$email = _request('email');
$adresse = _request('adresse');
$code_postal = _request('code_postal');
$telephone = _request('telephone');



$bdd_insert = sql_insertq('spipstage_cartes_commandes',
  array('nom' => $nom,
        'texte1' => $texte1,
        'texte2' => $texte2,
        'texte3' => $texte3,
        'email' => $email,
        'adresse' => $adresse,  
        'code_postal' => $code_postal,   
        'telephone' => $telephone
));
return array('message_ok'=>'Votre saisie a bien été prise en compte!');

}

/*sql_uptateq met à jour du contenu d'une table SQL*/

/*sql_countsel Retourne le nombre de lignes d'une sélection*/

/*sql_select effectue une requete de selection*/

/*_request permet de récupérer des variables envoyées par l’internaute, soit par l’URL, soit par un formulaire posté.*/

?>
