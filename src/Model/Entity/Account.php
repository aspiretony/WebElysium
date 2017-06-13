<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Account Entity
 *
 * @property int $id
 * @property string $account
 * @property string $password
 * @property string $email
 * @property string $pin
 * @property int $cash
 * @property bool $logged_in
 * @property int $access_level
 * @property bool $active
 * @property string $first_name
 * @property string $last_name
 * @property string $location
 * @property \Cake\I18n\FrozenTime $date_created
 * @property \Cake\I18n\FrozenTime $date_last_login
 * @property string $creator_ip
 * @property string $last_ip
 * @property string $current_ip
 * @property bool $pin_attempt
 *
 * @property \App\Model\Entity\AccountBan[] $account_ban
 * @property \App\Model\Entity\AccountService[] $account_service
 */
class Account extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
