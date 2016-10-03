<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $guarded = [];

    public static function findByHash($hash)
	{
		$upload = Upload::where('hash', $hash)->firstOrFail();

		return $upload;
	}

	protected $dates = ['expires_at'];

	public static function findActiveByHash($hash)
	{
		$upload = Upload::findByHash($hash);
		
		if($upload->expires_at->inPast) {
			abort('upload has expired', 403);
		}

		return $upload;

		// if ($upload->expires_at->inPast()) {}
		// abort('upload is expired', 403);
		// $upload->expires_at->inPast();
	}
}