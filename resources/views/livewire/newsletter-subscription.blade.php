<div>
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h4 class="text-primary mb-4">Newsletter</h4>
    <form wire:submit.prevent="submit">
        @csrf
        <div class="form-group">
            <input type="text" 
                   class="form-control border-0 @error('name') is-invalid @enderror" 
                   wire:model="name"
                   placeholder="Your Name"
                   required>
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div class="form-group">
            <input type="email" 
                   class="form-control border-0 @error('email') is-invalid @enderror" 
                   wire:model="email"
                   placeholder="Your Email"
                   required>
            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
        <div>
            <button class="btn btn-lg btn-primary btn-block border-0" type="submit">
                Submit Now
                <div wire:loading wire:target="submit">
                    <span class="spinner-border spinner-border-sm"></span>
                </div>
            </button>
        </div>
    </form>
</div>
