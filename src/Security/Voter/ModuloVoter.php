<?php

namespace App\Security\Voter;

use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class ModuloVoter extends Voter
{
    public const VIEW = 'MODULO_VIEW';
    public const CREATE = 'MODULO_CREATE';
    public const EDIT = 'MODULO_EDIT';
    public const DELETE = 'MODULO_DELETE';

    protected function supports(string $attribute, mixed $subject): bool
    {
        // Verifica se o atributo é um dos que definimos
        if (!in_array($attribute, [self::VIEW, self::CREATE, self::EDIT, self::DELETE])) {
            return false;
        }

        // Se não há módulo específico, verifica se o usuário tem permissão geral
        if ($subject === null) {
            return true;
        }

        // Se o subject é uma string (código do módulo), aceita
        if (is_string($subject)) {
            return true;
        }

        return false;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
        
        // Se não há usuário logado, nega acesso
        if (!$user instanceof UserInterface) {
            return false;
        }

        // Se o usuário é admin, permite tudo
        if (in_array('ROLE_ADMIN', $user->getRoles())) {
            return true;
        }

        // Se não há módulo específico, verifica permissões gerais
        if ($subject === null) {
            return $this->hasGeneralPermission($user, $attribute);
        }

        // Verifica permissão específica do módulo
        return $this->hasModulePermission($user, $subject, $attribute);
    }

    private function hasGeneralPermission(User $user, string $attribute): bool
    {
        // Verifica se o usuário tem pelo menos uma permissão do tipo solicitado
        foreach ($user->getPermissoes() as $permissao) {
            if (!$permissao->getModulo()->isAtivo()) {
                continue;
            }

            switch ($attribute) {
                case self::VIEW:
                    if ($permissao->isPodeVisualizar()) {
                        return true;
                    }
                    break;
                case self::CREATE:
                    if ($permissao->isPodeIncluir()) {
                        return true;
                    }
                    break;
                case self::EDIT:
                    if ($permissao->isPodeEditar()) {
                        return true;
                    }
                    break;
                case self::DELETE:
                    if ($permissao->isPodeExcluir()) {
                        return true;
                    }
                    break;
            }
        }

        return false;
    }

    private function hasModulePermission(User $user, string $moduloCodigo, string $attribute): bool
    {
        // Usa o método da entidade User para verificar permissão específica
        switch ($attribute) {
            case self::VIEW:
                return $user->hasPermissao($moduloCodigo, 'visualizar');
            case self::CREATE:
                return $user->hasPermissao($moduloCodigo, 'incluir');
            case self::EDIT:
                return $user->hasPermissao($moduloCodigo, 'editar');
            case self::DELETE:
                return $user->hasPermissao($moduloCodigo, 'excluir');
            default:
                return false;
        }
    }
} 