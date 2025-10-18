<?php

namespace Areypurnawan\WhatsappGateway\Tests;

use WhatsappGateway;

class WhatsappGatewayTest extends AbstractTestCase
{

  /**
   * SendMessage Test
   *
   * @return void
   */
  public function testSendMessageResponse()
  {
      $response = WhatsappGateway::sendMessage("620000000", "Test Message")->response();
      $this->assertNotEmpty($response,"Response is empty.");
  }
}
