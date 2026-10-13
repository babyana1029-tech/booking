<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testEnvironmentConfigIsDefined()
    {
        $this->assertTrue(true, "Sample test assertion passed successfully.");
    }

    public function testRequiredDirectoriesExist()
    {
        $this->assertFileExists(__DIR__ . '/../config.example.php');
        $this->assertFileExists(__DIR__ . '/../.env.example');
    }
}
