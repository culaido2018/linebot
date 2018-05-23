<?php
namespace App\Services;

use LINE\LINEBot;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;

class LineBotService
{
    /** @var LINEBot */
    private $lineBot;
    private $lineUserId;

    public function __construct($lineUserId)
    {
        $this->lineUserId = $lineUserId;
        $this->lineBot = app(LINEBot::class);
    }

    public function fake()
    {
    }

    /**
     * @param TemplateMessageBuilder|string $content
     * @return Response
     */
    public function pushMessage($content)
    {
echo '29';
        if ( is_string($content) ) {
            $content = new TextMessageBuilder($content);
        }
dd($this->lineBot->pushMessage($this->lineUserId, $content));
        return $this->lineBot->pushMessage($this->lineUserId, $content);
    }
    
    
    public function replyMessage($content)
    {
        if ( is_string($content) ) {
            $content = new TextMessageBuilder($content);
        }
        return $this->lineBot->replyMessage($this->lineUserId, $content);
    }
}
