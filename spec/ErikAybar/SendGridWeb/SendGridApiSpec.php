<?php

namespace spec\ErikAybar\SendGridWeb;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SendGridApiSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('ErikAybar\SendGridWeb\SendGridApi');
    }

    function it_should_have_a_base_url()
    {
        $this->getBaseUrl()->shouldBeString();
    }
}
