<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpKernel\KernelInterface;

class Data extends Fixture
{
    private $appKernel;
    private $rootDir;

    public function __construct(KernelInterface $appKernel)
    {
        $this->appKernel = $appKernel;
        $this->rootDir = $appKernel->getProjectDir();
    }

    public function load(ObjectManager $manager): void
    {
        $filename = $this->rootDir.'/src/DataFixtures/Data/products.json';
	    $data = file_get_contents($filename);

        $products_json = json_decode($data);
        $products = [];

        foreach ($products_json as $product_item) {
            # code...
            
            $product = new Product();
            $product->setName($product_item->name)
                    ->setDescription($product_item->description)
                    ->setMoreInformation($product_item->more_information)
                    ->setImageUrls($product_item->imageUrls)
                    ->setPrice($product_item->price*100)
            ;
            $products[] = $product;
            $manager->persist($product);
        }
        $filename = $this->rootDir.'/src/DataFixtures/Data/users.json';
	    $data = file_get_contents($filename);

        $users_json = json_decode($data);
        $users = [];
        foreach ($users_json as $user_item) {
            # code...
            
            $user = new User();
            $user->setUsername($user_item->username)
                 ->setEmail($user_item->email)
                 ->setPassword("123456")
            ;
          
            $manager->persist($user);
        }

        $categories = ["Robes", "Jupes","Culote","Pantalons femmes", "chemises femmes"];
        foreach ($categories as $name) {
            # code...
            
            $category = new Category();
            $category->setName($name)
            ;
           
            $manager->persist($category);
        }

        $manager->flush();
    }
}
