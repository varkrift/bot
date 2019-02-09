<?php
require_once('vk.php');

$vk = new VK();

if ($vk->data['type'] == 'message_new')
{
    $peer_id = $vk->data['object']['peer_id'];  // user ID
    $text = $vk->data['object']['text'];        // incoming message
    
    $vk->send($peer_id, 'Здравствуйте! Я бот snowbonch 2019. Если хочешь пройти регистрацию нажми на кнопку или напиши "начать"');

    if ($text == 'Start' or $text == 'Начать' or  $text == 'начать' or $text == 'start' or $text == 'Регистрация' or $text == 'регистрация') // if the text is Hi, it will send a Hello message.
    {
        $vk->send($peer_id, 'Давай познакомимся поближе. Для начала укажи Ф.И.О (например: Иванов Иван Иванович) ');
        
    }
    else
    {
        $vk->send($peer_id, 'Я не понял тебя'); // error
    }
}
