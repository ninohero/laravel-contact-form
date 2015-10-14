<?php

// // Provide controller methods with object instead of id
Route::model('tasks', 'Task');
Route::model('projects', 'Project');

// figure out which task uses particular slug
Route::bind('tasks', function($value, $route) {
	return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
	return App\Project::whereSlug($value)->first();
});

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');
