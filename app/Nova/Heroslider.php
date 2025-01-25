<?php

namespace App\Nova;

use Ayvazyan10\Imagic\Imagic;
use Laravel\Nova\Fields\ID;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Heroslider extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Heroslider>
     */
    public static $model = \App\Models\Heroslider::class;
    public static $group = "HOME";
    public static function label()
    {
        return "Hero Slider";
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
            Text::make('English Title' , 'en_title'),
            Text::make('Arabic Title' , 'ar_title'),
            Trix::make('English Subtitle' , 'en_subtitle'),
            Trix::make('Arabic Subtitle' , 'ar_subtitle'),
            File::make('Upload Video','video'),
            Flexible::make("Sliders",'slider')
            ->addLayout("Sliders",'slider',[
                Text::make('English Caption' , 'en_caption'),
                Text::make('Arabic Caption' , 'ar_caption'),
                Imagic::make('Slider Image','image')
            ]),
            Flexible::make("Statics",'statics')
            ->addLayout("Statics",'statics',[
                Text::make('English title' , 'en_title'),
                Text::make('Arabic title' , 'ar_title'),
                Text::make('English subtitle' , 'en_subtitle'),
                Text::make('Arabic subtitle' , 'ar_subtitle'),
            ]),
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
