<?php

function session($user) {
	return [
		'user_id'	=> $user->user_id,
		'user_name'	=> $user->user_name,
		'logged_in'	=> TRUE
	];
}