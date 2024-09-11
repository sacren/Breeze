<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InitVueComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:vuecomponent {component}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Vue component';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('component');
        $path = resource_path("js/Components/{$name}.vue");

        if (File::exists($path)) {
            $this->error("Component {$name} already exists!");
            return;
        }

        File::put($path, $this->getStub());

        $this->info("Component {$name} created successfully.");
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
        <h1>{$this->argument('component')}</h1>
    </div>
</template>

<script>
    export default {
        name: '{$this->argument('component')}',
    };
</script>

EOT;
    }
}
