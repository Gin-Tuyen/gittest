<?php
/**
 * Created by PhpStorm.
 * User: gin
 * Date: 11/15/16
 * Time: 11:05 PM
 */
namespace Magestore\Student\Api\Data;

interface  StudentInterface extends \Magento\Framework\Api\ExtensibleDataInterface{

    const STUDENT_ID = 'id';
    const  STUDENT_NAME = 'name';
    const  STUDENT_CLASS = 'class';
    const  STUDENT_UNIVERSITY = 'university';

    public function getName();
    public function setName($name);

    public function getId();
    public function setId($id);

    public function getClass();
    public function setClass($class);

    public function getUniversity();
    public function setUniversity($university);

}