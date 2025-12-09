<?php

namespace App\Entity;

use App\Repository\PermissaoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PermissaoRepository::class)]
class Permissao
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'permissoes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $usuario = null;

    #[ORM\ManyToOne(inversedBy: 'permissoes')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Modulo $modulo = null;

    #[ORM\Column]
    private ?bool $podeVisualizar = null;

    #[ORM\Column]
    private ?bool $podeIncluir = null;

    #[ORM\Column]
    private ?bool $podeEditar = null;

    #[ORM\Column]
    private ?bool $podeExcluir = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataCriacao = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataAtualizacao = null;

    public function __construct()
    {
        $this->dataCriacao = new \DateTimeImmutable();
        $this->dataAtualizacao = new \DateTimeImmutable();
        $this->podeVisualizar = false;
        $this->podeIncluir = false;
        $this->podeEditar = false;
        $this->podeExcluir = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuario(): ?User
    {
        return $this->usuario;
    }

    public function setUsuario(?User $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getModulo(): ?Modulo
    {
        return $this->modulo;
    }

    public function setModulo(?Modulo $modulo): static
    {
        $this->modulo = $modulo;

        return $this;
    }

    public function isPodeVisualizar(): ?bool
    {
        return $this->podeVisualizar;
    }

    public function setPodeVisualizar(bool $podeVisualizar): static
    {
        $this->podeVisualizar = $podeVisualizar;

        return $this;
    }

    public function isPodeIncluir(): ?bool
    {
        return $this->podeIncluir;
    }

    public function setPodeIncluir(bool $podeIncluir): static
    {
        $this->podeIncluir = $podeIncluir;

        return $this;
    }

    public function isPodeEditar(): ?bool
    {
        return $this->podeEditar;
    }

    public function setPodeEditar(bool $podeEditar): static
    {
        $this->podeEditar = $podeEditar;

        return $this;
    }

    public function isPodeExcluir(): ?bool
    {
        return $this->podeExcluir;
    }

    public function setPodeExcluir(bool $podeExcluir): static
    {
        $this->podeExcluir = $podeExcluir;

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

    public function getDataAtualizacao(): ?\DateTimeImmutable
    {
        return $this->dataAtualizacao;
    }

    public function setDataAtualizacao(\DateTimeImmutable $dataAtualizacao): static
    {
        $this->dataAtualizacao = $dataAtualizacao;

        return $this;
    }

    #[ORM\PreUpdate]
    public function setDataAtualizacaoValue(): void
    {
        $this->dataAtualizacao = new \DateTimeImmutable();
    }
} 