<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:29
 */

namespace Metinet\Domain;


class Conference
{
    private $id;
    private $nom;
    private $description;
    private $objectif;
    private $salle;
    private $nombrePersonneMax;
    private $date;
    private $crenauHoraire;
    private $student;
    private $isPublic;

    /**
     * Conference constructor.
     * @param $id
     * @param $nom
     * @param $description
     * @param $objectif
     * @param $nombreMaxPersonnes
     * @param $salle
     * @param $date
     * @param $crenauHoraire
     * @param $adresse
     */
    public function __construct(int $id, string $nom, string $description, string $objectif, Salle $salle, int $nombrePersonneMax, date $date, string $crenauHoraire, Student $student, bool $isPublic)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->objectif = $objectif;
        $this->salle = $salle;
        $this->nombrePersonneMax = $nombrePersonneMax;
        $this->date = $date;
        $this->crenauHoraire = $crenauHoraire;
        $this->student = $student;
        $this->isPublic = $isPublic;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getObjectif(): string
    {
        return $this->objectif;
    }

    /**
     * @return Salle
     */
    public function getSalle(): Salle
    {
        return $this->salle;
    }

    /**
     * @return mixed
     */
    public function getNombrePersonneMax()
    {
        return $this->nombrePersonneMax;
    }

    /**
     * @return date
     */
    public function getDate(): date
    {
        return $this->date;
    }

    /**
     * @return string
     */
    public function getCrenauHoraire(): string
    {
        return $this->crenauHoraire;
    }

    /**
     * @return Student
     */
    public function getStudent(): Student
    {
        return $this->student;
    }

    /**
     * @return bool
     */
    public function isPublic(): bool
    {
        return $this->isPublic;
    }


}