<?php
namespace app\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use app\Repository\TareasRepository;

#[ORM\Entity(repositoryClass: TareasRepository::class)]
#[ORM\Table(name: 'tareas')]
class Tareas{
    #[ORM\Id]
    #[ORM\Column(type: Types::INTEGER)]
    #[ORM\GeneratedValue]
    private $id;
    #[ORM\Column(type: Types::STRING)]
    private $titulo;
    #[ORM\Column(type: Types::TEXT)]
    private $descripcion;
    #[ORM\Column(name: 'fecha_creacion', type: Types::DATE_MUTABLE)]
    private $fechaCreacion;
    #[ORM\Column(name: 'fecha_vencimiento', type: Types::DATE_MUTABLE)]
    private $fechaVencimiento;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     */
    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of fechaCreacion
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set the value of fechaCreacion
     */
    public function setFechaCreacion($fechaCreacion): self
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get the value of fechaVencimiento
     */
    public function getFechaVencimiento()
    {
        return $this->fechaVencimiento;
    }

    /**
     * Set the value of fechaVencimiento
     */
    public function setFechaVencimiento($fechaVencimiento): self
    {
        $this->fechaVencimiento = $fechaVencimiento;

        return $this;
    }
}