<?php

class Product extends ProductCore
{
    /*
    * module: easycarousels
    * date: 2024-05-27 14:46:19
    * version: 2.7.6
    */
    public function getAccessories($id_lang, $active = true)
    {
        return !empty(Context::getContext()->ec_accessories) ? [] : parent::getAccessories($id_lang, $active);
    }
    /*
    * module: amazzingfilter
    * date: 2024-05-28 15:02:55
    * version: 3.2.8
    */
    public static function getProductsProperties($id_lang, $query_result)
    {
        if (!empty(Context::getContext()->properties_not_required)) {
            return $query_result;
        } else {
            return parent::getProductsProperties($id_lang, $query_result);
        }
    }
}
