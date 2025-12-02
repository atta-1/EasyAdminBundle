<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Contracts\Factory;

use EasyCorp\Bundle\EasyAdminBundle\Collection\ActionCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\EntityCollection;
use EasyCorp\Bundle\EasyAdminBundle\Context\AdminContext;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Controller\CrudControllerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Controller\DashboardControllerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Dto\ActionConfigDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;

interface ActionFactoryInterface
{
    public function processEntityActions(EntityDto $entityDto, ActionConfigDto $actionsDto): void;

    public function processGlobalActions(?ActionConfigDto $actionsDto = null): ActionCollection;
    
    public function buildActionsConfig(DashboardControllerInterface $dashboardController, ?CrudControllerInterface $crudController, AdminContext $context, ?string $pageName): ActionConfigDto;

    public function processGlobalActionsAndEntityActionsForAll(EntityCollection $entityDtos, ActionConfigDto $actionConfigDto): ActionCollection;
}
