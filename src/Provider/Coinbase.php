<?php

namespace PierceTech\OAuth2\Client\Provider;

use \League\OAuth2\Client\Provider\AbstractProvider;
use \League\OAuth2\Client\Entity\User;
use \League\OAuth2\Client\Token\AccessToken;

class Coinbase extends AbstractProvider {

  public function urlAuthorize() {
    return "https://www.coinbase.com/oauth/authorize";
  }

  public function urlAccessToken() {
    return "https://www.coinbase.com/oauth/token";
  }

  public function urlUserDetails(AccessToken $token) {
    return "https://api.coinbase.com/v2/user";
  }

  public function userDetails($response, AccessToken $token) {
    return $response;
  }
}
