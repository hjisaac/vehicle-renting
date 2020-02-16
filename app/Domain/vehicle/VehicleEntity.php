<?php

namespace App\Domain\Vehicle ;

class  VehicleEntity {

    protected  $matriculation;
    protected  $brand;
    protected  $model;
    protected  $numberPlace;
    protected  $numberLuggage;
    protected  $price;
    protected  $registrationDate;

    function __construct() {
        //
    }

    /**
     * @return mixed
     */
    public function getMatriculation()
    {
        return $this->matriculation;
    }

    /**
     * @param mixed $matriculation
     */
    public function setMatriculation($matriculation): void
    {
        $this->matriculation = $matriculation;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model): void
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getNumberPlace()
    {
        return $this->numberPlace;
    }

    /**
     * @param mixed $numberPlace
     */
    public function setNumberPlace($numberPlace): void
    {
        $this->numberPlace = $numberPlace;
    }

    /**
     * @return mixed
     */
    public function getNumberLuggage()
    {
        return $this->numberLuggage;
    }

    /**
     * @param mixed $numberLuggage
     */
    public function setNumberLuggage($numberLuggage): void
    {
        $this->numberLuggage = $numberLuggage;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * @param mixed $registrationDate
     */
    public function setRegistrationDate($registrationDate): void
    {
        $this->registrationDate = $registrationDate;
    }
}




