<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $nome = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $dataCriacao = null;

    #[ORM\Column]
    private ?bool $ativo = null;

    #[ORM\OneToMany(mappedBy: 'usuario', targetEntity: Permissao::class, orphanRemoval: true)]
    private Collection $permissoes;

    public function __construct()
    {
        $this->dataCriacao = new \DateTimeImmutable();
        $this->ativo = true;
        $this->roles = ['ROLE_USER'];
        $this->permissoes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

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
            $permissao->setUsuario($this);
        }

        return $this;
    }

    public function removePermissao(Permissao $permissao): static
    {
        if ($this->permissoes->removeElement($permissao)) {
            // set the owning side to null (unless already changed)
            if ($permissao->getUsuario() === $this) {
                $permissao->setUsuario(null);
            }
        }

        return $this;
    }

    public function hasPermissao(string $moduloCodigo, string $acao): bool
    {
        foreach ($this->permissoes as $permissao) {
            if ($permissao->getModulo()->getCodigo() === $moduloCodigo) {
                switch ($acao) {
                    case 'visualizar':
                        return $permissao->isPodeVisualizar();
                    case 'incluir':
                        return $permissao->isPodeIncluir();
                    case 'editar':
                        return $permissao->isPodeEditar();
                    case 'excluir':
                        return $permissao->isPodeExcluir();
                }
            }
        }
        return false;
    }
} 