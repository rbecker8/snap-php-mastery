<?php


class user {
	/**
	 * age for User;
	 * @var string $userAge
	 **/
	private $userAge;
	/**
	 * email for this Reviewer; this a unique index
	 * @var string $reviewerEmail
	 **/
	private $userEmail;
	/**
	 * phone number for this user
	 * @var string $userPhone
	 **/
	private $userPhone;

	/**
	 * accessor method for user age
	 *
	 * @return int value of use age
	 **/
	public function getUserAge(): int {
		return ($this->userAge);
	}

	/**
	 * accessor method for user email
	 *
	 * @return string value of user email
	 **/
	public function getUserEmail(): string {
		return $this->userEmail;
	}


	/**
	 * accessor method for user phone
	 *
	 * @return string value of phone or null
	 **/
	public function getUserPhone(): ?string {
		return ($this->userPhone);
	}
}

$user_data=array(28, 'johndoe@gmail.com', 5053350987);
var_dump($user_data);

