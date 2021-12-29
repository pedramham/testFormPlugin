<?php declare(strict_types=1);

namespace TestForm\Storefront\Page\TestForm;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\GenericPageLoaderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
class TestFormPageLoader
{
    private GenericPageLoaderInterface $genericPageLoader;

    private EventDispatcherInterface $eventDispatcher;

    public function __construct(GenericPageLoaderInterface $genericPageLoader, EventDispatcherInterface $eventDispatcher)
    {
        $this->genericPageLoader = $genericPageLoader;
        $this->eventDispatcher = $eventDispatcher;
    }

    public function load(Request $request, SalesChannelContext $context): TestFormPage
    {
        $page = $this->genericPageLoader->load($request, $context);
        $page = TestFormPage::createFrom($page);

     //   $page->setExampleData($page);

        $this->eventDispatcher->dispatch(
            new TestFormPageLoadedEvent($page, $context, $request)
        );

        return $page;
    }
}
