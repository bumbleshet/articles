<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // Form::macro('myField', function()
		// {
		// 	return '<select name="category_id" id="category_id" onChange="onSelect()"> 
		// 			<option value="" disabled selected>Select your option</option>
		// 			@foreach($categories->all() as $category)
		// 				<option value="{{$category}}">{{$category}}</option>
		// 			@endforeach
		// 			<option value="">--add category--</option>
        //         </select>	';
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
