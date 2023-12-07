

<div class="container mt-3">
    @if(session()->has('message'))
    <div class="alert alert-primary mb-2">
            <div>{{ session('message') }}</div>
    </div>
    @endif

    <div class="row bolder">
        <div class="col-sm-8">
            <input type="text" class="form-control" placeholder="{{ $errors->has('content') ? $errors->first('content') : '' }}" wire:model="content">
        </div>
        <div class="col-sm-4">
            <button class="btn btn-outline-success" wire:click="addPost">Submit</button>
        </div>
    </div>
    <div class="mt-3">
        <h2>List Post</h2>
    </div>
    @foreach ($post as $item)
        <div class="rounded border shadow p-3 my-2">
            <span class="fs-2">{{ $item['created_by'] }}</span><span class="text-danger"> {{ $item['created_at'] }}</span>
            <p>{{ $item['content'] }}</p>
        </div>
    @endforeach    
</div>