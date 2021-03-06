<?php

namespace App\Models;

class UserTitle extends Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $uid;

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $title_id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $created_at;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $updated_at;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("phalcon");
    }


    public function beforeValidationOnCreate()
    {
        $res = $this->findFirst([
            'conditions' => 'uid=?0 AND title_id=?1',
            'bind' => [
                $this->uid,
                $this->title_id
            ],
        ]);
        if ($res) {
            $message = new \Phalcon\Mvc\Model\Message(
                "Sorry, The relation is existed",
                "type",
                "MyType"
            );

            $this->appendMessage($message);
            return false;
        }
        return true;
    }


    public function beforeCreate()
    {
        // Set the creation date
        $this->created_at = date("Y-m-d H:i:s");
        $this->updated_at = date("Y-m-d H:i:s");
    }


    public function beforeUpdate()
    {
        // Set the modification date
        $this->updated_at = date("Y-m-d H:i:s");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserTitle[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return UserTitle
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user_title';
    }

}
