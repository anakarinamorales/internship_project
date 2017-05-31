<?php

namespace Jasny\Auth;

/**
 * Entity used for authentication
 */
interface User
{
    /**
     * Get user id
     * 
     * @return int|string
     */
    public function getId();
    
    /**
     * Get user's username
     * 
     * @return string
     */
    public function getUsername();
    
    /**
     * Get user's hashed password
     * 
     * @return string
     */
    public function getHashedPassword();
    
    
    /**
     * Event called on login.
     * 
     * @return boolean  false cancels the login
     */
    public function onLogin();
    
    /**
     * Event called on logout.
     * 
     * @return void
     */
    public function onLogout();
}
