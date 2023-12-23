<?php

namespace Src\public;

class Util
{

    //Função que irá setar o fuso horario
    public function setarFusoHorario(): void
    {
        date_default_timezone_set('Amrica/Sao_paulo');
    }

    //Função que retornar o horario ataul no formato EUA
    public static function DataAtual(): string
    {
        self::SetarFusoHorario();
        return date('Y-m-d');
    }

    // Função que retorna o horario atual no formato BR
    public static function DataAtualBr(): string
    {
        self::SetarFusoHorario();
        return date('d/m/Y');
    }

    // Funçao que retorna a Hora Atual
    public static function HoraAtual(): string
    {
        self::SetarFusoHorario();
        return date('H:i');
    }

    // Funçao que retorna a Hora e a Data Atual
    public static function DataHoraAtual(): string
    {
        self::SetarFusoHorario();
        return date('Y-m-d H:i');
    }

    //Função usada para redirecionar o usuário para uma determinada pagina do sistema
    public static function ChamarPagina($pag)
    {
        header("location: $pag.php");
        exit;
    }

    // Função que trata dados maliciosos, impedindo ataques em JavaScript 
    public static function DadosMaliciosos($palavra): string
    {
        $palavra = strip_tags($palavra);
        $palavra = mb_strtoupper($palavra, 'UTF-8');
        return $palavra;
    }

    // Função que trata dados maliciosos, impedindo ataques em JavaScript e caracteres especiais, evitando a poluição do banco de dados
    public static function TratarDadosGerais($palavra): string
    {

        $caracteresEspeciais = array("?", ".", ",", ";", ":", "!", "?", "-", "'", "\"", "(", ")", "[", "]", "{", "}", "+", "-", "*", "/", "=", "≠", "<", ">", "≤", "≥", "&", "%", "$", "#", "@", "~", "|", "\\", "€", "£", "¥", "¢", "$", "©", "®", "←", "→", "↑", "↓", "•", "◦", "▪", "■", "●");
        $palavra = strip_tags($palavra);
        $palavra = str_replace($caracteresEspeciais, "", trim($palavra));
        $palavra = mb_strtoupper($palavra, 'UTF-8');
        return $palavra;
    }
}
