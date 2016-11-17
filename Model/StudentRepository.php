<?php
/**
 * Created by PhpStorm.
 * User: gin
 * Date: 11/15/16
 * Time: 11:35 PM
 */
namespace Magestore\Student\Model;

use Magestore\Student\Api\StudentRepositoryInterface;

class StudentRepository implements  StudentRepositoryInterface {

    public function save()
    {
        \Zend_debug::dump('111');
       return  'success';
    }
}