<?php

namespace App\Filament\Resources\Carreras\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class CarrerasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
               FileUpload::make('imagen')
               ->image()
               ->directory('carreras')
               ->disk('public')
               ,
                RichEditor::make('descripcion')
                    ->columnSpanFull(),
                RichEditor::make('perfil_ingreso')
                    ->columnSpanFull(),
                RichEditor::make('perfil_egreso')
                    ->columnSpanFull(),
                TextInput::make('contacto'),
            ]);
    }
}
