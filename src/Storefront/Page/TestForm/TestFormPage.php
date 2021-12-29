<?php declare(strict_types=1);

namespace TestForm\Storefront\Page\TestForm;

use Shopware\Storefront\Page\Page;
use TestForm\Core\Content\Form\FormEntity;

class TestFormPage extends Page
{
protected FormEntity $formEntity;

    public function getFormEntity(): FormEntity
    {
        return $this->formEntity;
    }

    public function setFormEntity(FormEntity $formEntity): void
    {
        $this->formEntity = $formEntity;
    }
}
