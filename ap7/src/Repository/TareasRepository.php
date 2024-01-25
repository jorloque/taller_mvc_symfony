<?php

namespace app\Repository;

use DateTime;
use DateInterval;
use app\Entity\Tareas;
use Doctrine\ORM\EntityRepository;

class TareasRepository extends EntityRepository{

    public function update(int $id): void
    {
        $tarea = $this->find($id);
        $tarea
            ->setFechaCreacion(new DateTime("now"))
            ->setFechaVencimiento((new DateTime())->add(new DateInterval("P7D")));
        $this->getEntityManager()->persist($tarea);
        $this->getEntityManager()->flush();
    }

    public function delete(int $id): void
    {
        $tarea = $this->find($id);
        $this->getEntityManager()->remove($tarea);
        $this->getEntityManager()->flush();
    }

    public function insert(): void
    {
        $tarea = new Tareas;
        $tarea
            ->setTitulo("Nueva Tarea")
            ->setDescripcion("Escribe aquí una descripción")
            ->setFechaCreacion(new DateTime("now"))
            ->setFechaVencimiento((new DateTime())->add(new DateInterval("P7D")));
        $this->getEntityManager()->persist($tarea);
        $this->getEntityManager()->flush();
    }

}
