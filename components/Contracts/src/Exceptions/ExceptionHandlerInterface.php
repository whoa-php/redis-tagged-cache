<?php namespace Limoncello\Contracts\Exceptions;

/**
 * Copyright 2015-2017 info@neomerx.com
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

use Exception;
use Limoncello\Contracts\Core\SapiInterface;
use Psr\Container\ContainerInterface;
use Throwable;

/**
 * @package Limoncello\Core
 */
interface ExceptionHandlerInterface
{
    /**
     * @param Exception          $exception
     * @param SapiInterface      $sapi
     * @param ContainerInterface $container
     *
     * @return void
     */
    public function handleException(Exception $exception, SapiInterface $sapi, ContainerInterface $container);

    /**
     * @param Throwable          $throwable
     * @param SapiInterface      $sapi
     * @param ContainerInterface $container
     *
     * @return void
     */
    public function handleThrowable(Throwable $throwable, SapiInterface $sapi, ContainerInterface $container);

    /**
     * @param array              $error
     * @param ContainerInterface $container
     *
     * @return void
     */
    public function handleFatal(array $error, ContainerInterface $container);
}