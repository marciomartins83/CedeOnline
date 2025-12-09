<?php

namespace App\Command;

use App\Entity\Modulo;
use App\Entity\Permissao;
use App\Entity\User;
use App\Repository\ModuloRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:add-caixa-permissions',
    description: 'Adiciona permissões do módulo CAIXA para usuários',
)]
class AddCaixaPermissionsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private UserRepository $userRepository,
        private ModuloRepository $moduloRepository
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Adicionando permissões do módulo CAIXA...');

        // Buscar o módulo CAIXA
        $modulo = $this->moduloRepository->findOneBy(['codigo' => 'CAIXA']);
        
        if (!$modulo) {
            $io->error('Módulo CAIXA não encontrado!');
            return Command::FAILURE;
        }

        $io->text("Módulo encontrado: {$modulo->getNome()} ({$modulo->getCodigo()})");

        // Buscar usuários
        $users = $this->userRepository->findAll();
        
        if (empty($users)) {
            $io->error('Nenhum usuário encontrado!');
            return Command::FAILURE;
        }

        $permissionsAdded = 0;

        foreach ($users as $user) {
            // Verificar se já existe permissão para este usuário e módulo
            $existingPermission = $this->entityManager->getRepository(Permissao::class)
                ->findOneBy(['usuario' => $user, 'modulo' => $modulo]);

            if ($existingPermission) {
                $io->text("Permissão já existe para usuário: {$user->getNome()}");
                continue;
            }

            // Criar nova permissão
            $permissao = new Permissao();
            $permissao->setUsuario($user);
            $permissao->setModulo($modulo);
            $permissao->setPodeVisualizar(true);
            $permissao->setPodeIncluir(true);
            $permissao->setPodeEditar(true);
            $permissao->setPodeExcluir(true);

            $this->entityManager->persist($permissao);
            $permissionsAdded++;

            $io->text("Permissão criada para usuário: {$user->getNome()}");
        }

        $this->entityManager->flush();

        $io->success([
            "Permissões adicionadas com sucesso!",
            "Total de permissões criadas: {$permissionsAdded}"
        ]);

        return Command::SUCCESS;
    }
} 