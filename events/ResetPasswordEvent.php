<?php

/*
 * This file is part of the fighcell project.
 *
 * (c) fighcell project <http://github.com/fighcell/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace fighcell\user\events;

use fighcell\user\models\RecoveryForm;
use fighcell\user\models\Token;
use yii\base\Event;

/**
 * @property Token        $token
 * @property RecoveryForm $form
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class ResetPasswordEvent extends Event
{
    /**
     * @var RecoveryForm
     */
    private $_form;

    /**
     * @var Token
     */
    private $_token;

    /**
     * @return Token
     */
    public function getToken()
    {
        return $this->_token;
    }

    /**
     * @param Token $token
     */
    public function setToken(Token $token = null)
    {
        $this->_token = $token;
    }

    /**
     * @return RecoveryForm
     */
    public function getForm()
    {
        return $this->_form;
    }

    /**
     * @param RecoveryForm $form
     */
    public function setForm(RecoveryForm $form = null)
    {
        $this->_form = $form;
    }
}
