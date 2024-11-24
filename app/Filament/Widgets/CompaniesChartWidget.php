<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class CompaniesChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Companies Chart';

    protected static ?int $sort = 5;

    protected function getData(): array
    {
        $data = Trend::model(Company::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perWeek()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'Companies',
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
