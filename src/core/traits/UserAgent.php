<?php

namespace DevNullIr\LaravelFaker\core\traits;

trait UserAgent
{
    protected $userAgents = ['firefox', 'chrome', 'Edge', 'opera', 'safari', 'msedge'];

    protected $windowsPlatformTokens = [
        'Windows NT 6.2', 'Windows NT 6.1', 'Windows NT 6.0', 'Windows NT 5.2', 'Windows NT 5.1',
        'Windows NT 5.01', 'Windows NT 5.0', 'Windows NT 4.0', 'Windows 98; Win 9x 4.90', 'Windows 98',
        'Windows 95', 'Windows CE', 'Windows NT 10.0; Win64; x64'
    ];

    /**
     * Possible processors on Linux
     */
    protected $linuxProcessor = ['i686', 'x86_64'];

    /**
     * Mac processors (it also added U;)
     */
    protected $macProcessor = ['Intel', 'PPC', 'U; Intel', 'U; PPC'];

    /**
     * Add as many languages as you like.
     */
    protected $lang = ['en-US', 'sl-SI', 'nl-NL', 'fa-IR'];

    public function userAgent(): string
    {
        return "Mozilla/5.0 (". $this->windowsPlatformTokens[$this->rand($this->windowsPlatformTokens)] .") " . $this->userAgents[$this->rand($this->userAgents)] . " " . $this->lang[$this->rand($this->lang)];
    }
}
