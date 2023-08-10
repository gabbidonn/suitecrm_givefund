<?php
$manifest = array (
    'acceptable_sugar_versions' =>  array (
        'regex_matches' => array(
            '.*',
        ),
    ),
    'acceptable_sugar_flavors' => array(
        'CE',
        'PRO',
        'ENT',
        'CORP',
        'ULT',
    ),
    'readme'=>'',
    'key'=>'',
    'author' => 'Smackcoders',
    'description' => 'Instant duplicate check',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'SM_DuplicateCheck',
    'published_date' => '2017/09/08',
    'type' => 'module',
    'version' => '1.1',
    'remove_tables' => false,

);
$installdefs = array (
    'id' => 'SM_DuplicateCheck', 
    'copy' =>
        array (
            array (
                'from' => '<basepath>/SM_DuplicateCheck',
                'to' => 'modules/SM_DuplicateCheck',
            ),
			array (
				'from' => '<basepath>/SM_DuplicateCheck.php',
				'to' => 'custom/modules/SM_DuplicateCheck.php',
			),
        ),
    'language' =>
        array (
            array(
                'from'=> '<basepath>/SM_DuplicateCheck_admin/language/en_us.SM_DuplicateCheck.php',
                'to_module'=> 'Administration',
                'language'=>'en_us'
            ),
        ),
    'administration' =>
        array(
            array(
                'from'=>'<basepath>/SM_DuplicateCheck_admin/menu/SM_DuplicateCheck_admin.php',
                'to' => 'modules/Administration/SM_DuplicateCheck_admin.php',
            ),
        ),
    'action_view_map' =>
        array (
            array(
                'from'=> '<basepath>/SM_DuplicateCheck_admin/actionviewmap/SM_DuplicateCheck_actionviewmap.php',
                'to_module'=> 'SM_DuplicateCheck',
            ),
        ),
    'logic_hooks' => array(
       array(
          'hook' => 'after_ui_frame',
          'order' => 1,
          'description' => 'Duplicate Check',
          'file' => 'custom/modules/SM_DuplicateCheck.php',
          'class' => 'SM_DuplicateCheck',
          'function' => 'sm_duplicate_check',
       ),

    ),
);

?>
