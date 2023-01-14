<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
                
            Route::middleware('web', 'auth')
                ->prefix('fabricante')
                ->group(base_path('routes/fabricante.php'));

            Route::middleware('web', 'auth')
                ->prefix('enproduccion')
                ->group(base_path('routes/enproduccion.php'));

            
            Route::middleware('web', 'auth')
                ->prefix('descripcionproducto')
                ->group(base_path('routes/descripcionproducto.php'));

                
            Route::middleware('web', 'auth')
                 ->prefix('distribucionproducto')
                 ->group(base_path('routes/distribucionproducto.php'));




             Route::middleware('web', 'auth')
                ->prefix('inicio')
                ->group(base_path('routes/inicio.php'));
            Route::middleware('web', 'auth')
                ->prefix('ventas')
                ->group(base_path('routes/ventas.php'));
            Route::middleware('web', 'auth')
                ->prefix('compras')
                ->group(base_path('routes/compras.php'));

            Route::middleware('web')
                ->prefix('personas')
                ->group(base_path('routes/personas.php'));  
            

            Route::middleware('web', 'auth')
                ->prefix('producto')
                ->group(base_path('routes/Producto.php'));

             Route::middleware('web')
                ->prefix('inventario')
                ->group(base_path('routes/Inventario.php')); 


                



            Route::middleware('web', 'auth')
                ->prefix('reportecompra')
                ->group(base_path('routes/reportecompra.php'));

            Route::middleware('web', 'auth')
                ->prefix('reportepersonas')
                ->group(base_path('routes/reportepersonas.php'));

            Route::middleware('web', 'auth')
                ->prefix('reporteproduccion')
                ->group(base_path('routes/reporteproduccion.php'));

            Route::middleware('web', 'auth')
                ->prefix('reporteventa')
                ->group(base_path('routes/reporteventa.php'));


        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
