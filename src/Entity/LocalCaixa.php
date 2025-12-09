<?php

namespace App\Entity;

use App\Repository\LocalCaixaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocalCaixaRepository::class)]
#[ORM\Table(name: 'local_caixa')]
class LocalCaixa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nome = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $endereco = null;

    #[ORM\Column]
    private ?bool $ativo = true;

    #[ORM\OneToMany(mappedBy: 'local', targetEntity: Caixa::class)]
    private Collection $caixas;

    public function __construct()
    {
        $this->caixas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): static
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEndereco(): ?string
    {
        return $this->endereco;
    }

    public function setEndereco(?string $endereco): static
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function isAtivo(): ?bool
    {
        return $this->ativo;
    }

    public function setAtivo(bool $ativo): static
    {
        $this->ativo = $ativo;

        return $this;
    }

    /**
     * @return Collection<int, Caixa>
     */
    public function getCaixas(): Collection
    {
        return $this->caixas;
    }

    public function addCaixa(Caixa $caixa): static
    {
        if (!$this->caixas->contains($caixa)) {
            $this->caixas->add($caixa);
            $caixa->setLocal($this);
        }

        return $this;
    }

    public function removeCaixa(Caixa $caixa): static
    {
        if ($this->caixas->removeElement($caixa)) {
            // set the owning side to null (unless already changed)
            if ($caixa->getLocal() === $this) {
                $caixa->setLocal(null);
            }
        }

        return $this;
    }
} 