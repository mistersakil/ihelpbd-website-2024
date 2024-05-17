<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Services\FileUploadService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderModelSeeder extends Seeder
{
    private FileUploadService $fileUploadService;

    public function __construct()
    {
        $this->fileUploadService = new FileUploadService();
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $total_records = 10;
        ## Starting message
        $this->command->warn(PHP_EOL . 'Start: Creating Sliders');
        ## Truncate existing records
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Slider::truncate();
        ## Starting progressbar
        $this->command->getOutput()->progressStart($total_records);


        for ($i = 0; $i < $total_records; $i++) {
            $input = [
                'user_id' => 1,
                'slider_title' => fake()->word(),
                'slider_body' => fake()->words(5, true),
                'slider_link' => fake()->url(),
                'slider_link_text' => fake()->word(),
                'slider_image' =>  $this->fileUploadService->createNewJpgImage(width: 865, height: 675),
                'is_active'    => (string) rand(0, 1),
            ];

            Slider::create($input);
            $this->command->getOutput()->progressAdvance();
        }

        ## Finished progressbar and success message
        $this->command->getOutput()->progressFinish();
        $this->command->info('End: Creating Sliders');
    }
}
