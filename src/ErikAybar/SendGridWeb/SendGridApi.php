<?php

namespace ErikAybar\SendGridWeb;

class SendGridApi
{

    protected $base_url = "https://api.sendgrid.com/api/";

    public function getBaseUrl()
    {
        return $this->base_url;
    }
}
