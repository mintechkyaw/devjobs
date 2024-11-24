<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Components\Fieldset;
use Filament\Infolists\Components\Grid;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;

    protected static ?int $navigationSort = 3;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Grid::make(3)->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('User')
                    ->required(),

                Forms\Components\TextInput::make('job_title')
                    ->label('Job Title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('job_location')
                    ->label('Job Location')
                    ->required()
                    ->maxLength(255),
            ]),

            Forms\Components\Grid::make(2)->schema([
                Forms\Components\RichEditor::make('job_description')
                    ->label('Job Description')
                    ->required()
                    ->columnSpan(1),

                Forms\Components\Grid::make(1)->schema([
                    Forms\Components\MultiSelect::make('skills')
                        ->relationship('skills', 'name')
                        ->preload(),
                    Forms\Components\TextInput::make('company_name')
                        ->label('Company Name')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\FileUpload::make('company_logo_path')
                        ->label('Company Logo')
                        ->directory('jobs_photos')
                        ->image(),

                    Forms\Components\Toggle::make('featured')
                        ->label('Featured')
                        ->required()
                        ->columnSpanFull(),
                ])->columnSpan(1),
            ]),

            Forms\Components\Grid::make(3)->schema([
                Forms\Components\Select::make('job_type')->options([
                    'office' => 'Office',
                    'hybrid' => 'Hybrid',
                    'remote' => 'Remote',
                ])
                    ->label('Job Type')
                    ->required(),

                Forms\Components\Select::make('employ_type')->options([
                    'full-time' => 'Full-Time',
                    'part-time' => 'Part-Time',
                    'contract' => 'Contract',
                    'temporary' => 'Temporary',
                    'intern' => 'Intern',
                    'volunteer' => 'Volunteer',
                    'other' => 'Others',
                ])
                    ->label('Employment Type')
                    ->required(),

                Forms\Components\TextInput::make('salary')
                    ->label('Salary')
                    ->default('Negotiate')
                    ->maxLength(255),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('company_logo_path')
                    ->label('Company Logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_location')
                    ->searchable(),
                Tables\Columns\TextColumn::make('job_type'),
                Tables\Columns\TextColumn::make('employ_type'),
                Tables\Columns\TextColumn::make('company_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('salary')
                    ->searchable(),
                Tables\Columns\IconColumn::make('featured')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('employ_type')->options([
                    'full-time' => 'Full-Time',
                    'part-time' => 'Part-Time',
                    'contract' => 'Contract',
                    'temporary' => 'Temporary',
                    'intern' => 'Intern',
                    'volunteer' => 'Volunteer',
                    'other' => 'Others',
                ]),
                Tables\Filters\SelectFilter::make('job_type')->options([
                    'office' => 'Office',
                    'hybrid' => 'Hybrid',
                    'remote' => 'Remote',
                ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            Fieldset::make('')->schema([
                Infolists\Components\TextEntry::make('job_title'),
                Infolists\Components\TextEntry::make('job_location'),
                Infolists\Components\TextEntry::make('job_type'),
            ])->columns(3),
            Grid::make(2)->schema([
                Fieldset::make('Job Description')->schema([
                    Infolists\Components\TextEntry::make('job_description')
                        ->html()
                        ->label(''),

                ])->columnSpan(1),

                Grid::make(1)->schema([
                    Fieldset::make('Other Informations')->schema([
                        Infolists\Components\TextEntry::make('skills.name')->color('primary'),
                        Infolists\Components\TextEntry::make('company_name')
                            ->label('Company Name'),

                        Infolists\Components\ImageEntry::make('company_logo_path')
                            ->label('Company Logo'),

                        Infolists\Components\IconEntry::make('featured')
                            ->label('Featured')
                            ->boolean(),
                        Fieldset::make('')->schema([
                            Infolists\Components\TextEntry::make('job_type'),
                            Infolists\Components\TextEntry::make('employ_type'),
                            Infolists\Components\TextEntry::make('salary'),
                        ])->columns(3),
                    ]),
                ])->columnSpan(1),
            ]),

        ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'view' => Pages\ViewJob::route('/{record}'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
