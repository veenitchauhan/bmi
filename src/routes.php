<?php

Route::group(['namespace' => 'Hashbyte\BMI\Controllers', 'prefix' => 'hashbyte/bmi'], function () {
    Route::get('/', ['as' => 'bmi_path', 'uses' => 'BMIController@index']);
});
