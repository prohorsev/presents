<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Box
 *
 * @property int $id
 * @property int $gift_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Box newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Box newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Box query()
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereGiftId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Box whereUserId($value)
 */
	class Box extends \Eloquent {}
}

namespace App{
/**
 * App\Gift
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Gift newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gift newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gift query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gift whereUpdatedAt($value)
 */
	class Gift extends \Eloquent {}
}

namespace App{
/**
 * App\Room
 *
 * @property int $id
 * @property int $org_user_id
 * @property string $birthday_date
 * @property int $birthday_sum
 * @property string $birthday_person
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereBirthdayDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereBirthdayPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereBirthdaySum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereOrgUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Room whereUpdatedAt($value)
 */
	class Room extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $id_in_soc id в соцсети
 * @property string $type_auth Тип используемой авторизации
 * @property string $avatar Ссылка на аватар
 * @property string $vk_token Токен для api VK
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Room[] $rooms
 * @property-read int|null $rooms_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdInSoc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTypeAuth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereVkToken($value)
 */
	class User extends \Eloquent {}
}

