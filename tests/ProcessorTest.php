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
3fizz
4
5buzz
6fizz
7
8
9fizz
10buzz
11
12fizz
13
14
15fizzbuzz
16
17
18fizz
19
20buzz
21fizz
22
23
24fizz
25buzz
26
27fizz
28
29
30fizzbuzz
31
32
33fizz
34
35buzz
36fizz
37
38
39fizz
40buzz
41
42fizz
43
44
45fizzbuzz
46
47
48fizz
49
50buzz
51fizz
52
53
54fizz
55buzz
56
57fizz
58
59
60fizzbuzz
61
62
63fizz
64
65buzz
66fizz
67
68
69fizz
70buzz
71
72fizz
73
74
75fizzbuzz
76
77
78fizz
79
80buzz
81fizz
82
83
84fizz
85buzz
86
87fizz
88
89
90fizzbuzz
91
92
93fizz
94
95buzz
96fizz
97
98
99fizz
100buzz
');
        $this->processor->process(1, 100);
    }
}
