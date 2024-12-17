<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    private int $idClient;
    private string $raisonSociale;
    private string $adresseClient;
    private string $codePostalClient;
    private string $villeClient;
    private int $CA;
    private int $effectif;
    private string $telephoneClient;
    private string $typeClient;
    private string $natureClient;
    private string $commentaireClient;

    /**
     * Get the value of idClient
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set the value of idClient
     *
     * @return  self
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get the value of raisonSociale
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set the value of raisonSociale
     *
     * @return  self
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get the value of adresseClient
     */
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    /**
     * Set the value of adresseClient
     *
     * @return  self
     */
    public function setAdresseClient($adresseClient)
    {
        $this->adresseClient = $adresseClient;

        return $this;
    }

    /**
     * Get the value of codePostalClient
     */
    public function getCodePostalClient()
    {
        return $this->codePostalClient;
    }

    /**
     * Set the value of codePostalClient
     *
     * @return  self
     */
    public function setCodePostalClient($codePostalClient)
    {
        $this->codePostalClient = $codePostalClient;

        return $this;
    }

    /**
     * Get the value of villeClient
     */
    public function getVilleClient()
    {
        return $this->villeClient;
    }

    /**
     * Set the value of villeClient
     *
     * @return  self
     */
    public function setVilleClient($villeClient)
    {
        $this->villeClient = $villeClient;

        return $this;
    }

    /**
     * Get the value of CA
     */
    public function getCA()
    {
        return $this->CA;
    }

    /**
     * Set the value of CA
     *
     * @return  self
     */
    public function setCA($CA)
    {
        $this->CA = $CA;

        return $this;
    }

    /**
     * Get the value of effectif
     */
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * Set the value of effectif
     *
     * @return  self
     */
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;

        return $this;
    }

    /**
     * Get the value of telephoneClient
     */
    public function getTelephoneClient()
    {
        return $this->telephoneClient;
    }

    /**
     * Set the value of telephoneClient
     *
     * @return  self
     */
    public function setTelephoneClient($telephoneClient)
    {
        $this->telephoneClient = $telephoneClient;

        return $this;
    }

    /**
     * Get the value of typeClient
     */
    public function getTypeClient()
    {
        return $this->typeClient;
    }

    /**
     * Set the value of typeClient
     *
     * @return  self
     */
    public function setTypeClient($typeClient)
    {
        $this->typeClient = $typeClient;

        return $this;
    }

    /**
     * Get the value of natureClient
     */
    public function getNatureClient()
    {
        return $this->natureClient;
    }

    /**
     * Set the value of natureClient
     *
     * @return  self
     */
    public function setNatureClient($natureClient)
    {
        $this->natureClient = $natureClient;

        return $this;
    }

    /**
     * Get the value of commentaireClient
     */
    public function getCommentaireClient()
    {
        return $this->commentaireClient;
    }

    /**
     * Set the value of commentaireClient
     *
     * @return  self
     */
    public function setCommentaireClient($commentaireClient)
    {
        $this->commentaireClient = $commentaireClient;

        return $this;
    }

}
