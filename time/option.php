<?php

require __DIR__ . '/vendor/autoload.php';


class MyRepository
{
    public function findSomeEntity($criteria)
    {
        if (null !== $entity = $this->em->find(...)) {
            return new \PhpOption\Some($entity);
        }

        // We use a singleton, for the None case.
        return \PhpOption\None::create();
    }
}

?>