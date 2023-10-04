<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectsResource\Pages;
use App\Filament\Resources\ProjectsResource\RelationManagers;
use App\Models\ProjectCategory;
use App\Models\Projects;
use App\Models\ProjectSubCategory;
use App\Models\Tutorials;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MorphToSelect;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class ProjectsResource extends Resource
{
    protected static ?string $model = Projects::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    TextInput::make('title')->required(),
                    Textarea::make('description')->required(),
                    Select::make('category')->label('Category')
                        ->options(ProjectCategory::query()->pluck('category', 'id'))
                        ->live(),
                    Select::make('sub_category')
                        ->options(fn (Get $get): Collection => ProjectSubCategory::query()
                            ->where('category_id', $get('category'))
                            ->pluck('sub_category', 'id'))->required(),
                    TextInput::make('amount')
                        ->label('Amount')
                        ->numeric()
                        ->suffixIcon('heroicon-s-currency-rupee'),

                    TextInput::make('coins')
                        ->label('Coins')
                        ->numeric()
                        ->step(100)
                        ->suffixIcon('heroicon-s-circle-stack'),

                    DatePicker::make('start_date')
                        ->label('Start Date')
                        ->after('today')->live(onBlur: true),

                    DatePicker::make('end_date')
                        ->label('End Date')
                        ->after('start_date')->live(onBlur: true),



                    TextInput::make('cta')->label('CTA'),
                    TextInput::make('cta2')->label('CTA2'),

                    Textarea::make('referral_text')->label('Referral Text'),

                    Textarea::make('about')->label('About'),


                ])->columns(2)->columnSpan(2),
                Group::make()->schema([


                    Section::make('Webinars')->schema([

                        Toggle::make('has_a_webinar')
                            ->label('Has Webinars'),
                        Toggle::make('has_an_upcoming_webinar')
                            ->label('Has an Upcoming Webinar'),
                        Select::make('webinar_id')->label('Select Webinar')->options([
                            // Define your webinar options here (e.g., from the database).
                        ]),
                    ])->columns(1)->columnSpan(1)->collapsible(),

                    Section::make('Tutorials')->schema([


                        Toggle::make('has_tutorials')
                            ->label('Has an Tutorial'),

                        Select::make('tutorials_id')
                            ->label('Tutorial')
                            ->options(Tutorials::query()
                                ->pluck('title', 'id'))
                            ->searchable(),

                        Toggle::make('tag_kamaao')
                            ->label('Tag Kamaao'),

                        Toggle::make('has_kamaao_benefits')
                            ->label('Has Kamaao Benefits'),
                    ])->columns(1)->columnSpan(1)->collapsible(),
                    Section::make('Meta')->schema([
                        TextInput::make('total_openings')
                            ->label('Total Openings')
                            ->numeric(),

                        Toggle::make('is_trending')
                            ->label('Set Trending')
                            ->onColor('success')
                            ->offColor('gray')
                            ->inline(false),

                        Select::make('posted_by_id')
                            ->label('Posted By ID')
                            ->searchable()
                            ->relationship('posted_by', 'name'),

                    ])->columns(1)->columnSpan(1)->collapsible(),
                ])


            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('category')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('subcategory')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('coins')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('amount')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                ToggleColumn::make('is_trending')
                    ->label('Trending')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),

                ToggleColumn::make('tag_kamaao')
                    ->label('Trending')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),

                ToggleColumn::make('tag_kamaao')
                    ->label('Trending')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),

                TextColumn::make('opening_left')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('number_of_applications')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('posted_by_id')
                    ->sortable()
                    ->searchable() 

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProjects::route('/create'),
            'edit' => Pages\EditProjects::route('/{record}/edit'),
        ];
    }
}
