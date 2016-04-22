<?php

namespace Edu\Cnm\awilliams144\bloomberg;



/**
 * Small Cross Section of a Bloomberg Articles
 *
 * These Articles can be considered a small example of what services like Bloomberg.com provide.
 * @author Anthony Williams <awilliams144@cnm.edu
 * @version 2.0.0
 **/

class Profile implements \JsonSerializable  {
				use ValidateProfileId;
	private $profileId;
	/**
	 * actual textual content of this article
	 * @var string $profileContent
	 */
	/**
	 * constructor for this Profile
	 * @param int $newProfileId id of the Profile wrote this article
	 **/
public function __construct(int $newProfileId = null) {
    try {
		 $newProfileId = $this->profileId($newProfileId);
	   }	catch(\InvalidArgumentException $invalidArgument) {
		 // rethrow the exception to the caller
		 throw(new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
	 }	catch(\RangeException $range) {
		 //rethrow the exception to the caller
		 throw(new \RangeException($range->getMessage(), 0, $range));
	 }	catch(\TypeError $typeError) {
		 //rethrow the exception to the caller
		 throw(new \TypeError($typeError->getMessage(), 0, $typeError));
	 }	catch(\Exception $exception){
		 //rethrow the exception to the caller
		 throw(new \Exception($exception->getMessage(), 0, $exception));
	 }
}
	/**
	 * inserts this Profile into mySQL
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws  \TypeError if $pdo is not a PDO connection object
	 **/
	public function insert(\PDO $pdo){
		// enforce the profileId is null (i.e., don't insert a profile that already exist)
			if($this->profileId !== null){
				throw(new \ PDOException("not a new profile"));
				}
			}
	}
	/**
	 *
	 *
	 * accessor method for profile id
	 * @return int value of profile id
	 **/

	public function getProfileId() {
		return($this->profileId);
	}



	/**
	 * Mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws \RangeException if $newProfileId is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 **/
	public function setProfileId(int $newProfileId = null) {
		// verify the profile id is positive
		if($newProfileId <= 0) {
					throw(new \RangeException("profile id is not positive"));
		}
		// convert and store this profile id
		$this->profileId = $newProfileId;
	}
	/**
	 * formats the state variables for JSON serialization
	 *
	 * @return array resulting state variables to serialize
	 **/
	public function jsonSerialize() {
		// TODO: Implement jsonSerialize() method.
		$fields = get_object_vars($this);
		$fields["profileId"] = intval($this->profileId->format("U")) * 1000;
		return($fields);

	}
}




