<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', 'Dashboard@index')->name('admin_dashboard');

Route::get('/events', function () {
    return 'Admin Events';
})->name('admin_events');

Route::post('/events/create', function () {
    return 'Event created!';
});

Route::any('{any}', function () {
    // return response()->view('errors.404',[],404);
    throw new NotFoundHttpException('Página no encontrada');
})->where('any', '.*');
