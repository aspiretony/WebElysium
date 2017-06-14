<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountBan Entity
 *
 * @property int $id
 * @property int $account_id
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property string $reason
 * @property int $expired
 *
 * @property \App\Model\Entity\Account $account
 */
class AccountBan extends Entity
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
}
