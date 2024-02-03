// app/Providers/ComposerServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\HomeController;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('menu', function ($view) {
            $homeController = new HomeController();
            $categories = Category::all();

            $view->with('treeView', $homeController->buildTreeView($categories, 0));
        });
    }

    public function register()
    {
        //
    }
}

