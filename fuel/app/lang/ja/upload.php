<?php

/**
 * バリデーション時エラーメッセージ定義
 */

return array(

	'upload_error_'.\Upload::UPLOAD_ERR_OK          => ':label エラーはなく、ファイルアップロードは成功しています。 ',
	'upload_error_'.\Upload::UPLOAD_ERR_INI_SIZE    => ':label アップロードされたファイルは、php.ini の upload_max_filesize ディレクティブの値を超えています。 ',
	'upload_error_'.\Upload::UPLOAD_ERR_FORM_SIZE   => ':label アップロードされたファイルは、HTML フォームで指定された MAX_FILE_SIZE を超えています。 ',
	'upload_error_'.\Upload::UPLOAD_ERR_PARTIAL     => ':label アップロードされたファイルは一部のみしかアップロードされていません。 ',
	'upload_error_'.\Upload::UPLOAD_ERR_NO_FILE     => ':label ファイルはアップロードされませんでした。 ',
	'upload_error_'.\Upload::UPLOAD_ERR_NO_TMP_DIR  => ':label テンポラリフォルダがありません。',
	'upload_error_'.\Upload::UPLOAD_ERR_CANT_WRITE  => ':label ディスクへの書き込みに失敗しました。',
	'upload_error_'.\Upload::UPLOAD_ERR_EXTENSION   => ':label PHP の拡張モジュールがファイルのアップロードを中止しました。',
	 
	'upload_error_'.\Upload::UPLOAD_ERR_MAX_SIZE                => ':label は、:param:1 KB以下のファイルを指定して下さい',
	'upload_error_'.\Upload::UPLOAD_ERR_EXT_BLACKLISTED         => ':label UPLOAD_ERR_EXT_BLACKLISTED',
	'upload_error_'.\Upload::UPLOAD_ERR_EXT_NOT_WHITELISTED     => ':label UPLOAD_ERR_EXT_NOT_WHITELISTED',
	'upload_error_'.\Upload::UPLOAD_ERR_TYPE_BLACKLISTED        => ':label UPLOAD_ERR_TYPE_BLACKLISTED',
	'upload_error_'.\Upload::UPLOAD_ERR_TYPE_NOT_WHITELISTED    => ':label UPLOAD_ERR_TYPE_NOT_WHITELISTED',
	'upload_error_'.\Upload::UPLOAD_ERR_MIME_BLACKLISTED        => ':label UPLOAD_ERR_MIME_BLACKLISTED',
	'upload_error_'.\Upload::UPLOAD_ERR_MIME_NOT_WHITELISTED    => ':label UPLOAD_ERR_MIME_NOT_WHITELISTED',
	'upload_error_'.\Upload::UPLOAD_ERR_MAX_FILENAME_LENGTH     => ':label UPLOAD_ERR_MAX_FILENAME_LENGTH',
	
	'upload_error_'.\Upload::UPLOAD_ERR_MOVE_FAILED             => ':label UPLOAD_ERR_MOVE_FAILED',
	'upload_error_'.\Upload::UPLOAD_ERR_DUPLICATE_FILE          => ':label UPLOAD_ERR_DUPLICATE_FILE',
	'upload_error_'.\Upload::UPLOAD_ERR_MKDIR_FAILED            => ':label UPLOAD_ERR_MKDIR_FAILED',
	'upload_error_'.\Upload::UPLOAD_ERR_FTP_FAILED              => ':label UPLOAD_ERR_FTP_FAILED',
	
	
);

