<?php

declare(strict_types=1);

namespace Hackthon\Controller;

use Hackthon\Entity\HistoricoDeCalculo;

class AtualizaPrecoEtanol extends AtualizaPreco
{

    protected function getPreco() : HistoricoDeCalculo
    {
        return $this->serviceHistoricoDeCalculo->getPrecoEtanol();
    }

    protected function getTitle() : string
    {
        return 'Atualizar Preço do etanol';
    }
    
    protected function getSuccessMessage() : string
    {
        return 'preço atualizado com sucesso!!!';
    }

}