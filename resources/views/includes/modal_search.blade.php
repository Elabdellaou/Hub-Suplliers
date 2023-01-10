<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
            <div class="header-modal mb-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="mb-5">
                <form action="{{ route("products.search.all-attribute") }}" class="px-5" method="post">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="title" placeholder="Search Product" id="search-modal">
                        <button type="submit" class="input-group-text text-primary bg-transparent"
                            style="outline: none">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                {{-- <input type="text" class="form-control" name="title" placeholder="Search Product" id="search-modal">
                <div class="result mt-3 border" style="border-radius: 5px;">

                </div> --}}
            </div>
        </div>
        {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
      </div>
    </div>
  </div>
