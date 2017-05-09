<?php namespace Limoncello\Validation\Converters;

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

use Limoncello\Validation\Contracts\MessageCodes;

/**
 * @package Limoncello\Validation
 */
class FloatConverter extends BaseConverter
{
    use SimpleConverterTrait;

    /**
     * @inheritdoc
     */
    protected function convert($input): bool
    {
        $result = is_numeric($input) === true || is_float($input) === true || is_int($input) === true;
        if ($result === true) {
            $this->setConverted((float)$input);
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    protected function getErrorCode(): int
    {
        return MessageCodes::IS_FLOAT;
    }
}
