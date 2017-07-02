<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author Ana Karina
 * @since 1.0.0
 */
class Utils
{
	public function checkUser($session)
    {
        if (empty($session['user'])
        {
        	return false;
        }
        return true;
    }
}