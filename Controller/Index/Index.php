<?php
/**
 * Created by PhpStorm.
 * User: gin
 * Date: 11/15/16
 * Time: 10:55 PM
 */
namespace  Magestore\Student\Controller\Index;

use Magento\Framework\App\ResponseInterface;

class Index extends  \Magento\Framework\App\Action\Action {

    protected  $studentInterfaceFactory;
    protected  $studentRepositoryInterface;
    protected  $studentFactory;
    /**
     * @param  \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magestore\Student\Api\Data\StudentInterfaceFactory $studentInterfaceFactory,
        \Magestore\Student\Api\StudentRepositoryInterface $studentRepositoryInterface

    
    )
    {
        $this->studentInterfaceFactory = $studentInterfaceFactory;
        $this->studentRepositoryInterface = $studentRepositoryInterface;
        parent::__construct($context);
    }

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
         $student = $this->studentInterfaceFactory->create();
        $this->studentRepositoryInterface->save();
    }
}