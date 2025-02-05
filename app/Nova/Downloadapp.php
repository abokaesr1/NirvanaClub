<?php

namespace App\Nova;

use Ayvazyan10\Imagic\Imagic;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Downloadapp extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Downloadapp>
     */
    public static $model = \App\Models\Downloadapp::class;
    public static $group = "HOME";
    public static function label()
    {
        return "Download App";
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
            Text::make('English Title', 'en_title'),
            Text::make('Arabic Title', 'ar_title'),
            Trix::make("English Description", 'en_description'),
            Trix::make("Arabic Description", 'ar_description'),
            Imagic::make("Backgroud Image", 'background'),
            Text::make("Download Link Apple ", 'ios_link'),
            Imagic::make("Download Apple Image", 'ios_image'),
            Text::make("Download Link android ", 'android_link'),
            Imagic::make("Download android Image", 'android_image'),
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
