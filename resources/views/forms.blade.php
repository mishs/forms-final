<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
{!! Form::open(['url' => 'calculate', 'method' => 'post']) !!}
{!! Form::label('first-number', 'First Number') !!}
{!! Form::text('first-number-input', '') !!}
{!! Form::submit('Submit'); !!}
{!! Form::close() !!}
</body>
</html>