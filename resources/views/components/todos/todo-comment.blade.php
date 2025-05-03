<div class="modal fade" id="modal-comment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Chat</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
  
        <div class="modal-body p-0" style="height: 70vh;">
          <!-- Chat content -->
          <div class="card border-0 h-100">
            <div class="card-body d-flex flex-column p-3" style="overflow-y: auto;">
              <!-- Dynamic chat messages -->
              <div>
                {{ $description }}
              </div>
            </div>
  
            <!-- Chat input footer -->
            <div class="card-footer d-flex align-items-center p-3">
              <img src="{{ asset('images/foto_bonita.jpg') }}" alt="Avatar" class="rounded-circle me-2" style="width: 40px; height: 40px;">
              <form class="w-100 d-flex align-items-center gap-4" method="POST" action="{{ route('comment.store') }}">
                @csrf
                <div class="w-100">
                    <input type="text" class="form-control me-2" placeholder="Digite uma mensagem...">
                </div>
                <a href="#" class="text-muted me-2"><i class="fas fa-paperclip"></i></a>
                <a href="#" class="text-muted me-2"><i class="fas fa-smile"></i></a>
                <button type="submit"><i class="fas fa-paper-plane text-primary"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  