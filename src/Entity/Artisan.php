<?php

namespace App\Entity;

use App\Repository\ArtisanRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtisanRepository::class)]
class Artisan
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $phone_number;

    #[ORM\Column(type: 'string', length: 255)]
    private $email;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $website_link;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'string', length: 255)]
    private $siret;

    #[ORM\Column(type: 'string', length: 255)]
    private $insurance_policy_name;

    #[ORM\Column(type: 'integer')]
    private $insurance_policy_number;

    #[ORM\Column(type: 'integer')]
    private $insurance_policy_guarantee;

    #[ORM\ManyToOne(targetEntity: Town::class, inversedBy: 'artisans')]
    private $town;

    #[ORM\Column(type: 'text')]
    private $adress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getWebsiteLink(): ?string
    {
        return $this->website_link;
    }

    public function setWebsiteLink(string $website_link): self
    {
        $this->website_link = $website_link;

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

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getInsurancePolicyName(): ?string
    {
        return $this->insurance_policy_name;
    }

    public function setInsurancePolicyName(string $insurance_policy_name): self
    {
        $this->insurance_policy_name = $insurance_policy_name;

        return $this;
    }

    public function getInsurancePolicyNumber(): ?int
    {
        return $this->insurance_policy_number;
    }

    public function setInsurancePolicyNumber(int $insurance_policy_number): self
    {
        $this->insurance_policy_number = $insurance_policy_number;

        return $this;
    }

    public function getInsurancePolicyGuarantee(): ?int
    {
        return $this->insurance_policy_guarantee;
    }

    public function setInsurancePolicyGuarantee(int $insurance_policy_guarantee): self
    {
        $this->insurance_policy_guarantee = $insurance_policy_guarantee;

        return $this;
    }

    public function getTown(): ?Town
    {
        return $this->town;
    }

    public function setTown(?Town $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }
}
