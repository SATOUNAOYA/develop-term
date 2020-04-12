@extends('layouts.app')

<div class="login">
	<h1>Login</h1>
    <form action="{{ action('ContactController@reservationform') }}"　method="post">
    	<input type="text" name="u" placeholder="名前" required="required" />
        <input type="password" name="p" placeholder="パスワード" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">ログイン</button>
    </form>
</div>