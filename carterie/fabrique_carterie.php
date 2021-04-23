<?php

/**
 *  Fichier généré par la Fabrique de plugin v7
 *   le 2021-04-20 13:29:40
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
    'prefixe' => 'carterie',
    'nom' => 'Carterie',
    'slogan' => 'Des cartes comme s\'il en pleuvait',
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
    'version' => '1.1.0',
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
      'paquet' => '<pipeline nom="insert_head_css" inclure="carterie_pipelines.php" />',
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
    'saisies_mode' => 'html',
  ),
  'objets' => 
  array (
    0 => 
    array (
      'nom' => 'Cartes commandes',
      'nom_singulier' => 'Cartes commande',
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
          'saisie' => '',
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
          'nom' => 'Extension',
          'champ' => 'extension',
          'sql' => 'varchar(10) NOT NULL DEFAULT \'\'',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'Fichier',
          'champ' => 'fichier',
          'sql' => 'longblob NOT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Nom',
          'champ' => 'nom',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        8 => 
        array (
          'nom' => 'Adresse',
          'champ' => 'adresse',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        9 => 
        array (
          'nom' => 'Adresse complement',
          'champ' => 'adresse_complement',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        10 => 
        array (
          'nom' => 'Code postal',
          'champ' => 'code_postal',
          'sql' => 'varchar(63) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        11 => 
        array (
          'nom' => 'Ville',
          'champ' => 'ville',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        12 => 
        array (
          'nom' => 'Email',
          'champ' => 'email',
          'sql' => 'varchar(511) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        13 => 
        array (
          'nom' => 'Telephone',
          'champ' => 'telephone',
          'sql' => 'varchar(63) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        14 => 
        array (
          'nom' => 'Fact nom',
          'champ' => 'fact_nom',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        15 => 
        array (
          'nom' => 'Fact societe',
          'champ' => 'fact_societe',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        16 => 
        array (
          'nom' => 'Fact adresse',
          'champ' => 'fact_adresse',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        17 => 
        array (
          'nom' => 'Fact adresse complement',
          'champ' => 'fact_adresse_complement',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        18 => 
        array (
          'nom' => 'Fact code postal',
          'champ' => 'fact_code_postal',
          'sql' => 'varchar(63) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        19 => 
        array (
          'nom' => 'Fact ville',
          'champ' => 'fact_ville',
          'sql' => 'varchar(255) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        20 => 
        array (
          'nom' => 'Quantite',
          'champ' => 'quantite',
          'sql' => 'int(11) DEFAULT NULL',
          'recherche' => '',
          'saisie' => '',
          'explication' => '',
          'saisie_options' => '',
        ),
        21 => 
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
      'champ_date' => '',
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
      ),
    ),
    1 => 
    array (
      'nom' => 'Tailles zones',
      'nom_singulier' => 'Taille zone',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'table' => 'spip_cartes_tailles_zones',
      'cle_primaire' => 'id_taille_zone',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'taille_zone',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(127) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '1',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Zone1 x',
          'champ' => 'zone1_x',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'Zone1 y',
          'champ' => 'zone1_y',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        3 => 
        array (
          'nom' => 'Zone1 largeur',
          'champ' => 'zone1_largeur',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        4 => 
        array (
          'nom' => 'Zone1 hauteur',
          'champ' => 'zone1_hauteur',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        5 => 
        array (
          'nom' => 'Zone2 x',
          'champ' => 'zone2_x',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        6 => 
        array (
          'nom' => 'Zone2 y',
          'champ' => 'zone2_y',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        7 => 
        array (
          'nom' => 'Zone2 largeur',
          'champ' => 'zone2_largeur',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        8 => 
        array (
          'nom' => 'Zone2 hauteur',
          'champ' => 'zone2_hauteur',
          'sql' => 'int(11) DEFAULT NULL',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'champ_date' => '',
      'champ_date_ignore' => '',
      'statut' => '',
      'chaines' => 
      array (
        'titre_objets' => 'Cartes tailles zones',
        'titre_page_objets' => 'Les cartes tailles zones',
        'titre_objet' => 'Cartes tailles zone',
        'info_aucun_objet' => 'Aucun cartes tailles zone',
        'info_1_objet' => 'Un cartes tailles zone',
        'info_nb_objets' => '@nb@ cartes tailles zones',
        'icone_creer_objet' => 'Créer un cartes tailles zone',
        'icone_modifier_objet' => 'Modifier ce cartes tailles zone',
        'titre_logo_objet' => 'Logo de ce cartes tailles zone',
        'titre_langue_objet' => 'Langue de ce cartes tailles zone',
        'texte_definir_comme_traduction_objet' => 'Ce cartes tailles zone est une traduction du cartes tailles zone numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce cartes tailles zone',
        'titre_objets_rubrique' => 'Cartes tailles zones de la rubrique',
        'info_objets_auteur' => 'Les cartes tailles zones de cet auteur',
        'retirer_lien_objet' => 'Retirer ce cartes tailles zone',
        'retirer_tous_liens_objets' => 'Retirer tous les cartes tailles zones',
        'ajouter_lien_objet' => 'Ajouter ce cartes tailles zone',
        'texte_ajouter_objet' => 'Ajouter un cartes tailles zone',
        'texte_creer_associer_objet' => 'Créer et associer un cartes tailles zone',
        'texte_changer_statut_objet' => 'Ce cartes tailles zone est :',
        'supprimer_objet' => 'Supprimer cet cartes tailles zone',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet cartes tailles zone ?',
      ),
      'liaison_directe' => '',
      'table_liens' => 'on',
      'vue_liens' => 
      array (
        0 => 'spip_documents',
      ),
      'afficher_liens' => 'on',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
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
      ),
    ),
    2 => 
    array (
      'nom' => 'Cartes_images',
      'nom_singulier' => 'Carte_image',
      'genre' => 'feminin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'table' => 'spip_cartes_images',
      'cle_primaire' => 'id_image',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'image',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'Titre',
          'champ' => 'titre',
          'sql' => 'varchar(25) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'Chemin_image',
          'champ' => 'chemin_image',
          'sql' => 'varchar(25) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'champ_date' => '',
      'champ_date_ignore' => '',
      'statut' => '',
      'chaines' => 
      array (
        'titre_objets' => 'Cartes_images',
        'titre_page_objets' => 'Les cartes_images',
        'titre_objet' => 'Carte_image',
        'info_aucun_objet' => 'Aucune carte_image',
        'info_1_objet' => 'Une carte_image',
        'info_nb_objets' => '@nb@ cartes_images',
        'icone_creer_objet' => 'Créer une carte_image',
        'icone_modifier_objet' => 'Modifier cette carte_image',
        'titre_logo_objet' => 'Logo de cette carte_image',
        'titre_langue_objet' => 'Langue de cette carte_image',
        'texte_definir_comme_traduction_objet' => 'Cette carte_image est une traduction de la carte_image numéro :',
        'titre_\\objets_lies_objet' => 'Liés à cette carte_image',
        'titre_objets_rubrique' => 'Cartes_images de la rubrique',
        'info_objets_auteur' => 'Les cartes_images de cet auteur',
        'retirer_lien_objet' => 'Retirer cette carte_image',
        'retirer_tous_liens_objets' => 'Retirer toutes les cartes_images',
        'ajouter_lien_objet' => 'Ajouter cette carte_image',
        'texte_ajouter_objet' => 'Ajouter une carte_image',
        'texte_creer_associer_objet' => 'Créer et associer une carte_image',
        'texte_changer_statut_objet' => 'Cette carte_image est :',
        'supprimer_objet' => 'Supprimer cette carte_image',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cette carte_image ?',
      ),
      'liaison_directe' => '',
      'table_liens' => '',
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
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
      ),
    ),
    3 => 
    array (
      'nom' => 'Modeles textes',
      'nom_singulier' => 'Modele texte',
      'genre' => 'masculin',
      'logo' => 
      array (
        0 => '',
        32 => '',
        24 => '',
        16 => '',
        12 => '',
      ),
      'table' => 'spip_carte_modeles_textes',
      'cle_primaire' => 'id_carte_modeles_texte',
      'cle_primaire_sql' => 'bigint(21) NOT NULL',
      'table_type' => 'carte_modeles_texte',
      'champs' => 
      array (
        0 => 
        array (
          'nom' => 'id_type_carte',
          'champ' => 'id_type_carte',
          'sql' => 'int(11) NOT NULL DEFAULT 0',
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        1 => 
        array (
          'nom' => 'titre',
          'champ' => 'titre',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
            2 => 'obligatoire',
          ),
          'recherche' => '',
          'saisie' => 'input',
          'explication' => '',
          'saisie_options' => '',
        ),
        2 => 
        array (
          'nom' => 'texte_modele',
          'champ' => 'texte_modele',
          'sql' => 'varchar(255) NOT NULL DEFAULT \'\'',
          'caracteristiques' => 
          array (
            0 => 'editable',
            1 => 'versionne',
          ),
          'recherche' => '',
          'saisie' => 'textarea',
          'explication' => '',
          'saisie_options' => '',
        ),
      ),
      'champ_titre' => 'titre',
      'champ_date' => '',
      'champ_date_ignore' => '',
      'statut' => '',
      'chaines' => 
      array (
        'titre_objets' => 'Modeles textes',
        'titre_page_objets' => 'Les modeles textes',
        'titre_objet' => 'Modele texte',
        'info_aucun_objet' => 'Aucun modele texte',
        'info_1_objet' => 'Un modele texte',
        'info_nb_objets' => '@nb@ modeles textes',
        'icone_creer_objet' => 'Créer un modele texte',
        'icone_modifier_objet' => 'Modifier ce modele texte',
        'titre_logo_objet' => 'Logo de ce modele texte',
        'titre_langue_objet' => 'Langue de ce modele texte',
        'texte_definir_comme_traduction_objet' => 'Ce modele texte est une traduction du modele texte numéro :',
        'titre_\\objets_lies_objet' => 'Liés à ce modele texte',
        'titre_objets_rubrique' => 'Modeles textes de la rubrique',
        'info_objets_auteur' => 'Les modeles textes de cet auteur',
        'retirer_lien_objet' => 'Retirer ce modele texte',
        'retirer_tous_liens_objets' => 'Retirer tous les modeles textes',
        'ajouter_lien_objet' => 'Ajouter ce modele texte',
        'texte_ajouter_objet' => 'Ajouter un modele texte',
        'texte_creer_associer_objet' => 'Créer et associer un modele texte',
        'texte_changer_statut_objet' => 'Ce modele texte est :',
        'supprimer_objet' => 'Supprimer cet modele texte',
        'confirmer_supprimer_objet' => 'Confirmez-vous la suppression de cet modele texte ?',
      ),
      'liaison_directe' => '',
      'table_liens' => '',
      'afficher_liens' => '',
      'roles' => '',
      'auteurs_liens' => '',
      'vue_auteurs_liens' => '',
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
      1 => 
      array (
      ),
      2 => 
      array (
      ),
      3 => 
      array (
      ),
    ),
  ),
);
