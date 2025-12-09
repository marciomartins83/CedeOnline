<?php

namespace App\Entity;

use App\Repository\CaixaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CaixaRepository::class)]
#[ORM\Table(name: 'caixa')]
class Caixa
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nome = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descricao = null;

    #[ORM\Column]
    private ?bool $ativo = true;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataCriacao = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataAtualizacao = null;

    #[ORM\OneToMany(mappedBy: 'caixa', targetEntity: Movimento::class)]
    private Collection $movimentos;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?LocalCaixa $local = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $responsavel = null;

    public function __construct()
    {
        $this->movimentos = new ArrayCollection();
        $this->dataCriacao = new \DateTimeImmutable();
        $this->dataAtualizacao = new \DateTimeImmutable();
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

    public function setDescricao(?string $descricao): static
    {
        $this->descricao = $descricao;

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

    public function getDataAtualizacao(): ?\DateTimeImmutable
    {
        return $this->dataAtualizacao;
    }

    public function setDataAtualizacao(\DateTimeImmutable $dataAtualizacao): static
    {
        $this->dataAtualizacao = $dataAtualizacao;

        return $this;
    }

    /**
     * @return Collection<int, Movimento>
     */
    public function getMovimentos(): Collection
    {
        return $this->movimentos;
    }

    public function addMovimento(Movimento $movimento): static
    {
        if (!$this->movimentos->contains($movimento)) {
            $this->movimentos->add($movimento);
            $movimento->setCaixa($this);
        }

        return $this;
    }

    public function removeMovimento(Movimento $movimento): static
    {
        if ($this->movimentos->removeElement($movimento)) {
            // set the owning side to null (unless already changed)
            if ($movimento->getCaixa() === $this) {
                $movimento->setCaixa(null);
            }
        }

        return $this;
    }

    public function getLocal(): ?LocalCaixa
    {
        return $this->local;
    }

    public function setLocal(?LocalCaixa $local): static
    {
        $this->local = $local;

        return $this;
    }

    public function getResponsavel(): ?User
    {
        return $this->responsavel;
    }

    public function setResponsavel(?User $responsavel): static
    {
        $this->responsavel = $responsavel;

        return $this;
    }

    public function getSaldoAtual(): float
    {
        $saldo = 0.0;
        foreach ($this->movimentos as $movimento) {
            if ($movimento->getStatus()->getCodigo() === 'CONFIRMADO') {
                if ($movimento->getTipo()->getCodigo() === 'ENTRADA') {
                    $saldo += $movimento->getValor();
                } else {
                    $saldo -= $movimento->getValor();
                }
            }
        }
        return $saldo;
    }
} 