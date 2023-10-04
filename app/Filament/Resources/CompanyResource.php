<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyResource\Pages;
use App\Filament\Resources\CompanyResource\RelationManagers;
use App\Models\Company;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-s-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("Add New Company")->schema([
                    TextInput::make('legal_name')->required(),
                    TextInput::make('popular_name')->required(),
                    TextInput::make('url')->prefix('https://')->suffixIcon('heroicon-m-globe-alt')->required(),
                    TextInput::make('about')->required(),
                    TextInput::make('address')->required()->suffixIcon('heroicon-m-map-pin'),
                    TextInput::make('contact_main')->required()->tel()->suffixIcon('heroicon-m-phone'),
                    Select::make('company_type')->required()->options([
                        "Kamaao" => "Kamaao",
                        "Other" => "Other"
                    ]),
                    Toggle::make('status')->label('Is Active')->required(),
                    FileUpload::make('logo')->required()->columnSpanFull()->disk('public')
                        ->directory('company')->image()
                        ->imageEditor()->acceptedFileTypes(['image/jpeg']),

                ])->columns(2)
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('logo')->size(40)->circular(),
                TextColumn::make('legal_name'),
                TextColumn::make('contact_main'),
                TextColumn::make('company_type'),
                ToggleColumn::make('status')->label('Active'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

                Tables\Actions\ForceDeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
