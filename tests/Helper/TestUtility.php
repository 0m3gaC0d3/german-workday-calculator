<?php
/**
 * Copyright 2018. Wolf-Peter Utz.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace OmegaCode\GermanWorkdayCalculator\Tests\Helper;

/**
 * Class TestUtility.
 */
class TestUtility
{
    /**
     * Clears the temp folder
     */
    public static function clearTempFolder()
    {
        $tempFolderPath = realpath(__DIR__.'/../../tmp/');
        foreach (array_diff(scandir($tempFolderPath), ['.', '..']) as $fileName)
        {
            $extension = pathinfo($tempFolderPath.'/'.$fileName, PATHINFO_EXTENSION);
            if($extension != 'json') {
                continue;
            }
            unlink($tempFolderPath.'/'.$fileName);
        }
    }
}