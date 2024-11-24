<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use App\Models\Job;
use App\Models\Skill;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Card::make('Total Users', User::count())
                ->icon('heroicon-o-users')
                ->color('success'),
            Card::make('Total Skills', Skill::count())
                ->icon('heroicon-o-puzzle-piece')
                ->color('success'),
            Card::make('Total Jobs', Job::count())
                ->icon('heroicon-o-briefcase')
                ->color('success'),
            Card::make('Total Companies', Company::count())
                ->icon('heroicon-o-building-office-2')
                ->color('success'),
        ];
    }
}
