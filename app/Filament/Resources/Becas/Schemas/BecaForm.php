<?php

namespace App\Filament\Resources\Becas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;

class BecaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('porcentaje')
                    ->required(),
                TextInput::make('tipo')
                    ->required(),
                TextInput::make('promedio')
                    ->required(),
                RichEditor::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
