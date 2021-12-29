<?php declare(strict_types=1);

namespace TestForm\Core\Content\Form;

use phpDocumentor\Reflection\Types\Integer;
use Shopware\Core\Content\Media\MediaEntity;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;



//use Shopware\Core\Content\Product\ProductCollection;
use AkForm\Core\Content\FormField\FormFieldCollection;

class FormEntity extends Entity
{
    use EntityIdTrait;
    /**
     * @var FormFieldCollection|null
     */
    protected $title;

    public function getTitle() { return $this->title; }
    public function setTitle(string $value): void { $this->title = $value; }

}
