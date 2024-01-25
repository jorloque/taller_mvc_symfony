<?php

namespace app\Controller;

use app\Entity\Tareas;
use Doctrine\ORM\EntityManager;
use app\Core\AbstractController;

class DetailController extends AbstractController
{
  private $repository;
  public function __construct(EntityManager $em)
  {
    $this->repository = $em->getRepository(Tareas::class);
    parent::__construct();
  }
  public function main(int $id)
  {
    $data = $this->repository->find($id);
    $this->render("detail.html.twig", [
      "id" => $data->getId(),
      "titulo" => $data->getTitulo(),
      "descripcion" => $data->getDescripcion(),
      "fecha_creacion" => $data->getFechaCreacion(),
      "fecha_vencimiento" => $data->getFechaVencimiento()
    ]);
  }
}
