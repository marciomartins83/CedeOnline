<?php

namespace App\Entity;

use App\Repository\ModuloRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ModuloRepository::class)]
class Modulo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nome = null;

    #[ORM\Column(length: 255)]
    private ?string $descricao = null;

    #[ORM\Column(length: 50)]
    private ?string $codigo = null;

    #[ORM\Column]
    private ?bool $ativo = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataCriacao = null;

    #[ORM\OneToMany(mappedBy: 'modulo', targetEntity: Permissao::class, orphanRemoval: true)]
    private Collection $permissoes;

    public function __construct()
    {
        $this->permissoes = new ArrayCollection();
        $this->dataCriacao = new \DateTimeImmutable();
        $this->ativo = true;
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

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): static
    {
        $this->descricao = $descricao;

        return $this;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): static
    {
        $this->codigo = $codigo;

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

    public function getDataCriacao(): ?\DateTimeImmutable
    {
        return $this->dataCriacao;
    }

    public function setDataCriacao(\DateTimeImmutable $dataCriacao): static
    {
        $this->dataCriacao = $dataCriacao;

        return $this;
    }

    /**
     * @return Collection<int, Permissao>
     */
    public function getPermissoes(): Collection
    {
        return $this->permissoes;
    }

    public function addPermissao(Permissao $permissao): static
    {
        if (!$this->permissoes->contains($permissao)) {
            $this->permissoes->add($permissao);
            $permissao->setModulo($this);
        }

        return $this;
    }

    public function removePermissao(Permissao $permissao): static
    {
        if ($this->permissoes->removeElement($permissao)) {
            // set the owning side to null (unless already changed)
            if ($permissao->getModulo() === $this) {
                $permissao->setModulo(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->nome ?? '';
    }
} 