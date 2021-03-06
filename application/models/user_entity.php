<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class User_entity
{

    public $user_id = null;

    public $email = '';

    public $password = '';

    public function setPassword($password)
    {
        $this -> password = md5(PMS_SALT.$password.PMS_SALT);
    }
}

/**
 *
 */
class User_info_entity
{

    public $user_id = null;

    public $nickname = '';

    public $avatar = '';
}

/**
 *
 */
class User_relation_entity
{

    public $relation_id = null;

    public $from_user_id = '';

    public $to_user_id = '';
}

/**
 *
 */
class User_default_entity
{

    public $user_id = null;

    public $privacy_contact_need_agree = false;
}
