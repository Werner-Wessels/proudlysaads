<?php

namespace App\Nova;
use App\Models\Location;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Listing extends Resource
{
    public static function indexQuery(NovaRequest $request, $query)
    {
        $user = Auth::user();
        if ($user->is_admin === 1){
            return $query;
        }elseif($user->is_admin === 0){
            return $query->where('location_id', '=' , $user->location_id);
        }

    }

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Listing::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

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
            ID::make()->sortable()->hide(),
            BelongsTo::make('User')->hideWhenCreating()->hideWhenUpdating(),
            BelongsTo::make('Location')->hideWhenCreating()->hideWhenUpdating()->hideFromIndex()->display('name'),
            BelongsTo::make('Category'),
            Text::make('Title')->required(),
            Textarea::make('Description')->required(),
            Image::make('Image', 'image_url')->required(),
            Currency::make('Price')->required(),
            Select::make('Condition', 'condition')->required()->sortable()->options(
                [
                    'New' => 'New',
                    'Almost New' => 'Almost New',
                    'Used' => 'Used',
                    'Repairs Required' => 'Repairs Required'
                ]
            )->displayUsingLabels(),
            Boolean::make('Active', 'is_active')->hideWhenCreating(),
            Boolean::make('Approved', 'is_approved')->hideWhenCreating(),
            Select::make('Location', 'location_id')->options(function () {
                return array_filter(Location::pluck('name', 'id')->toArray());
            })->displayUsingLabels(),
            HasMany::make('Offers'),





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
