<?php

namespace App;

enum projectStatus: string
{
    case Open = 'open';

    case Closed = 'closed';

    public function label(): string
    {   
        return match ($this){

          self::Open => 'Aceitando propostas',
          self::Closed => 'Encerrado',
        
        };
    }   

}
