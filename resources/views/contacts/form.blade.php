<body>
<h1>入力してください。</h1>
<form action="contacts/complete" method="post">
	@csrf
	 <p>{{$day}}月{{$month}}日
	@if ($errors->has('id'))
    <input type="hidden"  name="id"  value="{{ $id }}"></p>
    @endif
	<p>お名前<br><input type="text" >
    @if (defined("name"))
	<input type="text" name="name" value="{{ $name }}"></p>
    @endif
	<p>宿泊日数<br><input type="text">
    @if ($errors->has('staydays'))
	<input name="staydays"value="{{ $staydays }}"></p>
	 @endif
	<p>人数<br><input type="text">
	@if ($errors->has('guests'))
	<input name="guests"value="{{ $guests }}"></p>
	@endif
	<p>宿泊部屋数<br><input type="text">
	@if ($errors->has('room'))
	<input  name="room"value="{{ $room }}"></p>
	@endif
	<p><input type="submit" value="予約する"></p>
</form>
</body>


