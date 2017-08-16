<?php
namespace FizzBuzz;


class Processor
{
    /**
     * This method takes two arguments $from and $to then creates a for loop within is the logic of whether to print:
     * - 'Fizz'
     * - 'Buzz'
     * - 'FizzBuzz'
     *
     * @param int $from
     * @param int $to
     * @throws \InvalidArgumentException
     */
    public function process(int $from, int $to)
    {
        if ($from < 1) {
            throw new \InvalidArgumentException('From must be greater than or equal to 1');
        }
        if ($to > 100) {
            throw new \InvalidArgumentException('To must be less than or equal to 100');
        }
        if ($to <= $from) {
            throw new \InvalidArgumentException('To must be greater than From');
        }
        for ($i = $from; $i <= $to; $i++) {
            // Print out the number
            print $i;
            if ($this->numberSatisfiesConstraint($i, 15)) {
                // If a number is divisible by 5 and 3 it can only be divisible by 15 with no remainder
                // therefore print `fizzbuzz`
                print 'fizzbuzz';
            } elseif ($this->numberSatisfiesConstraint($i, 3)) {
                // If a number is divisible by 3 with no remainder print `fizz`
                print 'fizz';
            } elseif ($this->numberSatisfiesConstraint($i, 5)) {
                // If a number is divisible by 5 with no remainder print `buzz`
                print 'buzz';
            }
            // Print out a new line
            print PHP_EOL;
        }
    }

    /**
     * Check that the passed number satisifes the given constraint and has no remainders
     *
     * @param int $number
     * @param int $constraint
     * @return bool
     */
    protected function numberSatisfiesConstraint(int $number, int $constraint)
    {
        return $number % $constraint == 0;
    }
}
