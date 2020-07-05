<?php


namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations\Get;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractFOSRestController
{
    /**
     * @Route("/api/name", name="name",methods={"GET"})
     */
    public function name1() {

        return $this->json(['name'=>'idriss'],Response::HTTP_OK);
    }
    /**
     * @Route("/api/fname", name="fname",methods={"GET"})
     */
    public function fname() {

        return $this->json(['name'=>'asasas'],Response::HTTP_OK);
    }

}