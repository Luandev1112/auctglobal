@extends('layouts.app')

@section('content')
    <h3 class="page-title">{{getPhrase('users')}}</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            {{$title}}
        </div>

        <div class="panel-body table-responsive">
            <div class="row">

                <div class="col-md-6">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th> {{getPhrase('name')}} </th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <th> {{getPhrase('username')}} </th>
                            <td field-key='name'>{{ $user->username }}</td>
                        </tr>


                        <tr>
                            <th> {{getPhrase('email')}} </th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>


                        <tr>
                            <th>@lang('global.users.fields.role')</th>
                            <td field-key='role'>
                               {{ $user->display_name }}
                            </td>
                        </tr>

                         <tr>
                            <th> {{getPhrase('phone')}} </th>
                            <td field-key='phone'>{{ $user->phone }}</td>
                        </tr>

                         <tr>
                            <th> {{getPhrase('status')}} </th>
                            <td field-key='status'>
                                @if ($user->approved==1)
                                {{getPhrase('approved')}}
                                @elseif ($user->approved==0)
                                {{getPhrase('disapproved')}}
                                @endif
                            </td>
                        </tr>
                       
                    </table>

                </div>



                <div class="col-md-6">

                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <th> {{getPhrase('country')}} </th>
                            <td field-key='country'>{{ $user->title }}</td>
                        </tr>

                        <tr>
                            <th> {{getPhrase('state')}} </th>
                            <td field-key='state'>{{ $user->state }}</td>
                        </tr>

                        <tr>
                            <th> {{getPhrase('city')}} </th>
                            <td field-key='city'>{{ $user->city }}</td>
                        </tr>

                        <tr>
                            <th> {{getPhrase('address')}} </th>
                            <td field-key='address'>{{ $user->address }}</td>
                        </tr>

                        <tr>
                            <th> {{getPhrase('image')}} </th>
                        <td field-key='image'>  <img src="{{ getProfilePath($user->image) }}" /> </td>
                        </tr>
                        
                        @if ($user->role_id==getRoleData('seller'))
                        <tr>
                            <th> {{getPhrase('company_logo')}} </th>
                        <td field-key='company_logo'>  <img src="{{ getCompanyLogo($user->company_logo) }}" /> </td>
                        </tr>
                        @endif
                       
                    </table>

                </div>

            </div>









            <p>&nbsp;</p>

            <a href="{{ URL_USERS }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop
