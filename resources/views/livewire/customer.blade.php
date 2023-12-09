<div>
    <h3>Create Customer</h3>
    <hr>
    <form action="#" class="rounded bolder shadow p-5 my-2" wire:submit="store">
        @if(session('msg'))
            <div class="alert alert-success" id="flash-message">
                {{ session('msg') }}
            </div>
            <script>
                // Sử dụng JavaScript để ẩn đi sau 5 giây
                setTimeout(function() {
                    document.getElementById('flash-message').style.display = 'none';
                }, 2000);
            </script>
        @endif
        Full Name: @error('full_name') <span class="text-danger">{{ $message }}</span> @enderror
        <input type="text"  class="form-control mt-2 mb-2" wire:model="full_name">
        
    
        Email: @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        <input type="email" class="form-control mt-2 mb-2" wire:model="email">
        
    
        Password: @error('password') <span class="text-danger">{{ $message }}</span> @enderror
        <input type="password" class="form-control mt-2 mb-2" wire:model="password">
        
    
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>
    
</div>
