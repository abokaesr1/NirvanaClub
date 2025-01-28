<?php

namespace App\Nova;

use Ayvazyan10\Imagic\Imagic;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Discover extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Discover>
     */
    public static $model = \App\Models\Discover::class;
    public static $group = "DISCOVER";
    public static function label()
    {
        return "Discover Tabs ";
    }
    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make("English Title", 'en_title'),
            Text::make("Arabic Title", 'ar_title'),
            Slug::make("English Slug", 'en_subtitle')->from('en_title'),
            Slug::make("Arabic Slug", 'ar_subtitle')->from('en_title'),
            Flexible::make("Sliders Tabs", 'tabs')
                ->addLayout('Tabs', 'tabs', [
                    Text::make("English Title", 'en_title'),
                    Text::make("Arabic Title", 'ar_title'),
                    Trix::make("English description", 'en_description'),
                    Trix::make("Arabic description", 'ar_description'),
                    Imagic::make('Slider Image', 'slider_image'),
                ])
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
