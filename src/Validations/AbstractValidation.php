<?php

declare(strict_types=1);

namespace SwooleTW\Hyperf\JWT\Validations;

use Carbon\Carbon;
use SwooleTW\Hyperf\JWT\Contracts\ValidationContract;

abstract class AbstractValidation implements ValidationContract
{
    public function __construct(
        protected array $config = []
    ) {}

    /**
     * @param  array  $payload
     * @return void
     */
    abstract public function validate(array $payload): void;

    protected function timestamp(int $timestamp): Carbon
    {
        return Carbon::createFromTimestamp($timestamp);
    }
}
