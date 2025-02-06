<?php

namespace App\Filament\Resources;

use App\Enums\MembershipStatusEnum;
use App\Enums\TechnologiesEnum;
use App\Filament\Resources\MembershipResource\Pages;
use App\Filament\Resources\MembershipResource\RelationManagers;
use App\Models\Membership;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MembershipResource extends Resource
{
    protected static ?string $model = Membership::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Membership')
                    ->columns(2)
            ->schema([
                TextInput::make('name'),
                TextInput::make('email')->disabled(),
                TextInput::make('data.phone'),
                TextInput::make('data.current_company'),
                TextInput::make('data.years_of_experience'),
                Select::make('data.technologies')
                    ->multiple()
                    ->options([
                        TechnologiesEnum::values()
                    ]),
                Select::make('status')
                ->options(MembershipStatusEnum::values())
            ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('data.phone')->label('Phone'),
                TextColumn::make('created_at')->label('Applied on'),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        MembershipStatusEnum::APPLIED => 'info',
                        MembershipStatusEnum::ACTIVE => 'success',
                        MembershipStatusEnum::UNDER_REVIEW => 'warning',
                        MembershipStatusEnum::APPROVED  => 'success',
                        MembershipStatusEnum::REJECTED => 'danger',
                        MembershipStatusEnum::SUSPENDED => 'danger',

                    })
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMemberships::route('/'),
            'create' => Pages\CreateMembership::route('/create'),
            'edit' => Pages\EditMembership::route('/{record}/edit'),
        ];
    }
}
