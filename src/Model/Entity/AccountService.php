<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountService Entity
 *
 * @property int $account_id
 * @property int $service_id
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 * @property int $expired
 *
 * @property \App\Model\Entity\Account $account
 * @property \App\Model\Entity\Service $service
 */
class AccountService extends Entity
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
        'account_id' => false,
        'service_id' => false
    ];
}
