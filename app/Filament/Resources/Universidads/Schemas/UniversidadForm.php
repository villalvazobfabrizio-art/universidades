<?php

namespace App\Filament\Resources\Universidads\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UniversidadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('imagen'),
                Textarea::make('descripcion')
                    ->columnSpanFull(),
                TextInput::make('web'),
                TextInput::make('telefono')
                    ->tel(),
                TextInput::make('contacto'),
                TextInput::make('youtube'),
                TextInput::make('facebook'),
                TextInput::make('instagram'),
            ]);
    }
}
