<?php

namespace App\Nova;

use Ayvazyan10\Imagic\Imagic;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Aboutus extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Aboutus>
     */
    public static $model = \App\Models\Aboutus::class;
    public static $group = "HOME";
    public static function label()
    {
        return "About Us Section";
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
            Text::make('English Title','en_title'),
            Text::make('Arabic Title','ar_title'),
            Trix::make('English Description','en_description'),
            Trix::make('Arabic Description','ar_description'),
            Flexible::make("Partners Description",'partner')
            ->addLayout("Partners Description",'partner',[
                Text::make('English Partner Name','en_partner_name'),
                Text::make('Arabic Partner Name','ar_partner_name'),
                Trix::make('English Partner Description','en_partner_description'),
                Trix::make('Arabic Partner Description','ar_partner_description'),
                Imagic::make('Partner Logo','partner_logo'),
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
