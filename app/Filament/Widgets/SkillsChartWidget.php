<?php

namespace App\Filament\Widgets;

use App\Models\Skill;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class SkillsChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Skills Chart';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = Trend::model(Skill::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perWeek()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Skills',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
