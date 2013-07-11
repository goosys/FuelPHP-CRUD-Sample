<?php

/**
 * バリデーション時エラーメッセージ定義
 */

return array(
	/* fuel */
	'required'         => '『:label』は必須です',
	'min_length'       => '『:label』は:param:1文字以上で入力してください',
	'max_length'       => '『:label』は:param:1文字以内で入力してください',
	'exact_length'     => '『:label』は:param:1文字で入力してください',
	'match_value'      => '『:label』は『:param:1』と一致していません',
	'match_pattern'    => '『:label』はパターン『:param:1』と一致しません',
	'match_field'      => '『:label』は『:param:1』と一致していません',
	'valid_email'      => '『:label』はメールアドレスが不正です',
	'valid_emails'     => '『:label』に不正なメールアドレスが含まれてます',
	'valid_url'        => '『:label』は不正なURLです',
	'valid_ip'         => '『:label』は不正なIPアドレスです',
	'numeric_min'      => '『:label』は:param:1以上で入力してください',
	'numeric_max'      => '『:label』は:param:1以内で入力してください',
	'valid_string'     => '『:label』は『:rule』で入力する必要があります',
	'checkbox_require' => '『:label』は:param:1つ以上選択する必要があります',
	
	'any_fields_required'=> '『:label』は必須です',
	'ng_word'          => '『:param:1』はNGワードに指定されています',
	
	'upload_error_UPLOAD_ERR_OK'          => ':label エラーはなく、ファイルアップロードは成功しています。 ',
	'upload_error_UPLOAD_ERR_PHP'         => ':label 予期せぬエラーによりアップロードに失敗しました。',
	'upload_error_UPLOAD_ERR_CONFIG'      => ':label 容量またはファイル形式が不正です。',
);

