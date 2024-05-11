<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateCustomClassCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:class';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new custom class file inside app directory';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ## Ask for the directory name
        $directory = $this->ask('Enter the directory name (default: CustomClasses):', 'CustomClasses');

        ## Ask for the class name
        $name = $this->ask('Enter the class name:');

        $directory = ucfirst($directory);
        $name = ucfirst($name);

        $classContent = "<?php\n\nnamespace App\\$directory;\n\nclass $name\n{\n    // Add your class logic here\n}\n";

        $directoryPath = app_path($directory);
        $filePath = $directoryPath . '/' . $name . '.php';

        if (!File::exists($directoryPath)) {
            File::makeDirectory($directoryPath, 0755, true, true);
        }

        if (File::exists($filePath)) {
            $this->error("Class file '$name.php' already exists.");
            return;
        }

        file_put_contents($filePath, $classContent);

        $this->info("Class file '$name.php' created successfully in the '$directory' directory.");
    }
}
