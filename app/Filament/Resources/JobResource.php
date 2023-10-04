<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?string $navigationIcon = 'heroicon-s-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                Select::make('type')->options([
                    "Part Time"     => "Part Time",
                    "Full Time"     => "Full time",
                    "Field Job"     => "Field Job",
                    "Office Job"    => "Office Job",
                    "Contract"      => "Contract"
                ]),
                Select::make('category')
                    ->relationship('category', 'category'),
                TextInput::make('total_openings')->numeric(),
                TextInput::make('min_salary'),
                TextInput::make('max_salary'),
                TextInput::make('notes'),
                Select::make('company_id')->label('Company'),
                TextInput::make('job_address'),
                TextInput::make('job_Latitude'),
                TextInput::make('job_Longitude'),
                Select::make('education_required'),
                TextInput::make('fresher_can_apply'),
                TextInput::make('experience_required'),
                TextInput::make('working_days'),
                TextInput::make('working_shift'),
                TextInput::make('shift_timing'),
                Toggle::make('tag_kamaao'),
                Toggle::make('kamaao_benefits'),
                Toggle::make('tag_premium'),
                Toggle::make('tag_verified'),
                TextInput::make('job_summery'),
                TextInput::make('english_level'),
                Toggle::make('has_a_webinar'),
                TextInput::make('has_an_upcoming_webinar'),
                TextInput::make('upcoming_webinar_id'),
                Toggle::make('joining_fee_required'),
                TextInput::make('joining_fee'),
                TextInput::make('joining_fee_for'),
                Toggle::make('has_tutorials'),
                TextInput::make('tutorial_id'),
                TextInput::make('interview_method'),
                TextInput::make('interview_Address'),
                TextInput::make('posted_by_id'),
                MarkdownEditor::make('about_job'),






            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('type')
                    ->sortable()
                    ->searchable()
                    ->toggleable(),
                TextColumn::make('category')
                    ->sortable()
                    ->toggleable()
                    ->searchable(),

                TextColumn::make('expire_on')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                ToggleColumn::make('is_expired')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('last_date')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('total_openings')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('opening_left')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('min_salary')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('max_salary')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('company_id')
                    ->sortable()
                    ->toggleable(),
                TextColumn::make('education_required')
                    ->sortable()
                    ->toggleable()
                    ->toggleable(),

                TextColumn::make('experience_required')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('working_days')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                ToggleColumn::make('fresher_can_apply')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
