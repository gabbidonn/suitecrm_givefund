<?php
require_once('include/MVC/Controller/SugarController.php');
class SM_DuplicateCheckController extends SugarController
{
    public function action_GetFieldsName()  {
        $this->view = 'getfieldsname';
    }

    public function action_UpdateFields() {
        $this->view = 'updatefields';
    }

    public function action_ValidateDuplicate() {
        $this->view = 'validateduplicate';
    }

    public function action_settings() {
        $this->view = 'settings';
    }
}
?>
