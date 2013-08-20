@extends('layout')

@section('content')
  <table>
    <thead>
      <th>Email</th>
      <th>Name</th>
    </thead>
    <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->email }}</td>
        <td>{{ $user->name }} </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@stop
