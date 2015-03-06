<?php

namespace Vhrb\GitlabApi;

interface Exception
{
}

class InvalidArgumentException extends \InvalidArgumentException implements Exception
{
}

class InvalidStateException extends \RuntimeException implements Exception
{
}