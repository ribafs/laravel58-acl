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
        $route = base_path('routes/web.php');
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/web.php'), $route);

        $user = base_path('app/User.php');
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/User.php'), $user);

        $wel = base_path('resources/views/welcome.blade.php');
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/welcome.blade.php'), $wel);

        $home = base_path('resources/views/home.blade.php');
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/home.blade.php'), $wel);

        $appb = base_path('resources/views/layouts/app.blade.php');
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/app.blade.php'), $appb);

        $app = base_path('config/app.php');
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/app.php'), $app);

        $kernel = app_path('Http/Kernel.php');
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/Kernel.php'), $kernel);

        $seeder = database_path('seeds/DatabaseSeeder.php');
        File::copy(base_path('vendor/ribafs/laravel58-acl/up/DatabaseSeeder.php'), $seeder);

        $this->info(PHP_EOL);
        $this->info('Arquivos copiados com sucesso.'.PHP_EOL);
    }
}
