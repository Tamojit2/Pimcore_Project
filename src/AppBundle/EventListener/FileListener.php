<?php
    namespace AppBundle\EventListener;

    use Pimcore\Event\Model\DataObjectEvent;
    use Pimcore\Model\DataObject\Importdata;
    use Pimcore\Model\Element\ValidationException;

    class FileListener{

        public function getImportdataObject(DataObjectEvent $e){

            //p_r($e->getObject());

            if ($e->getObject() instanceof importdata) {
                $import = $e->getObject();
                //p_r($import->getMfg());
                
                $file_extension = pathinfo($import->getFile(), PATHINFO_EXTENSION);
                
                //if ($import->getFile() > date("Y-m-d")) 
                if ($file_extension != "csv"){
                    throw new \Pimcore\Model\Element\ValidationException("Only CSV file can upload");
                    die;
                }
            }
            
	
        }
    }
