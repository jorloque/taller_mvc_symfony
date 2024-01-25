<?php

namespace app\Controller;

use app\Core\AbstractController;

class MainController extends AbstractController
{
  public function main()
  {
    $this->render("main.html.twig", []);
  }
}
