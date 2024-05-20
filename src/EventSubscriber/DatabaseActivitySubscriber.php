<?php

namespace App\EventSubscriber;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Event\PostRemoveEventArgs;
use Doctrine\ORM\Events;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Doctrine\Common\EventSubscriber;
use Symfony\Component\HttpKernel\KernelInterface;


#[AsDoctrineListener(event:Events::postRemove)]

class DatabaseActivitySubscriber
{
    private $appKernel;
    private $rootDir;

    public function __construct(KernelInterface $appKernel)
    {
        $this->appKernel = $appKernel;
        $this->rootDir = $this->appKernel->getProjectDir();
    }

    public function getSubscribedEvents(): array
    {
        return [
            Events::postRemove,
        ];
    }

    public function postRemove(PostRemoveEventArgs $args): void
    {
        $this->logActivity('remove', $args->getObject());
    }

    public function logActivity(string $action, mixed $entity): void
    {
       
        if (($entity instanceof Product) && $action === "remove") {

            $imageUrls = $entity->getImageUrls();

            foreach ($imageUrls as $imageUrl){
                $filelink = $this->rootDir."/public/assets/images/products/".$imageUrl;
                $this->deleteImage($filelink);
            }
        }   

        if (($entity instanceof Category) && $action === "remove") {
            // remove image
            $filename = $entity->getImage();
            $filelink = $this->rootDir."/public/assets/images/categories/".$filename;
            
            $this->deleteImage($filelink);
        }
    }

    public function deleteImage(string $filelink): void
    {
        try{
            $result = unlink($filelink);
        }catch (\Throwable $th){
            //throw $th
        }
    }
    
}
