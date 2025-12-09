<?php

namespace App\Entity;

use App\Repository\MovimentoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MovimentoRepository::class)]
#[ORM\Table(name: 'movimento')]
class Movimento
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $valor = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $observacao = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataMovimento = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataCriacao = null;

    #[ORM\ManyToOne(inversedBy: 'movimentos')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Caixa $caixa = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?TipoMovimento $tipo = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?OrigemMovimento $origem = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?ModoMovimento $modo = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Status $status = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?Responsavel $responsavel = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?Pagador $pagador = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $usuario = null;

    public function __construct()
    {
        $this->dataMovimento = new \DateTimeImmutable();
        $this->dataCriacao = new \DateTimeImmutable();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValor(): ?string
    {
        return $this->valor;
    }

    public function setValor(string $valor): static
    {
        $this->valor = $valor;

        return $this;
    }

    public function getObservacao(): ?string
    {
        return $this->observacao;
    }

    public function setObservacao(?string $observacao): static
    {
        $this->observacao = $observacao;

        return $this;
    }

    public function getDataMovimento(): ?\DateTimeImmutable
    {
        return $this->dataMovimento;
    }

    public function setDataMovimento(\DateTimeImmutable $dataMovimento): static
    {
        $this->dataMovimento = $dataMovimento;

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

    public function getCaixa(): ?Caixa
    {
        return $this->caixa;
    }

    public function setCaixa(?Caixa $caixa): static
    {
        $this->caixa = $caixa;

        return $this;
    }

    public function getTipo(): ?TipoMovimento
    {
        return $this->tipo;
    }

    public function setTipo(?TipoMovimento $tipo): static
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getOrigem(): ?OrigemMovimento
    {
        return $this->origem;
    }

    public function setOrigem(?OrigemMovimento $origem): static
    {
        $this->origem = $origem;

        return $this;
    }

    public function getModo(): ?ModoMovimento
    {
        return $this->modo;
    }

    public function setModo(?ModoMovimento $modo): static
    {
        $this->modo = $modo;

        return $this;
    }

    public function getStatus(): ?Status
    {
        return $this->status;
    }

    public function setStatus(?Status $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getResponsavel(): ?Responsavel
    {
        return $this->responsavel;
    }

    public function setResponsavel(?Responsavel $responsavel): static
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    public function getPagador(): ?Pagador
    {
        return $this->pagador;
    }

    public function setPagador(?Pagador $pagador): static
    {
        $this->pagador = $pagador;

        return $this;
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
} 