<?php
namespace FizzBuzz\Tests;

use FizzBuzz\Processor;

class ProcessorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Processor
     */
    protected $processor;

    protected function setUp()
    {
        $this->processor = new Processor;
    }

    public function testFizzBuzzProcessorExists()
    {
        $this->assertTrue(class_exists(\FizzBuzz\Processor::class));
    }

    public function testFizzBuzzProcessorFailsWithInvalidInputFrom()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->processor->process(0, 100);
    }

    public function testFizzBuzzProcessorFailsWithInvalidInputTo()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->processor->process(2, 1);
    }

    public function testFizzBuzzProcessorFailsWithFromAndToBeingEqual()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->processor->process(1, 1);
    }

    public function testFizzBuzzProcessorOutput()
    {
        $this->expectOutputString('1
2
3Fizz
4
5Buzz
6Fizz
7
8
9Fizz
10Buzz
11
12Fizz
13
14
15FizzBuzz
16
17
18Fizz
19
20Buzz
21Fizz
22
23
24Fizz
25Buzz
26
27Fizz
28
29
30FizzBuzz
31
32
33Fizz
34
35Buzz
36Fizz
37
38
39Fizz
40Buzz
41
42Fizz
43
44
45FizzBuzz
46
47
48Fizz
49
50Buzz
51Fizz
52
53
54Fizz
55Buzz
56
57Fizz
58
59
60FizzBuzz
61
62
63Fizz
64
65Buzz
66Fizz
67
68
69Fizz
70Buzz
71
72Fizz
73
74
75FizzBuzz
76
77
78Fizz
79
80Buzz
81Fizz
82
83
84Fizz
85Buzz
86
87Fizz
88
89
90FizzBuzz
91
92
93Fizz
94
95Buzz
96Fizz
97
98
99Fizz
100Buzz
');
        $this->processor->process(1, 100);
    }
}
