<?php

Route::middleware(['web'])
    ->namespace('LaravelEnso\Examples\app\Http\Controllers')
    ->prefix('examples')->as('examples.')
    ->group(function () {
        Route::view('table', 'laravel-enso/examples::table.index')
            ->name('table');

        Route::prefix('table')->as('table.')
            ->group(function () {
                Route::get('init', 'TableController@init')
                    ->name('init');
                Route::get('data', 'TableController@data')
                    ->name('data');
                Route::get('exportExcel', 'TableController')
                    ->name('exportExcel');
            });

        Route::view('select', 'laravel-enso/examples::select.index')
            ->name('select');

        Route::prefix('select')->as('select.')
            ->group(function () {
                Route::get('employee', 'EmployeeSelectController@options')
                    ->name('employee');
            });
    });
