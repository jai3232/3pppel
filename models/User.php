<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;
    public $id_pengguna;
    public $id_pelajar;
    public $no_kp;
    public $katalaluan;
    public $nama;
    public $kod_peranan;
    public $kategori_agensi;
    public $nama_agensi;
    public $alamat1;
    public $alamat2;
    public $poskod;
    public $bandar;
    public $id_negeri;
    public $no_tel;
    public $no_fax;
    public $email;
    public $tarikh_daftar;
    public $tarikh_kemaskini;
    public $status;
    public $photo;

    // private static $users = [
    //     '100' => [
    //         'id' => '100',
    //         'username' => 'admin',
    //         'password' => 'admin',
    //         'authKey' => 'test100key',
    //         'accessToken' => '100-token',
    //     ],
    //     '101' => [
    //         'id' => '101',
    //         'username' => 'demo',
    //         'password' => 'demo',
    //         'authKey' => 'test101key',
    //         'accessToken' => '101-token',
    //     ],
    // ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        // return new static(Pengguna::find()->where(['id_pengguna' => $id])->asArray()->one());
        $user = Pengguna::findOne($id); return new static($user);
        return !isset($user) ? new static($user) : null;
        // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        // $user = Pengguna::findOne(['no_kp' => $username]);
        $user = Pengguna::find()->where(['no_kp' => $username])->one();
        if(isset($user))
            return new static($user);
        return null;

        // foreach (self::$users as $user) {
        //     if (strcasecmp($user['username'], $username) === 0) {
        //         return new static($user);
        //     }
        // }

        // return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id_pengguna;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->katalaluan === md5($password);
        // return $this->password === $password;
    }
}
