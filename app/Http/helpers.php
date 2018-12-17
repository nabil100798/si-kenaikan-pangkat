<?php


  function checkPermission($permission){

    $userAccess = getMyPermission(auth()->user()->is_permissions);

    foreach ($permission as $key => $value) {

      if($value == $userAccess){

        return true;

      }

    }

    return false;

  }


  function getMyPermission($id)

  {

    switch ($id) {

      case 1:

        return 'admin';

        break;

      case 2:

        return 'superadmin';

        break;

      default:

        return 'user';

        break;

    }

  }


?>
