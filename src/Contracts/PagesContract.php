<?php

namespace Dbilovd\PHP_USSD\Contracts;

interface PagesContract
{
    /**
     * Returns a list of sub menus.
     *
     * @return array Child menus
     */
    public function menus();

    /**
     * Return response to be sent.
     *
     * @return string Response content
     */
    public function response();

    /**
     * Return the type of response to be sent.
     *
     * @return string Response content
     */
    public function responseType();

    /**
     * Return message to send back to client.
     *
     * @return string Response content
     */
    public function message();

    /**
     * Return an instance of the next child class depending on the user input.
     *
     * @param string $userResponse The user's response to being presented this page
     * @return PagesContract
     */
    public function next($userResponse);

    /**
     * Save the user response.
     *
     * @param string $userResponse The user's response to being presented this page
     * @param $sessionId
     * @return bool
     */
    public function save($userResponse, $sessionId);

    /**
     * Check if User Response is valid.
     *
     * @param string 	$userResponse Response provided by the user
     * @return bool 	Response content
     */
    public function validUserResponse($userResponse);
}
