<?php 
add_action('init', 'joob_custom_init');
function joob_custom_init()
{
  
//Custom_Post_Emploi 
   register_post_type(
      'emploi',
      array(
        'label' => 'emploi',
        'labels' => array(
          'name' => 'emplois',
          'singular_name' => 'emploi',
          'all_items' => 'Tous les emplois',
          'add_new_item' => 'Ajouter un emploi',
          'edit_item' => 'Éditer le emploi',
          'new_item' => 'Nouveau emploi',
          'view_item' => 'Voir le emploi',
          'search_items' => 'Rechercher parmi les emplois',
          'not_found' => 'Pas de emploi trouvé',
          'not_found_in_trash'=> 'Pas de emploi dans la corbeille'
          ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
          'title',
          'editor',
          'thumbnail'
        ),
        'has_archive' => true
      )
    );

  register_taxonomy(
  'domaine',
  'emploi',
  array(
    'label' => 'domaines',
    'labels' => array(
    'name' => 'domaines',
    'singular_name' => 'domaine',
    'all_items' => 'Tous les domaines',
    'edit_item' => 'Éditer le domaine',
    'view_item' => 'Voir le domaine',
    'update_item' => 'Mettre à jour le domaine',
    'add_new_item' => 'Ajouter un domaine',
    'new_item_name' => 'Nouveau domaine',
    'search_items' => 'Rechercher parmi les domaines',
    'popular_items' => 'domaines les plus utilisés'
  ),
  'hierarchical' => true
  )
);

register_taxonomy(
  'distance',
  'emploi',
  array(
    'label' => 'distances',
    'labels' => array(
    'name' => 'distances',
    'singular_name' => 'distance',
    'all_items' => 'Toutes les distances',
    'edit_item' => 'Éditer la distance',
    'view_item' => 'Voir la distance',
    'update_item' => 'Mettre à jour la distance',
    'add_new_item' => 'Ajouter une distance',
    'new_item_name' => 'Nouvelle distance',
    'search_items' => 'Rechercher parmi les distances',
    'popular_items' => 'distances les plus utilisées'
  ),
  'hierarchical' => true
  )
);

register_taxonomy(
  'type_de_contract',
  'emploi',
  array(
    'label' => 'Type de contract',
    'labels' => array(
    'name' => 'Type de contract',
    'singular_name' => 'Type de contract',
    'all_items' => 'Toutes les Type de contract',
    'edit_item' => 'Éditer le Type de contract',
    'view_item' => 'Voir la Type de contract',
    'update_item' => 'Mettre à jour la Type de contract',
    'add_new_item' => 'Ajouter une Type de contract',
    'new_item_name' => 'Nouvelle Type de contract',
    'search_items' => 'Rechercher parmi les Type de contract',
    'popular_items' => 'Type de contract les plus utilisées'
  ),
  'hierarchical' => true
  )
);

register_taxonomy(
  'salaire',
  'emploi',
  array(
    'label' => 'salaire',
    'labels' => array(
    'name' => 'salaire',
    'singular_name' => 'salaire',
    'all_items' => 'Toutes les salaire',
    'edit_item' => 'Éditer la salaire',
    'view_item' => 'Voir la salaire',
    'update_item' => 'Mettre à jour la salaire',
    'add_new_item' => 'Ajouter une salaire',
    'new_item_name' => 'Nouvelle salaire',
    'search_items' => 'Rechercher parmi les salaire',
    'popular_items' => 'salaire les plus utilisées'
  ),
  'hierarchical' => true
  )
);

register_taxonomy(
  'entreprise',
  'emploi',
  array(
    'label' => 'entreprise',
    'labels' => array(
    'name' => 'entreprise',
    'singular_name' => 'entreprise',
    'all_items' => 'Toutes les entreprise',
    'edit_item' => 'Éditer la entreprise',
    'view_item' => 'Voir la entreprise',
    'update_item' => 'Mettre à jour la entreprise',
    'add_new_item' => 'Ajouter une entreprise',
    'new_item_name' => 'Nouvelle entreprise',
    'search_items' => 'Rechercher parmi les entreprise',
    'popular_items' => 'entreprise les plus utilisées'
  ),
  'hierarchical' => true
  )
);

register_taxonomy_for_object_type( 'domaine', 'emploi' );
register_taxonomy_for_object_type( 'distance', 'emploi' );
register_taxonomy_for_object_type( 'type_de_contract', 'emploi' );
register_taxonomy_for_object_type( 'salaire', 'emploi' );
register_taxonomy_for_object_type( 'entreprise', 'emploi' );

//Custom_Post_CV
register_post_type(
      'cv',
      array(
        'label' => 'cv',
        'labels' => array(
          'name' => 'cv',
          'singular_name' => 'cv',
          'all_items' => 'Tous les cvs',
          'add_new_item' => 'Ajouter un cv',
          'edit_item' => 'Éditer le cv',
          'new_item' => 'Nouveau cv',
          'view_item' => 'Voir le cv',
          'search_items' => 'Rechercher parmi les cvs',
          'not_found' => 'Pas de cv trouvé',
          'not_found_in_trash'=> 'Pas de cv dans la corbeille'
          ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
          'title',
          'editor',
          'thumbnail'
        ),
        'has_archive' => true
      )
    );

  register_taxonomy(
  'domaine',
  'cv',
  array(
    'label' => 'domaines',
    'labels' => array(
    'name' => 'domaines',
    'singular_name' => 'domaine',
    'all_items' => 'Tous les domaines',
    'edit_item' => 'Éditer le domaine',
    'view_item' => 'Voir le domaine',
    'update_item' => 'Mettre à jour le domaine',
    'add_new_item' => 'Ajouter un domaine',
    'new_item_name' => 'Nouveau domaine',
    'search_items' => 'Rechercher parmi les domaines',
    'popular_items' => 'domaines les plus utilisés'
  ),
  'hierarchical' => true
  )
);

register_taxonomy(
  'experience',
  'cv',
  array(
    'label' => "Années d'expérience",
    'labels' => array(
    'name' => 'expériences',
    'singular_name' => 'expérience',
    'all_items' => 'Toutes les expériences',
    'edit_item' => 'Éditer la expérience',
    'view_item' => 'Voir la expérience',
    'update_item' => 'Mettre à jour la expérience',
    'add_new_item' => 'Ajouter une expérience',
    'new_item_name' => 'Nouvelle expérience',
    'search_items' => 'Rechercher parmi les expériences',
    'popular_items' => 'expériences les plus utilisées'
  ),
  'hierarchical' => true
  )
);

register_taxonomy(
  'formation',
  'cv',
  array(
    'label' => 'Formation',
    'labels' => array(
    'name' => 'Formation',
    'singular_name' => 'Formation',
    'all_items' => 'Toutes les Formation',
    'edit_item' => 'Éditer la Formation',
    'view_item' => 'Voir la Formation',
    'update_item' => 'Mettre à jour la Formation',
    'add_new_item' => 'Ajouter une Formation',
    'new_item_name' => 'Nouvelle Formation',
    'search_items' => 'Rechercher parmi les Formation',
    'popular_items' => 'Formation les plus utilisées'
  ),
  'hierarchical' => true
  )
);
register_taxonomy_for_object_type( 'domaine', 'cv' );
register_taxonomy_for_object_type( 'experience', 'cv' );
register_taxonomy_for_object_type( 'formation', 'cv' );

//Custom_Post_conseils
register_post_type(
      'conseils',
      array(
        'label' => 'conseil',
        'labels' => array(
          'name' => 'conseil',
          'singular_name' => 'conseil',
          'all_items' => 'Tous les conseils',
          'add_new_item' => 'Ajouter un conseil',
          'edit_item' => 'Éditer le conseil',
          'new_item' => 'Nouveau conseil',
          'view_item' => 'Voir le conseil',
          'search_items' => 'Rechercher parmi les conseils',
          'not_found' => 'Pas de conseil trouvé',
          'not_found_in_trash'=> 'Pas de conseil dans la corbeille'
          ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
          'title',
          'editor',
          'thumbnail'
        ),
        'has_archive' => true
      )
    );

//Custom_Post_Services
register_post_type(
      'service',
      array(
        'label' => 'service',
        'labels' => array(
          'name' => 'service',
          'singular_name' => 'service',
          'all_items' => 'Tous les services',
          'add_new_item' => 'Ajouter un service',
          'edit_item' => 'Éditer le service',
          'new_item' => 'Nouveau service',
          'view_item' => 'Voir le service',
          'search_items' => 'Rechercher parmi les services',
          'not_found' => 'Pas de service trouvé',
          'not_found_in_trash'=> 'Pas de service dans la corbeille'
          ),
        'public' => true,
        'capability_type' => 'post',
        'supports' => array(
          'title',
          'editor',
          'thumbnail'
        ),
        'has_archive' => true
      )
    );
}