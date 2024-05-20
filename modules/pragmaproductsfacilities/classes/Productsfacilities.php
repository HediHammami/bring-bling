<?php

class ProductsFacilities extends ObjectModel
{
    public $id_product_facilities;
    public $id_shop;
    public $slices;
    public $price;
    public $ratio;
    public $active;
    public $date_upd;

    public static $definition = array(
        'table' => 'product_facilities',
        'primary' => 'id_product_facilities',
        'fields' => array(
            'id_shop' => array('type' => self::TYPE_INT, 'required' => true),
            'slices' => array('type' => self::TYPE_INT, 'required' => true),
            'price' => array('type' => self::TYPE_FLOAT, 'required' => true),
            'ratio' => array('type' => self::TYPE_FLOAT, 'required' => true),
            'active' => array('type' => self::TYPE_INT, 'required' => true),
        ),
    );

    public static function getListSlices($id_shop)
    {
        return Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'product_facilities` WHERE id_shop = ' . $id_shop);
    }

    public static function getListActiveSlices($id_shop)
    {
        return Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'product_facilities` WHERE active = 1 AND id_shop = ' . $id_shop);
    }

    public static function getAllSliceRatio($price, $id_shop)
    {
        $items = Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'product_facilities` 
            WHERE price < ' . $price . ' 
            AND id_shop = ' . $id_shop . ' 
            ORDER BY slices ASC
        ');

        $result = array();

        foreach($items as $item){
            $result[$item['slices']] = $item['ratio'];
        }

        return $result;
    }

    public static function getRatioBySlice($number)
    {
        return Db::getInstance()->executeS('SELECT ratio FROM `' . _DB_PREFIX_ . 'product_facilities` 
            WHERE slices = ' . $number . ' 
            ORDER BY date_upd DESC 
            LIMIT 1
        ');
    }
}
