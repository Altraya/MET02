<?php

namespace App\Managers;

use App\Managers\ConnectionManager;
use App\Models\User;

/**
 * User Manager : CRUD operation and user management 
 */
class UserManager extends ConnectionAbstractManager
{

    /**
     * @param $id
     *
     * @return string
     */
    public function get($id)
    {
        if ($id === null) {
            $users = $entityManager->getRepository('App\Models\User')->findAll();
            $users = array_map(function($user) {
                return $this->convertToArray($user); },
                $users);
            $data = json_encode($users);
        } else {
            $data = $this->convertToArray($this->getEntityManager()->find('App\Entity\User', $id));
        }

        // @TODO handle correct status when no data is found...

        return json_encode($data);
    }
    
}