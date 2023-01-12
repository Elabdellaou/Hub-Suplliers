<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body d-flex flex-column">
                <div class="d-flex justify-content-between mb-4">
                    <h5 class="modal-title" id="loginTitle">Sign in</h5>
                    <button type="button" style="outline: none;" class="close" data-dismiss="modal"
                        aria-label="Close" title="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route("login") }}" method="post" id="login">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control @error("email") is-invalid @enderror" value="{{ old("email") }}" id="email" name="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first("email") }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control @error("password") is-invalid @enderror" id="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first("password") }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" value="false" style="cursor:pointer">
                        <label class="form-check-label" for="remember_me" style="cursor:pointer">Remember me</label>
                    </div>
                    <a href="{{ route("password.request") }}" class="">Forgot Password?</a>
                    <button type="submit" class="btn btn-primary border-0 w-100 mb-2 mt-3"
                        style="outline: none;">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
