<?php

namespace Edu\Cnm\awilliams144\bloomberg;

/**
 * Small Cross Section of a Bloomberg Articles
 *
 * These Articles can be considered a small example of what services like Bloomberg.com
 *
 */

class Profile {

	private $profileId;

	/**
	 * accessor method for profile id
	 * @return int value of profile id
	 **/

	public function getProfileId() {
		return ($this->profileId);
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
	}
}




