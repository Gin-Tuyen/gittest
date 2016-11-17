<?php
/**
 * Created by PhpStorm.
 * User: gin
 * Date: 11/15/16
 * Time: 11:04 PM
 */
namespace Magestore\Student\Model\ResourceModel;

class Student  extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('student_student', 'id');
    }
}