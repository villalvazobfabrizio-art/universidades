<?php

namespace App\Filament\Resources\Aspirantes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AspirantesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre_completo')
                    ->required(),
                TextInput::make('correo'),
                TextInput::make('pregunta'),
                TextInput::make('respuesta'),
                TextInput::make('telefono')
                    ->tel(),
            ]);
    }
}
