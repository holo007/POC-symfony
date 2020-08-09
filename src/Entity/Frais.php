<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use App\Repository\FraisRepository;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=FraisRepository::class)
 */
class Frais
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type_frais;

    /**
     * @ORM\Column(type="date")
     */
    private $date_paiement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $type_paiement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $justificatif;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $created_by;

    /**
     * @ORM\Column(type="datetime")
     */
    private $last_update_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $last_update_by;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="frais")
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeFrais(): ?string
    {
        return $this->type_frais;
    }

    public function setTypeFrais(string $typeFrais): self
    {
        $this->type_frais = $typeFrais;

        return $this;
    }

    public function getDatePaiement(): ?\DateTimeInterface
    {
        return $this->date_paiement;
    }

    public function setDatePaiement(\DateTimeInterface $datePaiement): self
    {
        $this->date_paiement = $datePaiement;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMontant(): ?int
    {
        return $this->montant;
    }

    public function setMontant(int $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getTypePaiement(): ?string
    {
        return $this->type_paiement;
    }

    public function setTypePaiement(string $type_paiement): self
    {
        $this->type_paiement = $type_paiement;

        return $this;
    }

    public function getJustificatif(): ?string
    {
        return $this->justificatif;
    }

    public function setJustificatif(?string $justificatif): self
    {
        $this->justificatif = $justificatif;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->created_at = $createdAt;

        return $this;
    }

    public function getCreatedBy(): ?string
    {
        return $this->created_by;
    }

    public function setCreatedBy(string $createdBy): self
    {
        $this->created_by = $createdBy;

        return $this;
    }

    public function getLastUpdateAt(): ?\DateTimeInterface
    {
        return $this->last_update_at;
    }

    public function setLastUpdateAt(\DateTimeInterface $lastUpdateAt): self
    {
        $this->last_update_at = $lastUpdateAt;

        return $this;
    }

    public function getLastUpdateBy(): ?string
    {
        return $this->last_update_by;
    }

    public function setLastUpdateBy(string $lastUpdateBy): self
    {
        $this->last_update_by = $lastUpdateBy;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

        
  
}
