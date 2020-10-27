<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "admin".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $password
 * @property string|null $email
 * @property string|null $authKey
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'email', 'alamat'], 'string', 'max' => 255],
            [['username', 'password'], 'required'],
            [['id_user_role'], 'integer'],
            [['auth_key'], 'string', 'max' => 50],
            [['no_hp'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'authKey' => 'Auth Key',
            'alamat' => 'Alamat',
            'no_hp' => 'Nomor Handphone',
            'id_user_role' => 'User Role',
        ];
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function getId()
    {
        return $this->id;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new yii\base\NotSupportedException();
    }
    
    public static function findByUsername($username)
    {
        return self::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function getRole()
    {
        if ($this->id_user_role === UserRole::ADMIN) {
            return 'Admin';
        }

        if ($this->id_user_role === UserRole::USER) {
            return 'User';
        }
    }

    public static function isAdmin()
    {
        if (Yii::$app->user->identity->id_user_role == UserRole::ADMIN) {
            return true;
        } else {
            return false;
        }
    } 

    public static function isUser()
    {
        if (Yii::$app->user->identity->id_user_role == UserRole::USER) {
            return true;
        } else {
            return false;
        }
    } 
}

// ini users lama
// namespace app\models;

// class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
// {
//     public $id;
//     public $username;
//     public $password;
//     public $authKey;
//     public $accessToken;

//     private static $users = [
//         '100' => [
//             'id' => '100',
//             'username' => 'admin',
//             'password' => 'admin',
//             'authKey' => 'test100key',
//             'accessToken' => '100-token',
//         ],
//         '101' => [
//             'id' => '101',
//             'username' => 'demo',
//             'password' => 'demo',
//             'authKey' => 'test101key',
//             'accessToken' => '101-token',
//         ],
//     ];


//     /**
//      * {@inheritdoc}
//      */
//     public static function findIdentity($id)
//     {
//         return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
//     }

//     /**
//      * {@inheritdoc}
//      */
//     public static function findIdentityByAccessToken($token, $type = null)
//     {
//         foreach (self::$users as $user) {
//             if ($user['accessToken'] === $token) {
//                 return new static($user);
//             }
//         }

//         return null;
//     }

//     /**
//      * Finds user by username
//      *
//      * @param string $username
//      * @return static|null
//      */
//     public static function findByUsername($username)
//     {
//         foreach (self::$users as $user) {
//             if (strcasecmp($user['username'], $username) === 0) {
//                 return new static($user);
//             }
//         }

//         return null;
//     }

//     /**
//      * {@inheritdoc}
//      */
//     public function getId()
//     {
//         return $this->id;
//     }

//     /**
//      * {@inheritdoc}
//      */
//     public function getAuthKey()
//     {
//         return $this->authKey;
//     }

//     /**
//      * {@inheritdoc}
//      */
//     public function validateAuthKey($authKey)
//     {
//         return $this->authKey === $authKey;
//     }

//     /**
//      * Validates password
//      *
//      * @param string $password password to validate
//      * @return bool if password provided is valid for current user
//      */
//     public function validatePassword($password)
//     {
//         return $this->password === $password;
//     }
// }

