<?php declare(strict_types=1);

namespace TestForm\Storefront\Page\TestForm;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\PageLoadedEvent;
use Symfony\Component\HttpFoundation\Request;

class TestFormPageLoadedEvent extends PageLoadedEvent
{
protected TestFormPage $page;

    public function __construct(TestFormPage $page, SalesChannelContext $salesChannelContext, Request $request)
    {
        $this->page = $page;
        parent::__construct($salesChannelContext, $request);
    }

    public function getPage(): TestFormPage
    {
        return $this->page;
    }
}
