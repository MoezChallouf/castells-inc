<div class="mt-5">
    <div class="w-100 clearfix"></div>
    <div class="mb-5">
    <h3 class="mb-4 section-title">{{ count($comments) }} Commentaires</h3>
    
    @foreach($comments as $comment)
    <div class="media mb-4" wire:key="comment-{{ $comment->id }}">
        <img src="https://www.gravatar.com/avatar/{{ md5(strtolower(trim($comment->email))) }}?d=mp" 
             alt="Utilisateur" class="img-fluid mr-3 mt-1" style="width: 45px;">
        <div class="media-body">
            <h6>{{ $comment->name }} <small><i>{{ $comment->created_at->translatedFormat('d M Y \à H:i') }}</i></small></h6>
            <p>{{ $comment->message }}</p>
        </div>
    </div>
    @endforeach
</div>

<div class="bg-light p-5">
    <h3 class="mb-4 section-title">Laisser un commentaire</h3>
    <form wire:submit.prevent="addComment">
        <div class="form-group">
            <label for="name">Nom *</label>
            <input type="text" class="form-control" id="name" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" id="email" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="message">Commentaire *</label>
            <textarea id="message" cols="30" rows="5" class="form-control" wire:model="message"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary px-3">
                <span wire:loading.remove>Publier le commentaire</span>
                <span wire:loading>Publication en cours...</span>
            </button>
        </div>
    </form>
</div>
</div>