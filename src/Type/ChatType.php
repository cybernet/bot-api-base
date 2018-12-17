<?php
declare(strict_types=1);

namespace Greenplugin\TelegramBot\Type;

/**
 * Class ChatType
 * @see https://core.telegram.org/bots/api#chat
 */
class ChatType
{
    const TYPE_PRIVATE = 'private';
    const TYPE_GROUP = 'group';
    const TYPE_SUPERGROUP = 'supergroup';
    const TYPE_CHANNEL = 'channel';

    /**
     * Unique identifier for this chat. This number may be greater than 32 bits and some programming languages
     * may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits,
     * so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     * @var Integer
     */
    public $id;

    /**
     * Type of chat, can be either “private”, “group”, “supergroup” or “channel”.
     * @var String
     */
    public $type;

    /**
     * Optional. Title, for supergroups, channels and group chats username String Optional Username,
     * for private chats, supergroups and channels if available
     * @var String|null
     */
    public $title;

    /**
     * Optional. First name of the other party in a private chat.
     * @var String|null
     */
    public $firstName;

    /**
     * Optional. Last name of the other party in a private chat.
     * @var String|null
     */
    public $lastName;

    /**
     * Optional. True if a group has ‘All Members Are Admins’ enabled.
     * @var Boolean|null
     */
    public $allMembersAreAdministrators;
    /**
     * Optional. Chat photo. Returned only in getChat.
     * @var ChatPhotoType|null
     */
    public $photo;

    /**
     * Optional. Description, for supergroups and channel chats. Returned only in getChat.
     * @var String|null
     */
    public $description;
    /**
     * Optional. Chat invite link, for supergroups and channel chats. Returned only in getChat.
     * @var String|null
     */
    public $inviteLink;

    /**
     * Optional. Pinned message, for supergroups and channel chats. Returned only in getChat.
     * @var MessageType|null
     */
    public $pinnedMessage;

    /**
     * Optional. For supergroups, name of group sticker set. Returned only in getChat.
     * @var String|null
     */
    public $stickerSetName;

    /**
     * Optional. True, if the bot can change the group sticker set. Returned only in getChat.
     * @var Boolean|null
     */
    public $canSetStickerSet;

}