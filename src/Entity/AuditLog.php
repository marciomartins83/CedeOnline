<?php

namespace App\Entity;

use App\Repository\AuditLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AuditLogRepository::class)]
#[ORM\Table(name: 'audit_log')]
class AuditLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $usuario = null;

    #[ORM\Column(length: 50)]
    private ?string $acao = null;

    #[ORM\Column(length: 100)]
    private ?string $entidade = null;

    #[ORM\Column(nullable: true)]
    private ?int $entidadeId = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $dadosAnteriores = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $dadosNovos = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ip = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $userAgent = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataHora = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $modulo = null;

    public function __construct()
    {
        $this->dataHora = new \DateTimeImmutable();
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

    public function getAcao(): ?string
    {
        return $this->acao;
    }

    public function setAcao(string $acao): static
    {
        $this->acao = $acao;

        return $this;
    }

    public function getEntidade(): ?string
    {
        return $this->entidade;
    }

    public function setEntidade(string $entidade): static
    {
        $this->entidade = $entidade;

        return $this;
    }

    public function getEntidadeId(): ?int
    {
        return $this->entidadeId;
    }

    public function setEntidadeId(?int $entidadeId): static
    {
        $this->entidadeId = $entidadeId;

        return $this;
    }

    public function getDadosAnteriores(): ?string
    {
        return $this->dadosAnteriores;
    }

    public function setDadosAnteriores(?string $dadosAnteriores): static
    {
        $this->dadosAnteriores = $dadosAnteriores;

        return $this;
    }

    public function getDadosNovos(): ?string
    {
        return $this->dadosNovos;
    }

    public function setDadosNovos(?string $dadosNovos): static
    {
        $this->dadosNovos = $dadosNovos;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): static
    {
        $this->ip = $ip;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): static
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getDataHora(): ?\DateTimeImmutable
    {
        return $this->dataHora;
    }

    public function setDataHora(\DateTimeImmutable $dataHora): static
    {
        $this->dataHora = $dataHora;

        return $this;
    }

    public function getModulo(): ?string
    {
        return $this->modulo;
    }

    public function setModulo(?string $modulo): static
    {
        $this->modulo = $modulo;

        return $this;
    }
} 