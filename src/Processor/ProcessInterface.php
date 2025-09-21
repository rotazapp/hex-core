<?php

namespace Rotaz\Hex\Processor;

interface ProcessInterface
{
    /**
     * Processa a mensagem recebida e retorna o resultado para o adapter apropriado.
     *
     * @param array $message Mensagem a ser processada
     */
    public function process(array $message): void;
}