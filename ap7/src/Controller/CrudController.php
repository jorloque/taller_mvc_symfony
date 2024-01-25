<?php

namespace app\Controller;

use app\Entity\Tareas;
use Doctrine\ORM\EntityManager;
use app\Core\AbstractController;

class CrudController extends AbstractController
{
  private $repository;
  public function __construct(EntityManager $em)
  {
    $this->repository = $em->getRepository(Tareas::class);
    parent::__construct();
  }
  public function update(int $id)
  {
    $data = $this->repository->update($id);
    header("location: http://localhost/public/index.php/list");
  }
  public function delete(int $id)
  {
    $data = $this->repository->delete($id);
    header("location: http://localhost/public/index.php/list");
  }
  public function insert()
  {
    $data = $this->repository->insert();
    header("location: http://localhost/public/index.php/list");
  }
}
