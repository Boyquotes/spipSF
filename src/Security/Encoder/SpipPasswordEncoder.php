<?php


namespace App\Security\Encoder;


use Symfony\Component\Security\Core\Encoder\BasePasswordEncoder;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;


class SpipPasswordEncoder extends BasePasswordEncoder implements PasswordEncoderInterface
{

	private $algorithm;
	private $encodeHashAsBase64;
	private $iterations;

/**
 * @param string $algorithm          The digest algorithm to use
 * @param bool   $encodeHashAsBase64 Whether to base64 encode the password hash
 * @param int    $iterations         The number of iterations to use to stretch the password hash
 */
public function __construct(string $algorithm = 'sha256', bool $encodeHashAsBase64 = false, int $iterations = 0)
{
    $this->algorithm = $algorithm;
    $this->encodeHashAsBase64 = $encodeHashAsBase64;
    $this->iterations = $iterations;
}

/**
 * {@inheritdoc}
 */
public function encodePassword($raw, $salt)
{
    if ($this->isPasswordTooLong($raw)) {
        throw new BadCredentialsException('Invalid password.');
    }

    if (!in_array($this->algorithm, hash_algos(), true)) {
        throw new \LogicException(sprintf('The algorithm "%s" is not supported.', $this->algorithm));
    }

    //$salted = $this->mergePasswordAndSalt($raw, $salt);
    $salted = $salt.$raw;
    //~ $digest = hash($this->algorithm, $salted, true);

    // "stretch" hash
    //~ for ($i = 1; $i < $this->iterations; ++$i) {
        //~ $digest = hash($this->algorithm, $digest.$salted, true);
    //~ }
    
    //~ $alea_actuel = '173261805df70134658a55.33979842';
 // jateKL34hbv150
    //~ $completePasswordSpip = $salted . $raw;
    $retour_encode = hash('sha256', $salted);
    
    //~ dump($raw);
    //~ dump($retour_encode);
    //$hash = 'cb4970303c0ad2e7e703b87258a1540e41ee8b16babd0a1dc9f3d644e5688b87';
    
    return $retour_encode;
    //~ return $this->encodeHashAsBase64 ? base64_encode($digest) : bin2hex($digest);
}

/**
 * {@inheritdoc}
 */
public function isPasswordValid($encoded, $raw, $salt)
{
    return !$this->isPasswordTooLong($raw) && $this->comparePasswords($encoded, $this->encodePassword($raw, $salt));
}



}
