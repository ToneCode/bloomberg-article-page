<?php

namespace Edu\Cnm\awilliams144\bloomberg;

require_once("autoload.php");

/**
 * Small Cross Section of a Bloomberg Articles
 *
 * These Articles can be considered a small example of what services like Bloomberg.com provide.
 * @author Anthony Williams <awilliams144@cnm.edu
 * @version 2.0.0
 */

class Profile {

	private $profileId;
	/**
	 * actual textual content of this article
	 * @var string $profileContent
	 */

	/**
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
}




