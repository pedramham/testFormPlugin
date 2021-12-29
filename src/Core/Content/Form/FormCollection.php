<?php declare(strict_types=1);

namespace TestForm\Core\Content\Form;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void            add(FormEntity $entity)
 * @method void            set(string $key, FormEntity $entity)
 * @method FormEntity[]    getIterator()
 * @method FormEntity[]    getElements()
 * @method FormEntity|null get(string $key)
 * @method FormEntity|null first()
 * @method FormEntity|null last()
 */
class FormCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return FormEntity::class;
    }
}
