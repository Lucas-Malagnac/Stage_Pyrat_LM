<?php

/**
 *  Fichier généré par la Fabrique de plugin v7
 *   le 2021-03-17 16:59:31
 *
 *  Ce fichier de sauvegarde peut servir à recréer
 *  votre plugin avec le plugin «Fabrique» qui a servi à le créer.
 *
 *  Bien évidemment, les modifications apportées ultérieurement
 *  par vos soins dans le code de ce plugin généré
 *  NE SERONT PAS connues du plugin «Fabrique» et ne pourront pas
 *  être recréées par lui !
 *
 *  La «Fabrique» ne pourra que régénerer le code de base du plugin
 *  avec les informations dont il dispose.
 *
**/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$data = array (
  'fabrique' => 
  array (
    'version' => 7,
  ),
  'paquet' => 
  array (
    'prefixe' => 'Carterie',
    'nom' => 'Carterie',
    'slogan' => '',
    'description' => '',
    'logo' => 
    array (
      0 => '',
    ),
    'credits' => 
    array (
      'logo' => 
      array (
        'texte' => '',
        'url' => '',
      ),
    ),
    'version' => '1.0.0',
    'auteur' => 'Malagnac',
    'auteur_lien' => '',
    'licence' => 'GNU/GPL',
    'categorie' => 'divers',
    'etat' => 'dev',
    'compatibilite' => '[3.2.9;3.2.*]',
    'documentation' => '',
    'administrations' => 'on',
    'schema' => '1.0.0',
    'formulaire_config' => 'on',
    'formulaire_config_titre' => '',
    'fichiers' => 
    array (
      0 => 'autorisations',
      1 => 'fonctions',
      2 => 'options',
      3 => 'pipelines',
    ),
    'inserer' => 
    array (
      'paquet' => '',
      'administrations' => 
      array (
        'maj' => '',
        'desinstallation' => '',
        'fin' => '',
      ),
      'base' => 
      array (
        'tables' => 
        array (
          'fin' => '',
        ),
      ),
    ),
    'scripts' => 
    array (
      'pre_copie' => '',
      'post_creation' => '',
    ),
    'exemples' => 'on',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Carterie',
      'nom_singulier' => 'Carterie',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'table' => 'spip_cartes_commandes',
      'cle_primaire' => 'id_commande',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'commande',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Id image',
          'champ' => 'id_image',
          'sql' => 'int(11) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Texte1',
          'champ' => 'texte1',
          'sql' => 'mediumtext',
          'recherche' => '',
          'saisie' => 'fieldset',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Texte2',
          'champ' => 'texte2',
          'sql' => 'mediumtext',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Texte3',
          'champ' => 'texte3',
          'sql' => 'mediumtext',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Id police',
          'champ' => 'id_police',
          'sql' => 'int(11) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
        6 => 
        array (
          'nom' => 'Adresse',
          'champ' => 'adresse',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Adresse complement',
          'champ' => 'adresse_complement',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        8 => 
        array (
          'nom' => 'Code postal',
          'champ' => 'code_postal',
          'sql' => 'varchar(63) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        9 => 
        array (
          'nom' => 'Ville',
          'champ' => 'ville',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        10 => 
        array (
          'nom' => 'Email',
          'champ' => 'email',
          'sql' => 'varchar(511) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => 'conteneur_class=pleine_largeur, class=inserer_barre_edition, rows=4',
        ),
        11 => 
        array (
          'nom' => 'Telephone',
          'champ' => 'telephone',
          'sql' => 'varchar(63) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        12 => 
        array (
          'nom' => 'Fact nom',
          'champ' => 'fact_nom',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        13 => 
        array (
          'nom' => 'Fact societe',
          'champ' => 'fact_societe',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        14 => 
        array (
          'nom' => 'Fact adresse',
          'champ' => 'fact_adresse',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        15 => 
        array (
          'nom' => 'Fact adresse complement',
          'champ' => 'fact_adresse_complement',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        16 => 
        array (
          'nom' => 'Fact code postal',
          'champ' => 'fact_code_postal',
          'sql' => 'varchar(63) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        17 => 
        array (
          'nom' => 'Fact ville',
          'champ' => 'fact_ville',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        18 => 
        array (
          'nom' => 'Quantite',
          'champ' => 'quantite',
          'sql' => 'int(11) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        19 => 
        array (
          'nom' => 'Id transaction',
          'champ' => 'id_transaction',
          'sql' => 'int(11) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'nom',
      'champ_date' => 'date',
      'champ_date_ignore' => '',
      'statut' => 'on',
      'chaines' => 
      array (
        'titre_objets' => 'Cartes commandes',
        'titre_page_objets' => 'Les cartes commandes',
        'titre_objet' => 'Cartes commande',
        'info_aucun_objet' => 'Aucun cartes commande',
        'info_1_objet' => 'Un cartes commande',
        'info_nb_objets' => '@nb@ cartes commandes',
        'icone_creer_objet' => 'Créer un cartes commande',
        'icone_modifier_objet' => 'Modifier ce cartes commande',
        'titre_logo_objet' => 'Logo de ce cartes commande',
        'titre_langue_objet' => 'Langue de ce cartes commande',
        'texte_definir_comme_traduction_objet' => 'Ce cartes commande est une traduction du cartes commande numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce cartes commande',
        'titre_objets_rubrique' => 'Cartes commandes de la rubrique',
        'info_objets_auteur' => 'Les cartes commandes de cet auteur',
        'retirer_lien_objet' => 'Retirer ce cartes commande',
        'retirer_tous_liens_objets' => 'Retirer tous les cartes commandes',
        'ajouter_lien_objet' => 'Ajouter ce cartes commande',
        'texte_ajouter_objet' => 'Ajouter un cartes commande',
        'texte_creer_associer_objet' => 'Créer et associer un cartes commande',
        'texte_changer_statut_objet' => 'Ce cartes commande est :',
        'supprimer_objet' => 'Supprimer cet cartes commande',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet cartes commande ?',
      ),
      'liaison_directe' => '',
      'table_liens' => '',
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
      'fichiers' => 
      array (
        'echafaudages' => 
        array (
          0 => 'prive/squelettes/contenu/objets.html',
          1 => 'prive/objets/infos/objet.html',
          2 => 'prive/squelettes/contenu/objet.html',
        ),
        'explicites' => 
        array (
          0 => 'action/supprimer_objet.php',
        ),
      ),
      'saisies' => 
      array (
        0 => 'objets',
      ),
      'autorisations' => 
      array (
        'objets_voir' => '',
        'objet_creer' => '',
        'objet_voir' => '',
        'objet_modifier' => '',
        'objet_supprimer' => '',
        'associerobjet' => '',
      ),
      'boutons' => 
      array (
        0 => 'menu_edition',
        1 => 'outils_rapides',
      ),
    ),
  ),
  'images' => 
  array (
    'paquet' => 
    array (
      'logo' => 
      array (
        0 => 
        array (
          'extension' => '',
          'contenu' => '',
        ),
      ),
    ),
    'objets' => 
    array (
      0 => 
      array (
      ),
    ),
  ),
);
