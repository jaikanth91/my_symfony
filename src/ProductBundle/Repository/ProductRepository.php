<?php

namespace ProductBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT p.name,p.price FROM ProductBundle:Product p ORDER BY p.name ASC'
            )
            ->getResult();
    }
}