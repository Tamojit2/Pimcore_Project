<?php

namespace AppBundle\Controller;

use Pimcore\Bundle\AdminBundle\Controller\Rest\AbstractRestController;
use Pimcore\Bundle\AdminBundle\HttpFoundation\JsonResponse;
use Pimcore\Bundle\AdminBundle\Security\BruteforceProtectionHandler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Pimcore\Model\DataObject\Products;
use Pimcore\Model\Asset\MetaData\ClassDefinition\Data\Asset;
//use Pimcore\Model\DataObject\Brand;
//use Pimcore\Model\DataObject\Objectbrick\Data\Cosmetics;


/**
 * Class RestController
 * @package AppBundle\Controller
 */

 class RestController extends AbstractRestController
 {
     CONST BASE_API_SERVICE = 'base_api_service';

     /**
      * @Route("/webservice/showProducts")
      * @Method({"GET"})
      * @param Request $request
      * @return \Symfony\Component\HttpFoundation\JsonResponse
      * @throws \Pimcore\Http\Exception\ResponseException
      * @throws \Exception
      */
    public function getProductList(Request $request, BruteforceProtectionHandler $bruteforceProtectionHandler)
    {
        $data = [];
        $products = new \Pimcore\Model\DataObject\Products\Listing();
        //$obj = new DataObject\Objectbrick\Data\Cosmetics($product);
                
        $products->getObjects();
        foreach ($products as $product)
        {
            $data[] = [
                'id' => $product->getId(),
                'sku' => $product->getSku(),
                'productName' => $product->getModelname(),
                //'description' => $product->getDescription(),
                'brandName' => $product->getBrand()->getName(),
                'category' => $product->getCategory()->getName(),
                'color' => $product->getColor(),
                'price' => $product->getPrice(),
                'discount' => $product->getDiscount(),
                'manufacture' => $product->getMfg()->toDateString(),
                'importdate' => $product->getImportdate()->toDateString(),
                'material' => $product->getMaterial(),
                //'finish' => $product->getFinish(),
                //'applicationArea' => $product->getApplicationarea()->getName(),
                'image' => $product->getImage(),
                'rating' => $product->getRating(),
                // $obj->getWaterproof();
                // $product->getClassification()->getCosmetics($obj);
                'classification' => $product->getClassification(),
                //->getRelativeFileSystemPath()
                /* add here all Objectbricks you need in the condition */
                //'objectbricks' => ['cosmetics','appliance','body','face','hair'],
                /* in the condition access Objectbrick attributes with OBJECTBRICKNAME.ATTRIBUTENAME */
                //'condition' => "cosmetics.waterproof > 2",
                'wifi' => $product->getWifi(),
                //'quantity' => $product->getQuantity()->__toString(),
                'bluetooth' => $product->getBluetooth(),
                //'maximumlife' => $product->getMaximumlife()->__toString(),
            ];
        }
        // $data = $this->getJsonData($request);
        // /** @var BaseService $baseService */
        // $baseService = $this->container->get(self::BASE_API_SERVICE);
        // $siteId = $this->validateSiteId($request);
        // $response = $baseService->authenticate-Customer($data, $request, $bruteforceProtectionHandler, $siteId);
        // if (!empty($response)) {
            return $this->createSuccessResponse($data, true);
        // }
        // return $this->createErrorResponse();
    }
    
    
    /**
      * @Route("/webservice/showProducts1")
      * @Method({"GET"})
      * @param Request $request
      * @return \Symfony\Component\HttpFoundation\JsonResponse
      * @throws \Pimcore\Http\Exception\ResponseException
      * @throws \Exception
      */
    public function getProductList1(Request $request, BruteforceProtectionHandler $bruteforceProtectionHandler)
    {
        $data = [];
        $products = new \Pimcore\Model\DataObject\Products\Listing();
        $products->setCondition("rating LIKE ?", ["%4 star%"]);
        //$entries->setCondition("sku LIKE ?", ["%%"]);
        
        //$obj = new DataObject\Objectbrick\Data\Cosmetics($product);
                
        $products->getObjects();
        foreach ($products as $product)
        {
            $data[] = [
                'id' => $product->getId(),
                'sku' => $product->getSku(),
                'productName' => $product->getModelname(),
                'brandName' => $product->getBrand()->getName(),
                'category' => $product->getCategory()->getName(),
                'color' => $product->getColor(),
                'price' => $product->getPrice(),
                'discount' => $product->getDiscount(),
                'manufacture' => $product->getMfg()->toDateString(),
                'importdate' => $product->getImportdate()->toDateString(),
                'material' => $product->getMaterial(),
                'image' => $product->getImage(),
                'rating' => $product->getRating(),
                'classification' => $product->getClassification(),
                'wifi' => $product->getWifi(),
                'bluetooth' => $product->getBluetooth(),
            ];
        }
        // $data = $this->getJsonData($request);
        // /** @var BaseService $baseService */
        // $baseService = $this->container->get(self::BASE_API_SERVICE);
        // $siteId = $this->validateSiteId($request);
        // $response = $baseService->authenticate-Customer($data, $request, $bruteforceProtectionHandler, $siteId);
        // if (!empty($response)) {
            return $this->createSuccessResponse($data, true);
        // }
        // return $this->createErrorResponse();
    }
    
    
    /**
      * @Route("/webservice/showProducts2")
      * @Method({"GET"})
      * @param Request $request
      * @return \Symfony\Component\HttpFoundation\JsonResponse
      * @throws \Pimcore\Http\Exception\ResponseException
      * @throws \Exception
      */
    public function getProductList2(Request $request, BruteforceProtectionHandler $bruteforceProtectionHandler)
    {
        $data = [];
        $products = new \Pimcore\Model\DataObject\Products\Listing();
        $products->setCondition("price > ?", 44000);
        //$product->addOutputFilter({"price" : {"$gt" : "40000"}});
        //$products->setCondition("rating LIKE ?", ["%4 star%"]);
        //$entries->setCondition("sku LIKE ?", ["%%"]);
        //$products = {"price" : {"$gt" : "40000"}};
        
        //$obj = new DataObject\Objectbrick\Data\Cosmetics($product);
                
        $products->getObjects();
        foreach ($products as $product)
        {
            $data[] = [
                'id' => $product->getId(),
                'sku' => $product->getSku(),
                'productName' => $product->getModelname(),
                'brandName' => $product->getBrand()->getName(),
                'category' => $product->getCategory()->getName(),
                'color' => $product->getColor(),
                'price' => $product->getPrice(),
                'discount' => $product->getDiscount(),
                'manufacture' => $product->getMfg()->toDateString(),
                'importdate' => $product->getImportdate()->toDateString(),
                'material' => $product->getMaterial(),
                'image' => $product->getImage(),
                'rating' => $product->getRating(),
                'classification' => $product->getClassification(),
                'wifi' => $product->getWifi(),
                'bluetooth' => $product->getBluetooth(),
            ];
        }
        // $data = $this->getJsonData($request);
        // /** @var BaseService $baseService */
        // $baseService = $this->container->get(self::BASE_API_SERVICE);
        // $siteId = $this->validateSiteId($request);
        // $response = $baseService->authenticate-Customer($data, $request, $bruteforceProtectionHandler, $siteId);
        // if (!empty($response)) {
            return $this->createSuccessResponse($data, true);
        // }
        // return $this->createErrorResponse();
    }
}
