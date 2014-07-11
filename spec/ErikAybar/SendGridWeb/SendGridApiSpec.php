<?php

namespace spec\ErikAybar\SendGridWeb;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use ErikAybar\SendGridWeb\Http\HttpClientInterface;

class SendGridApiSpec extends ObjectBehavior
{

    public function let($http)
    {
        $this->beConstructedWith($http);
    }

    /**
     * @todo Prophecy Object not working 100% ... should be requesting to "Create file for you...."
     */
    public function its_http_client_can_make_web_requests($http)
    {
        $http->get("http://foo.com")->shouldBeCalled()->willReturn(200);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('ErikAybar\SendGridWeb\SendGridApi');
    }

    public function it_should_have_a_base_url()
    {
        $this->getBaseUrl()->shouldBeString();
    }
}
