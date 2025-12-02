<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Contracts\Factory;

use EasyCorp\Bundle\EasyAdminBundle\Collection\EntityCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;

interface FieldFactoryInterface
{
    public function processFields(EntityDto $entityDto, FieldCollection $fields): void;

    public function processFieldsForAll(EntityCollection $entityDtos, FieldCollection $fields, ?string $currentPage = null): void;
}
