<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectCategoryResource\Pages;
use App\Filament\Resources\ProjectCategoryResource\RelationManagers;
use App\Models\ProjectCategory;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
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

class ProjectCategoryResource extends Resource
{
    protected static ?string $model = ProjectCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Section::make()->schema([
                TextInput::make('category')->required(),
                FileUpload::make('icon')->required()->disk('public')
                ->directory('assets/projectcategory')->image()
                ->imageEditor()->acceptedFileTypes(['image/jpeg']),
                Toggle::make('status'),
               ])->columns(3)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('icon')->size(40)->circular(),
                TextColumn::make('id')->sortable(),
                TextColumn::make('category')->sortable()->searchable(),
                ToggleColumn::make('status')->sortable()
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
            'index' => Pages\ListProjectCategories::route('/'),
            'create' => Pages\CreateProjectCategory::route('/create'),
            'edit' => Pages\EditProjectCategory::route('/{record}/edit'),
        ];
    }    
}
