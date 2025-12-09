<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-admin-user',
    description: 'Cria um usuário administrador',
)]
class CreateAdminUserCommand extends Command
{
    public function __construct(
        private UserRepository $userRepository,
        private UserPasswordHasherInterface $passwordHasher
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $email = $io->ask('Digite o e-mail do administrador', 'admin@cedonline.com.br');
        $username = $io->ask('Digite o nome de usuário', 'admin');
        $nome = $io->ask('Digite o nome completo', 'Administrador');
        $password = $io->askHidden('Digite a senha');

        // Verificar se o usuário já existe
        $existingUser = $this->userRepository->findByEmail($email);
        if ($existingUser) {
            $io->error('Usuário com este e-mail já existe!');
            return Command::FAILURE;
        }

        // Criar novo usuário
        $user = new User();
        $user->setEmail($email);
        $user->setUsername($username);
        $user->setNome($nome);
        $user->setRoles(['ROLE_ADMIN', 'ROLE_USER']);
        
        // Hash da senha
        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
        $user->setPassword($hashedPassword);

        // Salvar no banco
        $this->userRepository->save($user, true);

        $io->success(sprintf('Usuário administrador criado com sucesso! E-mail: %s', $email));

        return Command::SUCCESS;
    }
} 