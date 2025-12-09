<?php

namespace App\Command;

use App\Entity\LocalCaixa;
use App\Entity\TipoMovimento;
use App\Entity\OrigemMovimento;
use App\Entity\ModoMovimento;
use App\Entity\Status;
use App\Entity\Responsavel;
use App\Entity\Pagador;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:create-initial-caixa-data',
    description: 'Cria dados iniciais para o sistema de caixa',
)]
class CreateInitialCaixaDataCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Criando dados iniciais para o sistema de caixa...');

        // Criar locais de caixa
        $locais = [
            ['nome' => 'Sede Principal', 'endereco' => 'Rua Principal, 123'],
            ['nome' => 'Filial Centro', 'endereco' => 'Av. Central, 456'],
            ['nome' => 'Filial Norte', 'endereco' => 'Rua do Norte, 789'],
        ];

        foreach ($locais as $localData) {
            $local = new LocalCaixa();
            $local->setNome($localData['nome']);
            $local->setEndereco($localData['endereco']);
            $local->setAtivo(true);
            
            $this->entityManager->persist($local);
            $io->text("Local '{$localData['nome']}' criado com sucesso.");
        }

        // Criar tipos de movimento
        $tipos = [
            ['nome' => 'Entrada', 'codigo' => 'ENTRADA'],
            ['nome' => 'Saída', 'codigo' => 'SAIDA'],
        ];

        foreach ($tipos as $tipoData) {
            $tipo = new TipoMovimento();
            $tipo->setNome($tipoData['nome']);
            $tipo->setCodigo($tipoData['codigo']);
            $tipo->setAtivo(true);
            
            $this->entityManager->persist($tipo);
            $io->text("Tipo de movimento '{$tipoData['nome']}' criado com sucesso.");
        }

        // Criar origens de movimento
        $origens = [
            ['nome' => 'Vendas', 'codigo' => 'VENDAS'],
            ['nome' => 'Compras', 'codigo' => 'COMPRAS'],
            ['nome' => 'Serviços', 'codigo' => 'SERVICOS'],
            ['nome' => 'Transferência', 'codigo' => 'TRANSFERENCIA'],
            ['nome' => 'Outros', 'codigo' => 'OUTROS'],
        ];

        foreach ($origens as $origemData) {
            $origem = new OrigemMovimento();
            $origem->setNome($origemData['nome']);
            $origem->setCodigo($origemData['codigo']);
            $origem->setAtivo(true);
            
            $this->entityManager->persist($origem);
            $io->text("Origem de movimento '{$origemData['nome']}' criada com sucesso.");
        }

        // Criar modos de movimento
        $modos = [
            ['nome' => 'Dinheiro', 'codigo' => 'DINHEIRO'],
            ['nome' => 'Cartão de Débito', 'codigo' => 'CARTAO_DEBITO'],
            ['nome' => 'Cartão de Crédito', 'codigo' => 'CARTAO_CREDITO'],
            ['nome' => 'PIX', 'codigo' => 'PIX'],
            ['nome' => 'Transferência Bancária', 'codigo' => 'TRANSFERENCIA'],
            ['nome' => 'Cheque', 'codigo' => 'CHEQUE'],
        ];

        foreach ($modos as $modoData) {
            $modo = new ModoMovimento();
            $modo->setNome($modoData['nome']);
            $modo->setCodigo($modoData['codigo']);
            $modo->setAtivo(true);
            
            $this->entityManager->persist($modo);
            $io->text("Modo de movimento '{$modoData['nome']}' criado com sucesso.");
        }

        // Criar status
        $status = [
            ['nome' => 'Pendente', 'codigo' => 'PENDENTE'],
            ['nome' => 'Confirmado', 'codigo' => 'CONFIRMADO'],
            ['nome' => 'Cancelado', 'codigo' => 'CANCELADO'],
            ['nome' => 'Estornado', 'codigo' => 'ESTORNADO'],
        ];

        foreach ($status as $statusData) {
            $statusEntity = new Status();
            $statusEntity->setNome($statusData['nome']);
            $statusEntity->setCodigo($statusData['codigo']);
            $statusEntity->setAtivo(true);
            
            $this->entityManager->persist($statusEntity);
            $io->text("Status '{$statusData['nome']}' criado com sucesso.");
        }

        // Criar responsáveis
        $responsaveis = [
            ['nome' => 'João Silva', 'email' => 'joao@empresa.com', 'telefone' => '(11) 99999-1111'],
            ['nome' => 'Maria Santos', 'email' => 'maria@empresa.com', 'telefone' => '(11) 99999-2222'],
            ['nome' => 'Pedro Costa', 'email' => 'pedro@empresa.com', 'telefone' => '(11) 99999-3333'],
        ];

        foreach ($responsaveis as $respData) {
            $responsavel = new Responsavel();
            $responsavel->setNome($respData['nome']);
            $responsavel->setEmail($respData['email']);
            $responsavel->setTelefone($respData['telefone']);
            $responsavel->setAtivo(true);
            
            $this->entityManager->persist($responsavel);
            $io->text("Responsável '{$respData['nome']}' criado com sucesso.");
        }

        // Criar pagadores
        $pagadores = [
            ['nome' => 'Cliente Genérico', 'email' => 'cliente@email.com', 'telefone' => '(11) 88888-1111', 'cpfCnpj' => '123.456.789-00'],
            ['nome' => 'Fornecedor ABC', 'email' => 'fornecedor@abc.com', 'telefone' => '(11) 88888-2222', 'cpfCnpj' => '12.345.678/0001-90'],
            ['nome' => 'Empresa XYZ', 'email' => 'contato@xyz.com', 'telefone' => '(11) 88888-3333', 'cpfCnpj' => '98.765.432/0001-10'],
        ];

        foreach ($pagadores as $pagData) {
            $pagador = new Pagador();
            $pagador->setNome($pagData['nome']);
            $pagador->setEmail($pagData['email']);
            $pagador->setTelefone($pagData['telefone']);
            $pagador->setCpfCnpj($pagData['cpfCnpj']);
            $pagador->setAtivo(true);
            
            $this->entityManager->persist($pagador);
            $io->text("Pagador '{$pagData['nome']}' criado com sucesso.");
        }

        $this->entityManager->flush();

        $io->success([
            'Dados iniciais criados com sucesso!',
            '',
            'Criados:',
            '- ' . count($locais) . ' locais de caixa',
            '- ' . count($tipos) . ' tipos de movimento',
            '- ' . count($origens) . ' origens de movimento',
            '- ' . count($modos) . ' modos de movimento',
            '- ' . count($status) . ' status',
            '- ' . count($responsaveis) . ' responsáveis',
            '- ' . count($pagadores) . ' pagadores',
        ]);

        return Command::SUCCESS;
    }
} 