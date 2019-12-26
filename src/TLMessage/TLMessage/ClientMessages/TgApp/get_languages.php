<?php

namespace TLMessage\TLMessage\ClientMessages\TgApp;

use TLMessage\TLMessage\Packer;
use TLMessage\TLMessage\TLClientMessage;

/**
 * @see https://core.telegram.org/method/langpack.getLanguages
 */
class get_languages implements TLClientMessage
{
    const CONSTRUCTOR = -2146445955; // 0x800FD57D

    /**
     * @return string
     */
    public function getName()
    {
        return 'get_languages';
    }

    /**
     * @return string
     */
    public function toBinary()
    {
        return Packer::packConstructor(self::CONSTRUCTOR);
    }
}
