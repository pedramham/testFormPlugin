<?php
/**
 * Created by PhpStorm.
 * User: mori
 * Date: 10/24/20
 * Time: 11:31 AM
 */

namespace TestForm\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Response;
use TestForm\Storefront\Page\TestForm\TestFormPageLoader;
use Shopware\Core\Content\Cms\SalesChannel\SalesChannelCmsPageLoaderInterface;
use Shopware\Storefront\Page\GenericPageLoaderInterface;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\Context;
/**
 * @RouteScope(scopes={"storefront"})
 */
class SubmitFormController  extends StorefrontController
{
    private TestFormPageLoader $testFormPageLoader;
    private GenericPageLoaderInterface $genericPageLoader;
    private SalesChannelCmsPageLoaderInterface $cmsPageLoader;
    private EntityRepositoryInterface $formRepository;

    public function __construct(GenericPageLoaderInterface $genericPageLoader,
                                SalesChannelCmsPageLoaderInterface $cmsPageLoader,
                                TestFormPageLoader $testFormPageLoader,
                                EntityRepositoryInterface $formRepository)
    {

        $this->genericPageLoader = $genericPageLoader;
        $this->cmsPageLoader = $cmsPageLoader;
        $this->testFormPageLoader = $testFormPageLoader;
        $this->formRepository = $formRepository;


    }
    /**
     * @Route("/test-form-page", name="frontend.test.form.page", methods={"GET"})
     */
    public function examplePage(Request $request, SalesChannelContext $context): Response
    {
        $page = $this->testFormPageLoader->load($request, $context);
        return $this->renderStorefront('@TestForm/storefront/page/testForm/index.html.twig', [
            'TestForm' => 'TestForm',
            'page' => $page
        ]);
    }

    /**
     * @Route("/test/form/plugin/submit", name="test.form.contact.send", options={"seo"="false"}, methods={"POST"})
     */

    public function submitFormPlugin(Request $request,SalesChannelContext $context){
        if ($request->isMethod('POST')) {
            $page = $this->testFormPageLoader->load($request, $context);
            $this->formRepository->create([
                [
                    'title' => 'Example product'
                ]
            ],  Context::createDefaultContext());
            return $this->renderStorefront('@TestForm/storefront/page/testForm/index.html.twig', [
                'example' => 'TestForm',
                'page' => $page
            ]);
    //        return $this->redirect("http://wildcat.local/", 301);
//            return $this->render('@TestForm/storefront/page/content/index.html.twig', [
//                "url"  => "susses"
//            ]);
         //   return $this->renderStorefront('@Storefront/storefront/page/content/index.html.twig', ['page' => $page]);

        }
    }

}
