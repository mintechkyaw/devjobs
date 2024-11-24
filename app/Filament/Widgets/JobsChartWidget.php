<?php

namespace App\Filament\Widgets;

use App\Models\Job;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class JobsChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Jobs Chart';

    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $data = Trend::model(Job::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perWeek()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Jobs',
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
