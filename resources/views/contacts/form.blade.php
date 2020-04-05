<body>
<h1>入力してください。</h1>

	
	<form action="{{ action('ContactController@complete') }}" method="post">
	 @csrf
	<input type="text" id="datepicker" placeholder="日付を選択してください" > 
	 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <script src="datepicker.js"></script>
	 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>  
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
     <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">  
    <script>  
  $("#datepicker").datepicker();  
   </script>
<script src="https://rawgit.com/jquery/jquery-ui/master/ui/i18n/datepicker-ja.js"></script>
	<p>お名前<br><input type="text" >
    @if (defined("name"))
	<input type="text" name="name" value="{{ $name }}"></p>
    @endif
	<p>宿泊日数<br><input type="text">
    @if (defined("staydays"))
	<input name="staydays"value="{{ $staydays }}"></p>
	 @endif
	<p>人数<br><input type="text">
	@if (defined("guests"))
	<input name="guests"value="{{ $guests }}"></p>
	@endif
	<p>宿泊部屋数<br><input type="text">
    @if (defined("room"))
	<input  name="room"value="{{ $room }}"></p>
	@endif
	<p><input type="submit" value="予約する"></p>
</form>
</body>


