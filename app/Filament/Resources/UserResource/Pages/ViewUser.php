<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Actions;
use Filament\Actions\Action;
use Filament\Actions\MountableAction;
use App\Filament\Resources\UserResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Tables\Actions\Action as ActionsAction;
use Torgodly\Html2Media\Actions\Html2MediaAction;

class ViewUser extends ViewRecord
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),

            Action::make('test')
                ->modalContent(fn(MountableAction $action) => view('invoice'))
                ->extraModalFooterActions([
                    Action::make('erer')
                ])
                ->requiresConfirmation(),

            Html2MediaAction::make('print')
                ->preview()
                ->label('Download as PDF')
                ->content(fn($record) => view('invoice')),
        ];
    }
}
