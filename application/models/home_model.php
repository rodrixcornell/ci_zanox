<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home_model
 *
 * @author cabral
 */
class home_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    //put your code here
    public function pesquisar() {
        return array('pesq 1', 'pesq 2');

        //
        //https://api.zanox.com/xml/2011-03-01/products?connectid=43EEF0445509C7205827&q=caneca
        //http://api.zanox.com/xml/2011-03-01/products/product/a516e4549b88a9ab77a20be177d4fe57?connectid=43EEF0445509C7205827
        //http://api.zanox.com/xml/2011-03-01/programs/program/13213?connectid=43EEF0445509C7205827
        //$api = ApiClient::factory(PROTOCOL_JSON);
        $api = ApiClient::factory(PROTOCOL_XML, VERSION_DEFAULT);
//        $api->setProxy('172.19.10.22', 3128);
        $connectId = '43EEF0445509C7205827';
//                $connectId = '580599047DF8F5311043';
//        $connectId = '7D19D334B94A5017E2B6';
//        $secretKey = '5Ee3d8A7d91b40+4815F45e5d93a9A/e52aB1449';

        $api->setConnectId($connectId);
//        $api->setSecretKey($secretKey);
        // Resultados limites para produtos associados a essa seqüência de pesquisa.
        $query = "samsung s4 Galaxy";
        $searchType = 'phrase';
        $programs = array(); //array(13536);
        $region = 'BR';
        $categoryId = NULL;
        $programsId = array();
        $hasImages = true;
        $minPrice = 0;
        $maxPrice = NULL;
        $adspaceId = NULL;
        $page = 0;
        $items = 5;
//        $xml = $api->getProduct($programId);
        $xml = $api->searchProducts($query, $searchType, $region, $categoryId, $programs, $hasImages, $minPrice, $maxPrice, $adspaceId, $page, $items);
//        $xml = $api->getProgram($programId);
//        $xml = $api->searchPrograms($query, $region);
        $xml = simplexml_load_string($xml);
//        $test = $xml->asXML();
//        print_r($test);
//        foreach ($xml->children() as $key => $value) {
//            if ($value->getName() != 'productItems') {
//                echo 'children: ' . $key . ', valuer: ' . $value . '<br>';
//            } else {
//                echo '<br>';
//                echo $value->productItem->count() . '<br>';
//                foreach ($value->productItem->attributes() as $key => $value) {
//                    echo 'children: ' . $key . ', valuer: ' . $value . '<br>';
//                }
//                foreach ($value->productItem as $key => $value) {
//                    echo 'children: ' . $key[0] . ', valuer: ' . $value . '<br>';
//                }
//            }
//        }
//
//        foreach ($xml->children()[0]->children() as $value) {
//            echo "Child node: " . $value . "<br>";
//        }
//
//        foreach ($xml as $value) {
//            echo $value['programItems'] . ' ' . $value->getName() . "<br>";
//        }
    }

}

?>
