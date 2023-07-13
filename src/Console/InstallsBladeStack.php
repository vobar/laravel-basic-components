<?php

namespace Vobar\LaravelBasicComponents\Console;

use Illuminate\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;

trait InstallsBladeStack
{
    /**
     * Install the Blade Breeze stack.
     *
     * @return int|null
     */
    protected function installBladeStack()
    {
        // Controllers...
        (new Filesystem)->ensureDirectoryExists(app_path('Http/Controllers'));
        (new Filesystem)->copyDirectory(
            __DIR__ . '/../../stubs/default/app/Http/Controllers',
            app_path('Http/Controllers')
        );

        // Requests...
        (new Filesystem)->ensureDirectoryExists(app_path('Http/Requests'));
        (new Filesystem)->copyDirectory(__DIR__ . '/../../stubs/default/app/Http/Requests', app_path('Http/Requests'));

        // Views...
        (new Filesystem)->ensureDirectoryExists(resource_path('views'));
        (new Filesystem)->copyDirectory(
            __DIR__ . '/../../stubs/default/resources/views',
            resource_path('views')
        );

        //TODO darkmode
//        if (! $this->option('dark')) {
//            $this->removeDarkClasses((new Finder)
//                ->in(resource_path('views'))
//                ->name('*.blade.php')
//                ->notName('welcome.blade.php')
//            );
//        }

        // Components...
        (new Filesystem)->ensureDirectoryExists(app_path('View/Components'));
        (new Filesystem)->copyDirectory(
            __DIR__ . '/../../stubs/default/app/View/Components',
            app_path('View/Components')
        );

        //TODO Tests...
//        if (! $this->installTests()) {
//            return 1;
//        }

        // Routes...
//        copy(__DIR__ . '/../../stubs/default/routes/web.php', base_path('routes/web.php'));
//        copy(__DIR__ . '/../../stubs/default/routes/auth.php', base_path('routes/auth.php'));


        $this->replaceInFile('use Illuminate\Support\Facades\Route;',
            "use Illuminate\Support\Facades\Route;\n" .
            "use app\Http\Controllers\NewsController;",
            base_path('routes/web.php')
        );

        $this->addInFile(
            "Route::get('news', [NewsController::class, 'index'])->name('news.index');",
            base_path('routes/web.php')
        );
        $this->addInFile(
            "Route::post('news/json', [NewsController::class, 'getIndexJsonPage'])->name('news.index.json.page');",
            base_path('routes/web.php')
        );
        $this->addInFile(
            "Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');",
            base_path('routes/web.php')
        );

        $this->replaceInFile('use Illuminate\Support\Facades\Route;',
            "use Illuminate\Support\Facades\Route;\n" .
            "use app\Http\Controllers\ContactsController;",
            base_path('routes/web.php')
        );

        $this->addInFile(
            "Route::get('contacts', [ContactsController::class, 'index'])->name('contacts.index');",
            base_path('routes/web.php')
        );

        $this->line('');
        $this->components->info('Basic components installed successfully.');

        return 1;
    }
}
