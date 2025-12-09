<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class UserProvider implements UserProviderInterface
{
    public function __construct(
        private UserRepository $userRepository
    ) {}

    public function loadUserByUsername($username)
    {
        // Primeiro tenta buscar por email
        $user = $this->userRepository->findByEmail($username);
        
        if (!$user) {
            // Se não encontrar por email, tenta por username
            $user = $this->userRepository->findByUsername($username);
        }
        
        if (!$user) {
            throw new UsernameNotFoundException('Usuário não encontrado');
        }
        
        return $user;
    }

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        $user = $this->userRepository->findByEmail($identifier);
        
        if (!$user) {
            throw new UsernameNotFoundException('Usuário não encontrado');
        }
        
        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        return $this->loadUserByUsername($user->getUserIdentifier());
    }

    public function supportsClass($class)
    {
        return UserInterface::class === $class || is_subclass_of($class, UserInterface::class);
    }
} 