<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerTitle"
aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body d-flex flex-column">
            <div class="d-flex justify-content-between mb-4">
                <h5 class="modal-title" id="registerTitle">Register</h5>
                <button type="button" style="outline: none;" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route("register") }}" method="POST" id="register">
                @csrf
                <div class="form-group">
                    <label for="first_name">First name</label>
                    <input type="text" class="form-control  @error('first_name') is-invalid @enderror" value="{{ old("first_name") }}" id="first_name" name="first_name" required>
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first("first_name") }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="last_name">Last name</label>
                    <input type="text" class="form-control @error('last_name') is-invalid @enderror " value="{{ old("last_name") }}" id="last_name" name="last_name" required>
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first("last_name") }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="company">Company</label>
                    <input type="text" class="form-control @error('company') is-invalid @enderror " value="{{ old("company") }}" id="company" name="company" required>
                    @error('company')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first("company") }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control @error('register_email') is-invalid @enderror " value="{{ old("register_email") }}" id="email" name="register_email" required>
                    @error('register_email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first("register_email") }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="register_password" class="form-control @error('register_password') is-invalid @enderror " id="password" required>
                    @error('register_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first("register_password") }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary border-0 w-100 mb-2 mt-3"
                    style="outline: none;">Register</button>

            </form>
        </div>
    </div>
</div>
</div>
