<form id="form1" action="{{ route('produk.store') }}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')
  <button class="btn btn-info" type="submit" id="submitButton">
    Submit
  </button>
</form>