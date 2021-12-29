<?php declare(strict_types=1);

namespace TestForm\Subscriber;

use SasShortcode\Content\Cms\DataResolver\ShortCodeResolver;
use Shopware\Core\Content\Seo\SeoUrlPlaceholderHandlerInterface;
use Shopware\Core\PlatformRequest;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Framework\Routing\RequestTransformer;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use TestForm\Storefront\Page\TestForm\TestFormPageLoader;
use  Shopware\Core\Framework\DataAbstractionLayer\Event\EntityWrittenEvent;


class ResponseSubscriber implements EventSubscriberInterface
{
    private ShortCodeResolver $shortCodeResolver;
    private TestFormPageLoader $testFormPageLoader;

    private SeoUrlPlaceholderHandlerInterface $seoUrlReplacer;

    public function __construct( SeoUrlPlaceholderHandlerInterface $seoUrlReplacer,TestFormPageLoader $testFormPageLoader)
    {

        $this->seoUrlReplacer = $seoUrlReplacer;
        $this->testFormPageLoader = $testFormPageLoader;
    }

    public static function getSubscribedEvents(): array
    {
        return [
//            'test_form.written' => 'onContentResponse',
            'kernel.response' => 'onContentResponse',
        ];
    }
    public function onContentResponse(ResponseEvent $event): void
    {

        $salesChannelContext = $event->getRequest()->attributes->get(PlatformRequest::ATTRIBUTE_SALES_CHANNEL_CONTEXT_OBJECT);
        // dd($salesChannelContext);
        if (!$salesChannelContext || !$salesChannelContext instanceof SalesChannelContext) {
            return;
        }

        $response = $event->getResponse();
        $content = $this->testFormPageLoader;



        $host = $event->getRequest()->attributes->get(RequestTransformer::STOREFRONT_URL);
       // $host = $request->attributes->get(RequestTransformer::STOREFRONT_URL);
      //  $parameter = ['productId' => $product->getId()];
     //   $raw = $this->seoUrlReplacer->generate('frontend.detail.page', $parameter);
        if ($content !== false && isset($host)) {
//            $response->setContent(
//                $this->seoUrlReplacer->replace("frontend.detail.page", $host, $salesChannelContext)
//            );
        }
    }
//    public function onContentResponse(EntityWrittenEvent $event): void
//    {
//       // dd($event);
//       // $salesChannelContext = $event->getRequest()->attributes->get(PlatformRequest::ATTRIBUTE_SALES_CHANNEL_CONTEXT_OBJECT);
//
//       //
//      //  $page = $this->examplePageLoader->load($event->getRequest(), $salesChannelContext);
//       // $page = $this->examplePageLoader->load($event, $context);
////        $response = $event->getResponse();
////     //   dd($page);
////        //$content = $page;
////
////        $host = $event->getRequest()->attributes->get(RequestTransformer::STOREFRONT_URL);
////
////
////        if (false !== true && is_string($host)) {
////            $response->setContent(
////                $this->seoUrlReplacer->replace("ssssss", $host)
////            );
////        }
//    }
}
