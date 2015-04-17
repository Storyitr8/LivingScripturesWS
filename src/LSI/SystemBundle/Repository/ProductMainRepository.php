<?php
namespace LSI\SystemBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProductMainRepository extends EntityRepository
{

    public function get_product_levels(){
        $product_levels_products = array();
        $productLevelsSql = 'SELECT pm, pl
                FROM \LSI\SystemBundle\Entity\ProductMain pm
                JOIN pm.productLevels pl
                ORDER BY pm.productDesc ASC';
        try{
            $productLevelsStmt = $this->_em->createQuery($productLevelsSql)->getResult();
        }
        catch(Doctrine\ORM\Query\QueryException $e){
            echo "<pre>";
            var_dump($e);
        }
        echo "<pre>";
        var_dump($productLevelsStmt); exit;
        while ($row = $productLevelsStmt->fetch()) {
            $product_levels_products[$row['id']] = $row;
        }
        return $product_levels_products;
    }
}