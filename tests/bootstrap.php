<?php

$app = require __DIR__ . '/../vendor/autoload.php';
$app->add('Resume', __DIR__ . '/../src');

use PHPUnit\Framework\TestCase;
use Resume\Cli\Resume;

class ResumeTest extends TestCase
{
    public $console;

    public function setUp()
    {
        $templatePath        = realpath(__DIR__ . '/../templates/');
        $consoleTemplatePath = realpath(__DIR__ . '/../src/Resume/Templates');
        $project             = json_decode(file_get_contents(__DIR__ . '/../composer.json'));
        $project->version    = 0;

        $this->console = new Resume();
        $this->console->initialize($templatePath, $consoleTemplatePath, $project);
    }
}

/* End file bootstrap.php */
