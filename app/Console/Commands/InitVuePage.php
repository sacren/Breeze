<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InitVuePage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:vue {page}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Vue page';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('page');
        $path = resource_path("js/Pages/{$name}.vue");

        if (File::exists($path)) {
            $this->error("Page {$name} already exists!");
            return;
        }

        File::put($path, $this->getStub());

        $this->info("Page {$name} created successfully.");
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return <<<EOT
<template>
    <div>
        <h1>{$this->argument('page')}</h1>
    </div>
</template>

<script>
export default {
    name: '{$this->argument('page')}',
};
</script>

EOT;
    }
}
