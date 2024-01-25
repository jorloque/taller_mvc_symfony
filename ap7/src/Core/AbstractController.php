<?php

namespace app\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


abstract class AbstractController
{
    private $twigEnvironment;
    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__ . "/../../" . $_ENV["TEMPLATESFOLDER"]);
        $this->twigEnvironment = new Environment($loader);
    }
    public function render(string $template, array $params): void
    {
        echo $this->twigEnvironment->render($template, $params);
    }
}
