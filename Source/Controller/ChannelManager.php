<?php

namespace App\Site\Controller;

use App\Site\Model\Channel;
use App\Site\Model\Subscription;
use App\Site\Repository\ChannelDetailedRepository;
use App\Site\Repository\ChannelRepository;
use App\Site\Repository\SubscriptionRepository;
use App\Site\Repository\VideoDetailedRepository;

class ChannelManager
{
    public static function createChannel(string $name, ?string $description, int $email, string $password) : bool {
        return ChannelRepository::insert(new Channel(null, $name, $description, $email, $password));
    }

    public static function updateChannel(int $id, string $name, ?string $description) : bool {
        $channel = ChannelRepository::select($id);
        if (!$channel) return false;
        return ChannelRepository::update($channel->setName($name)->setDescription($description));
    }

    public static function deleteChannel(int $id) : bool {
        return ChannelRepository::delete($id);
    }

    public static function getChannel(int $id) : ?Channel {
        return ChannelDetailedRepository::select($id);
    }

    public static function getChannels() : array {
        return ChannelRepository::selectAll();
    }

    public static function search(string $name) : array {
        return ChannelRepository::search(['name'=>$name]);
    }

    public static function getChannelVideos(int $id) : array {
        return VideoDetailedRepository::selectAll(['C.id'=>$id]);
    }

    public static function searchChannelVideos(int $id, string $title) : array {
        return VideoDetailedRepository::search(['C.id'=>$id, 'title'=>$title]);
    }

    public static function subscribe(int $id) : bool {
        return SubscriptionRepository::insert(new Subscription(Controller::getChannelLogged()->getId(), $id));
    }

    public static function unsubscribe(int $id) : bool {
        return SubscriptionRepository::deleteElement(new Subscription(Controller::getChannelLogged()->getId(), $id));
    }
}