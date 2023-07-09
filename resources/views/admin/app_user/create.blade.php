@extends('admin.layouts.adminbase')

@section('content')
<div class="users-table">
    <div class="row">
        <div class="col-sm-4">
            <h4 class="card-title mb-0">{{ !isset($user) ? __('app.Create :name', ['name'=>__('app.student')]) : __('app.Edit :name', ['name'=>__('app.student')]) }}</h4>
            <div class="small text-muted">{{ __('app.Create a new :name', ['name'=>__('app.student')]) }} {{ isset($totalUsers) && $totalUsers }}
            </div>
        </div>

        <div class="col-sm-8 text-right">
            <a class="btn btn-sm btn-primary" href="{{ route('hoc-vien.index') }}">
                <i class="fa fa-dot-circle-o"></i> {{ __('app.Back') }}</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <form class="form-horizontal"
                action="{{ isset($user) ? route('hoc-vien.update', $user->id) : route('hoc-vien.store') }}"
                method="POST"
                enctype="multipart/form-data">
                @csrf
                @if (isset($user))
                    @method('PUT')
                @endif
                <div class="row form-warpper">
                    <div class="col-sm-7">
                                
                        <div class="card">
                            <div class="card-body">

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                            <input class="form-control" id="name" type="text" name="name"
                                                placeholder="Username" autocomplete="username"
                                                value="{{ isset($user) ? $user->name : '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope-o"></i>
                                                </span>
                                            </div>
                                            <input class="form-control" id="email" type="email" name="email"
                                                placeholder="Email" autocomplete="email"
                                                value="{{ isset($user) ? $user->email : '' }}" @if (isset($user)) disabled @endif>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    {{-- <label class="col-md-3 col-form-label">{{ __('app.Is active :name') }}</label> --}}
                                    <div class="col-md-9 col-form-label">
                                        <div class="form-check form-check-inline mr-1">
                                            <input class="form-check-input"
                                            id="status"
                                            type="checkbox"
                                            name="status"
                                            @isset($user->status)
                                            checked
                                            @endisset 
                                            value="{{ isset($user) ? $user->status : '0' }}" />
                                            <label class="form-check-label" for="status">{{ __('app.Is active :name', ['name' => __('app.student')]) }}</label>
                                        </div>
                                    </div>
                                </div>

                                @if (! isset($user))
                                    <div class="form-group row">
                                        <label for="password" class="col-md-12 col-form-label _text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-12">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-12 col-form-label _text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-12">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                @endif
                                
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-phone"></i>
                                                </span>
                                            </div>
                                            <input class="form-control" id="phone" type="phone" name="phone"
                                                placeholder="{{ __('app.Phone') }}" autocomplete="phone"
                                                value="{{ isset($user) ? $user->phone : '' }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Avarta') }}</label>
                                        @isset($user->image)                                    
                                            <div id="avarta" class="hocvien_avarta"><img src="{{ isset($user) ? asset('storage/' . $user->image) : '' }}" alt=""></div>
                                        @endisset 
                                        <input class="form-control" id="image" type="file" name="image" value="{{ isset($user) ? asset('storage/' . $user->image) : null }}">
                                        <input class="form-control" id="image_src" type="hidden" name="image_src" value="{{ isset($user) ?  $user->image : null }}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Date of birth') }}</label>
                                        <input class="form-control" id="date_of_birth" type="date" name="date_of_birth"
                                            placeholder="{{ __('app.Date of birth') }}" autocomplete="date_of_birth"
                                            value="{{ isset($user) ? $user->date_of_birth : '' }}">
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-text"></i>
                                                </span>
                                            </div> 
                                            <textarea class="form-control" id="description" type="text" name="description"
                                                placeholder="{{ __('app.Description') }}" autocomplete="{{ __('app.description') }}">{{ isset($user) ? $user->description : '' }}</textarea>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label>{{ __('app.Facebook') }}</label>
                                        <input class="form-control" id="facebook" type="text" name="facebook"
                                            placeholder="{{ __('app.Facebook') }}" autocomplete="facebook"
                                            value="{{ isset($user) ? $user->facebook : '' }}">
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button class="btn btn-sm btn-success" type="submit">
                                <i class="fa fa-dot-circle-o"></i> {{ !isset($user) ? __('app.Create') : __('app.Edit') }}</button>
                            </div>
                        </div> <!-- /.card -->
                    </div>

                    <div class="col-sm-5">
                                
                        <div class="card">
                            <div class="card-body">

                                {{-- Form tài khoản --}} 
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="balance">{{ __('app.Balance') }}: {{ isset($user) ? $user->balance : '0' }}</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-money"></i>
                                                </span>
                                            </div>
                                            <input class="form-control" id="balance" type="text" name="balance"
                                                placeholder="{{ __('app.Total :name', ['name'=> __('app.balance')]) }}" autocomplete="balance"
                                                value="{{ isset($user) ? $user->balance : '' }}">
                                        </div>
                                    </div>
                                </div> 
                                
                                @isset($user)
                                <table class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>{{ __('app.Category') }}</th>
                                        <th>{{ __('app.End date') }}</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($user->permissions as $permission)
                                        <tr>
                                            <td></td>
                                            <td>
                                                @if(! is_null($user->get_category_permission($permission->model_name, $permission->model_id)))
                                                    {{ $user->get_category_permission($permission->model_name, $permission->model_id)->name }}
                                                @endif</td>
                                            <td>{{\Carbon\Carbon::parse($permission->end_date)->format('d/m/Y') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @endisset

                                {{-- End form tài khoản --}}

                            </div>
                        </div>


                </div> <!-- /.form-warpper -->
            </form>
        </div> <!-- /.col-12 -->
            @isset($user)
            <div class="col-12">
                <div class="row">   
                    <div class="card w-100">
                        <div class="card-body">
                            {{-- Danh sách packages --}}
                            @include('admin.components.table_packages', ['packages' => $packages, 'user' => $user])
                        </div>
                    </div> <!-- /.card -->
                </div>         
            </div>                
            @endisset

            @isset($user)
            <div class="col-12">
                <div class="row">   
                    <div class="card w-100">
                        <div class="card-body">
                            {{-- Danh sách logs --}}
                            <h2>{{ __('app.Logs') }}</h2>
                            @isset($logs)

                                <table class="table">
                                    <thead>
                                        <th>No</th>
                                        <th>{{ __('app.Package name') }}</th>
                                        <th>{{ __('app.Duration') }}</th>
                                        <th>{{ __('app.Price') }}</th>
                                        <th class="text-right">{{ __('app.Actions') }}</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($logs as $log)
                                        <tr>
                                            <td></td>
                                            <td>{{ $log->package_id }} {{ $log->package->name}}</td>
                                            <td>{{ $log->package_duration }}</td>
                                            <td><strong>@currency_format($log->package_price)</strong></td>
                                            <td class="date">{{ \Carbon\Carbon::parse($log->updated_at)->format('l j F Y H:i:s') }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                            @endisset
                        </div>
                    </div> <!-- /.card -->
                </div>         
            </div>           
            @endisset

        </div>
    </div> <!-- /.row -->
</div>
@endsection

@section('stylesheets')
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {  
            $('.roles-selector').select2(); 
        });
    </script>
@endsection