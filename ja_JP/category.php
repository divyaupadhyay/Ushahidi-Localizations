<?php
	$lang = array(
	'category_color' => array(
		'length' => 'カラーは6文字でなければいません。',
		'required' => 'カラーは入力必須です。',
	),
	'category_description' => array(
		'required' => '説明文は入力必須です。',
	),
	'category_image' => array(
		'size' => '画像アップロードサイズは 50KBに制限されている事を確認してください。',
		'type' => '画像以外が選択されています。.JPG, .PNG, .GIF形式のみアップロード可能です。',
		'valid' => '画像以外のファイルが選択されています。',
	),
	'category_title' => array(
		'length' => 'タイトルは最低3文字、最高80文字以下にしてください。',
		'required' => 'タイトルは入力必須です。',
	),
	'parent_id' => array(
		'exists' => '親カテゴリがありません。',
		'numeric' => '親カテゴリは数字でなければいけません。',
		'required' => '親カテゴリは入力必須です。',
		'same' => 'カテゴリと親カテゴリは同じ物には出来ません。',
	));
?>
