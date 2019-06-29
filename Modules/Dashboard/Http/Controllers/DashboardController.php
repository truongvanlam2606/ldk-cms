<?php

namespace Modules\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function __invoke()
    {
        theme()->asset()->usePath()->add('chart', 'vendor/chart.js/dist/Chart.min.js');
        theme()->asset()->usePath()->add('chart-extension', 'vendor/chart.js/dist/Chart.extension.js');
        
        try {
            $view = theme()->scopeWithLayout('index');
            return $view->render();
        } catch (\Throwable $th) {
            return theme()->of('dashboard::index')->render();
        }
    }
}
