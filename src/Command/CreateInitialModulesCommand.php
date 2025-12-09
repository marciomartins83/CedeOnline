<?php

namespace App\Command;

use App\Entity\Modulo;
use App\Repository\ModuloRepository;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:create-initial-modules',
    description: 'Cria os módulos iniciais do sistema',
)]
class CreateInitialModulesCommand extends Command
{
    public function __construct(
        private ModuloRepository $moduloRepository
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $modulos = [
            [
                'nome' => 'Gestão de Usuários',
                'descricao' => 'Módulo para gerenciar usuários do sistema',
                'codigo' => 'USUARIOS'
            ],
            [
                'nome' => 'Gestão de Módulos',
                'descricao' => 'Módulo para gerenciar módulos do sistema',
                'codigo' => 'MODULOS'
            ],
            [
                'nome' => 'Gestão de Permissões',
                'descricao' => 'Módulo para gerenciar permissões dos usuários',
                'codigo' => 'PERMISSOES'
            ],
            [
                'nome' => 'Sistema de Caixa',
                'descricao' => 'Módulo para gerenciar movimentações de caixa',
                'codigo' => 'CAIXA'
            ],
            [
                'nome' => 'Relatórios',
                'descricao' => 'Módulo para visualizar relatórios do sistema',
                'codigo' => 'RELATORIOS'
            ],
            [
                'nome' => 'Configurações',
                'descricao' => 'Módulo para configurar parâmetros do sistema',
                'codigo' => 'CONFIGURACOES'
            ]
        ];

        $criados = 0;
        foreach ($modulos as $dadosModulo) {
            $moduloExistente = $this->moduloRepository->findByCodigo($dadosModulo['codigo']);
            
            if (!$moduloExistente) {
                $modulo = new Modulo();
                $modulo->setNome($dadosModulo['nome']);
                $modulo->setDescricao($dadosModulo['descricao']);
                $modulo->setCodigo($dadosModulo['codigo']);
                $modulo->setAtivo(true);

                $this->moduloRepository->save($modulo, true);
                $criados++;
                $io->text("Módulo '{$dadosModulo['nome']}' criado com sucesso.");
            } else {
                $io->text("Módulo '{$dadosModulo['nome']}' já existe.");
            }
        }

        if ($criados > 0) {
            $io->success("{$criados} módulos foram criados com sucesso!");
        } else {
            $io->info("Todos os módulos já existem no sistema.");
        }

        return Command::SUCCESS;
    }
} 