<?php

namespace App\Enum;

 
enum Status: string
{
    case EN_ATTENTE = 'en_attente';
    case EN_COURS = 'en_cours';
    case TERMINE = 'termine';

    public function label(): string
    {
        return match ($this) {
            self::EN_ATTENTE => 'En attente',
            self::EN_COURS => 'En cours',
            self::TERMINE => 'Terminé',
        };
    }

   
}
