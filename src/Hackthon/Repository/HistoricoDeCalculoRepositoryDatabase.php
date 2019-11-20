<?php

declare(strict_types=1);

namespace Hackthon\Repository;

use PDO;

class HistoricoDeCalculoRepositoryDatabase implements HistoricoDeCalculoRepositoryInterface
{
    private $conexao;
    
    public function __construct(PDO $conexao)
    {
        $this->conexao = $conexao;
    }
    public function getAll(): array
    {
        $stmt = $this->conexao->prepare("SELECT * FROM historico_de_calculo");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
