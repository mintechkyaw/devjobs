<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class JobsRelationManager extends RelationManager
{
    protected static string $relationship = 'jobs';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('job_title')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
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
            ]);
    }
}
