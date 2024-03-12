<?php

namespace App\Entity;

use App\Repository\JoueurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: JoueurRepository::class)]
class Joueur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $numero = null;

    #[ORM\Column(length: 255)]
    private ?string $poste = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 0)]
    private ?string $numeroLicence = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $cartonJaune = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $cartonRouge = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $matchJoue = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 5, scale: 0)]
    private ?string $nbrPasse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $nbrPasseDecisif = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $nbrTir = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $nbrBut = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $arretGardien = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $butEncaisse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $penaltyDispute = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 3, scale: 0)]
    private ?string $penaltyArrete = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): static
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPoste(): ?string
    {
        return $this->poste;
    }

    public function setPoste(string $poste): static
    {
        $this->poste = $poste;

        return $this;
    }

    public function getNumeroLicence(): ?string
    {
        return $this->numeroLicence;
    }

    public function setNumeroLicence(string $numeroLicence): static
    {
        $this->numeroLicence = $numeroLicence;

        return $this;
    }

    public function getCartonJaune(): ?string
    {
        return $this->cartonJaune;
    }

    public function setCartonJaune(string $cartonJaune): static
    {
        $this->cartonJaune = $cartonJaune;

        return $this;
    }

    public function getCartonRouge(): ?string
    {
        return $this->cartonRouge;
    }

    public function setCartonRouge(string $cartonRouge): static
    {
        $this->cartonRouge = $cartonRouge;

        return $this;
    }

    public function getMatchJoue(): ?string
    {
        return $this->matchJoue;
    }

    public function setMatchJoue(string $matchJoue): static
    {
        $this->matchJoue = $matchJoue;

        return $this;
    }

    public function getNbrPasse(): ?string
    {
        return $this->nbrPasse;
    }

    public function setNbrPasse(string $nbrPasse): static
    {
        $this->nbrPasse = $nbrPasse;

        return $this;
    }

    public function getNbrPasseDecisif(): ?string
    {
        return $this->nbrPasseDecisif;
    }

    public function setNbrPasseDecisif(string $nbrPasseDecisif): static
    {
        $this->nbrPasseDecisif = $nbrPasseDecisif;

        return $this;
    }

    public function getNbrTir(): ?string
    {
        return $this->nbrTir;
    }

    public function setNbrTir(string $nbrTir): static
    {
        $this->nbrTir = $nbrTir;

        return $this;
    }

    public function getNbrBut(): ?string
    {
        return $this->nbrBut;
    }

    public function setNbrBut(string $nbrBut): static
    {
        $this->nbrBut = $nbrBut;

        return $this;
    }

    public function getArretGardien(): ?string
    {
        return $this->arretGardien;
    }

    public function setArretGardien(string $arretGardien): static
    {
        $this->arretGardien = $arretGardien;

        return $this;
    }

    public function getButEncaisse(): ?string
    {
        return $this->butEncaisse;
    }

    public function setButEncaisse(string $butEncaisse): static
    {
        $this->butEncaisse = $butEncaisse;

        return $this;
    }

    public function getPenaltyDispute(): ?string
    {
        return $this->penaltyDispute;
    }

    public function setPenaltyDispute(string $penaltyDispute): static
    {
        $this->penaltyDispute = $penaltyDispute;

        return $this;
    }

    public function getPenaltyArrete(): ?string
    {
        return $this->penaltyArrete;
    }

    public function setPenaltyArrete(string $penaltyArrete): static
    {
        $this->penaltyArrete = $penaltyArrete;

        return $this;
    }
}
