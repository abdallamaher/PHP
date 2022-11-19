<?php
declare(strict_types=1);

namespace Advent\_2017\src\Day1;

use phpDocumentor\Reflection\Types\Integer;

class Inverse
{

    protected string $input;

    public function __construct()
    {
    }

    public function setInput(string $input) : void
    {
        if($input == ""){
            throw new \InvalidArgumentException('Input can\'t be Empty');
        }
        $this->input = $input;
    }

    public function getSolution(): int
    {
        $sum = 0;
        $preChar = '';
        $input = $this->input . $this->input[0];
        foreach (str_split($input) as $currChar)
        {
            if($preChar === $currChar)
            {
                $sum += $currChar;
            }
            $preChar = $currChar;
        }
        echo $sum;
        return $sum;
    }
}