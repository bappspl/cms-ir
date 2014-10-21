<?php

namespace Page\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Result;
use Zend\Authentication\Storage\Session as SessionStorage;
use Zend\Db\Adapter\Adapter as DbAdapter;
use Zend\Authentication\Adapter\DbTable as AuthAdapter;

class PageController extends AbstractActionController
{
    public function homeAction()
    {
        $menu = $this->getMenuService()->getMenuByMachineName('main-menu');
        $this->layout()->menu = $menu;

        $slider = $this->getSliderervice()->findOneBySlug('slider-glowny');
        $items = $slider->getItems();

        $this->layout('layout/home');

        $viewParams = array();
        $viewParams['items'] = $items;
        $viewModel = new ViewModel();
        $viewModel->setVariables($viewParams);
        return $viewModel;
    }

    /**
     * @return \CmsIr\Menu\Service\MenuService
     */
    public function getMenuService()
    {
        return $this->getServiceLocator()->get('CmsIr\Menu\Service\MenuService');
    }

    /**
     * @return \CmsIr\Slider\Service\SliderService
     */
    public function getSliderervice()
    {
        return $this->getServiceLocator()->get('CmsIr\Slider\Service\SliderService');
    }
}
