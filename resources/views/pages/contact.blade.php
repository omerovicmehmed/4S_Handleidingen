@extends('layouts.default')
 
@section('content')
 
<div class="contact">
  <form action="action_page.php">
 
    <label for="fname">{{ __('Name') }}</label>
    <input type="text" id="fname" name="firstname" placeholder="{{ __('Vul hier uw voornaam in.') }}">
 
    <label for="lname">{{ __('Lastname') }}</label>
    <input type="text" id="lname" name="lastname" placeholder="{{ __('Vul hier uw achternaam in.') }}">
 
    <label for="subject">{{ __('Subject') }}</label>
    <textarea id="subject" name="subject" placeholder="{{ __('Typ hier uw bericht.') }}" style="height:200px"></textarea>
 
    <input type="submit" value="{{ __('Verzend') }}">
 
  </form>
</div>
 
@endsection