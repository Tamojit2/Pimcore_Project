<?php
    namespace AppBundle\EventListener;

    use Pimcore\Event\Model\DataObjectEvent;
    use Pimcore\Model\DataObject\Products;
    use Pimcore\Model\Element\ValidationException;

    class DateListener{

        public function getProductsObject(DataObjectEvent $e){

            //p_r($e->getObject());

            if ($e->getObject() instanceof products) {
                $product = $e->getObject();
                //p_r($product->getMfg());
                if ($product->getMfg() > date("Y-m-d")) {
                    throw new \Pimcore\Model\Element\ValidationException("Date Should be before or eqaul of Today");
                }
            }
            
            if ($e->getObject() instanceof products) {
                $product = $e->getObject();
                //p_r($product->getMfg());
                if ($product->getImportdate() < $product->getMfg()) {
                    throw new \Pimcore\Model\Element\ValidationException("Import Date shoud not before of Mfg");
                }
            }
	
        }
    }
