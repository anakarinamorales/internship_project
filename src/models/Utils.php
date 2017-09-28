<?php
// namespace PROJEst\models;

/**
 * @category Model
 *
 * @author ana.machado
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