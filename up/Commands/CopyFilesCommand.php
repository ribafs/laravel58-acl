<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CopyFilesCommand extends Command
{
    protected $signature = 'copy:files';

    protected $description = 'Copy files from package laravel58-acl to this application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Files to overwrite here. Only copy in provider
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/web.php'), base_path('routes/web.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/api.php'), base_path('routes/api.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/HomeController.php'), app_path('Http/Controllers/HomeController.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/User.php'), base_path('app/User.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/welcome.blade.php'), base_path('resources/views/welcome.blade.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/home.blade.php'), base_path('resources/views/home.blade.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/app.blade.php'), base_path('resources/views/layouts/app.blade.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/app.php'), base_path('config/app.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/Kernel.php'), app_path('Http/Kernel.php'));

        File::copy(base_path('vendor/ribafs/laravel58-acl/up/DatabaseSeeder.php'), database_path('seeds/DatabaseSeeder.php'));

        $this->info(PHP_EOL);
        $this->info('Arquivos copiados com sucesso.'.PHP_EOL);
    }
}
