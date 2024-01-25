<?php

namespace app\Core\Interfaces;

interface IRequest
{
    public function getRoute(): string;
    public function getParams(): array;
}
