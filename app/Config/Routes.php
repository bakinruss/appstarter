<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthPageController::login');

// Публичная страница курсов (HTML)
$routes->get('courses', '\App\Modules\Courses\Controllers\CoursesController::page');
// Публичная страница просмотра курса (HTML)
$routes->get('courses/(:num)/view', '\App\Modules\Courses\Controllers\CoursesController::showPage/$1');
// API для курсов (JSON)
$routes->get('api/courses', '\App\Modules\Courses\Controllers\CoursesController::index');
$routes->get('api/courses/(:num)', '\App\Modules\Courses\Controllers\CoursesController::show/$1');

// Авторизация
$routes->group('auth', ['namespace' => 'App\Modules\Auth\Controllers'], static function ($routes) {
    $routes->get('csrf', 'AuthController::csrf');
    $routes->post('login', 'AuthController::login');
    $routes->post('logout', 'AuthController::logout', ['filter' => 'auth']);
    $routes->post('register', 'AuthController::register');
});

// Пользователь
$routes->group('users', ['namespace' => 'App\Modules\Users\Controllers', 'filter' => 'auth'], static function ($routes) {
    $routes->get('me', 'UsersController::me');
});

// Курсы
$routes->group('courses', ['namespace' => 'App\Modules\Courses\Controllers'], static function ($routes) {
    $routes->get('/', 'CoursesController::index');
    $routes->get('(:num)', 'CoursesController::show/$1');
    $routes->get('(:num)/lessons', 'CoursesController::lessons/$1');
    $routes->post('/', 'CoursesController::create', ['filter' => 'auth']);
    $routes->put('(:num)', 'CoursesController::update/$1', ['filter' => 'auth']);
});

// Уроки
$routes->get('lessons/(:num)', 'App\Modules\Lessons\Controllers\LessonsController::show/$1');

// Видео-доступ (подписанные ссылки)
$routes->get('video/signed', 'App\Modules\VideoAccess\Controllers\VideoAccessController::signedUrl', ['filter' => 'auth']);

// Админка
$routes->get('admin', 'App\Modules\Admin\Controllers\AdminController::dashboard', ['filter' => 'admin']);

// Health-check
$routes->get('health', 'App\Modules\Health\Controllers\HealthController::index');
