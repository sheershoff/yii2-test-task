<?php
/**
 * Created by PhpStorm.
 * User: sheershoff
 * Date: 12/25/17
 * Time: 11:25 PM
 */

use app\common\ArrayDivider;

class ArrayDividerTest extends \Codeception\Test\Unit
{

    public function testProcess()
    {
        $fixtures = include(__DIR__."/fixtures/ArrayDividerText_fixtures.php");
        foreach ($fixtures as $key => $fixture)
        {
            $result = ArrayDivider::process($fixture['n'], $fixture['a']);
            $array_string = print_r($fixture['a'], true);
            $this->assertEquals(
                $result,
                $fixture['result'],
                "Failed to asserting that ArrayDivider::process({$fixture['n']}, {$array_string}) => {$result} matches expected {$fixture['result']}."
                );
        }
    }
}
