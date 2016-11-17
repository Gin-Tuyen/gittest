<?php
/**
 * Created by PhpStorm.
 * User: gin
 * Date: 11/15/16
 * Time: 11:02 PM
 */
namespace Magestore\Student\Model;

use Magestore\Student\Api\Data\StudentInterface;

class Student  extends \Magento\Framework\Model\AbstractExtensibleModel implements StudentInterface {


    public function getName()
    {
        $this->getData(self::STUDENT_NAME);
    }

    public function setName($name)
    {
        $this->setData(self::STUDENT_NAME,$name);
    }

    public function getClass()
    {
        $this->getData(self::STUDENT_CLASS);
    }

    public function setClass($class)
    {
        $this->setData(self::STUDENT_CLASS,$class);
    }

    public function getUniversity()
    {
        $this->getData(self::STUDENT_UNIVERSITY);
    }

    public function setUniversity($university)
    {
        $this->setData(self::STUDENT_UNIVERSITY,$university);
    }
}